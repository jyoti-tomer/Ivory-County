<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Function to log errors
function logError($message) {
    error_log(date('Y-m-d H:i:s') . " - Contact Form Error: " . $message . PHP_EOL, 3, '../logs/contact_errors.log');
}

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    logError("Invalid request method: " . $_SERVER['REQUEST_METHOD']);
    header('Location: ../?status=error&msg=invalid_request');
    exit;
}

// Check for CSRF token (recommended security measure)
session_start();
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    logError("CSRF token mismatch");
    header('Location: ../?status=error&msg=security_error');
    exit;
}

// Get and sanitize form data
$name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
$message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';

$errors = [];

// Enhanced validation
// Name validation
if (empty($name)) {
    $errors[] = "Name is required";
} elseif (strlen($name) < 2 || strlen($name) > 50) {
    $errors[] = "Name must be between 2 and 50 characters";
} elseif (!preg_match("/^[a-zA-Z\s\-'\.]+$/u", $name)) {
    $errors[] = "Name contains invalid characters";
}

// Email validation
if (empty($email)) {
    $errors[] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
} elseif (strlen($email) > 100) {
    $errors[] = "Email address too long";
}

// Phone validation
if (empty($phone)) {
    $errors[] = "Phone number is required";
} elseif (!preg_match('/^[\+]?[0-9\s\-\(\)]{10,20}$/', $phone)) {
    $errors[] = "Invalid phone number format";
}


// Message validation
if (empty($message)) {
    $message = 'No message provided.';
} elseif (strlen($message) < 5) {
    $errors[] = "Message must be at least 5 characters long";
} elseif (strlen($message) > 1000) {
    $errors[] = "Message is too long (maximum 1000 characters)";
}

// Check for spam patterns
$spam_keywords = ['viagra', 'casino', 'lottery', 'winner', 'congratulations', 'claim now'];
$combined_text = strtolower($name . ' ' . $email . ' ' . $message);
foreach ($spam_keywords as $keyword) {
    if (strpos($combined_text, $keyword) !== false) {
        logError("Spam detected: " . $keyword . " in submission from " . $email);
        header('Location: ../?status=error&msg=spam_detected');
        exit;
    }
}

// If there are validation errors, redirect back
if (!empty($errors)) {
    logError("Validation errors: " . implode(", ", $errors));
    header('Location: ../?status=error&msg=' . urlencode(implode("; ", $errors)));
    exit;
}

// Rate limiting (optional - requires session or database)
if (!isset($_SESSION['last_submission'])) {
    $_SESSION['last_submission'] = 0;
}
if (time() - $_SESSION['last_submission'] < 60) { // 1 minute cooldown
    logError("Rate limit exceeded from IP: " . $_SERVER['REMOTE_ADDR']);
    header('Location: ../?status=error&msg=rate_limit');
    exit;
}

// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //  $mail->Username = ivorycountymails
    // $mail->Password ='owmd btuj hxqe kqtg'
    // // Consider using environment variables
    // rewardzhubmail Consider using environment variables
   $mail->Username = 'noreplyivorycounty@gmail.com';
    $mail->Password ='owmd btuj hxqe kqtg'; 
 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Enable SMTP debug (remove in production)
    // $mail->SMTPDebug = 2;   Evoglim   
    
    // Sender and recipient settings
    $mail->setFrom('noreplyivorycounty@gmail.com', 'Ivory County Contact Form');
    $mail->addReplyTo($email, $name);
   $mail->addAddress('deepak.sxn1@gmail.com');
   
    // Email content
    $mail->isHTML(true);
    $mail->Subject = "New Contact Form Submission from {$name}";
    
    // HTML email body
    $mail->Body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #f4f4f4; padding: 10px; border-radius: 5px; }
            .content { padding: 20px 0; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #333; }
            .value { color: #666; margin-top: 5px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Submission</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Name:</div>
                    <div class='value'>{$name}</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>{$email}</div>
                </div>
                <div class='field'>
                    <div class='label'>Phone:</div>
                    <div class='value'>{$phone}</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div class='value'>" . nl2br($message) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Submitted At:</div>
                    <div class='value'>" . date('Y-m-d H:i:s') . "</div>
                </div>
                <div class='field'>
                    <div class='label'>IP Address:</div>
                    <div class='value'>" . $_SERVER['REMOTE_ADDR'] . "</div>
                </div>
            </div>
        </div>
    </body>
    </html>";
    
    // Plain text alternative
    $mail->AltBody = "New contact form submission:\n\n" .
                     "Name: {$name}\n" .
                     "Email: {$email}\n" .
                     "Phone: {$phone}\n" .
                     "Message:\n{$message}\n\n" .
                     "Submitted At: " . date('Y-m-d H:i:s') . "\n" .
                     "IP Address: " . $_SERVER['REMOTE_ADDR'];

    // Test SMTP connection first
    if (!$mail->smtpConnect()) {
        throw new Exception("SMTP connection failed");
    }

    // Send the email
    if ($mail->send()) {
        // Update last submission time
        $_SESSION['last_submission'] = time();
        
        // Log successful submission
        error_log(date('Y-m-d H:i:s') . " - Contact form submitted successfully by: " . $email . PHP_EOL, 3, '../logs/contact_success.log');
        
        // Send confirmation email to user (optional)
        sendConfirmationEmail($email, $name);
        
        header('Location: ../?status=success');
    } else {
        throw new Exception("Mail sending failed: " . $mail->ErrorInfo);
    }
    
} catch (Exception $e) {
    logError("PHPMailer Error: " . $e->getMessage());
    logError("SMTP Error Info: " . $mail->ErrorInfo);
    header('Location: ../?status=error&msg=mail_error');
} finally {
    // Close SMTP connection
    $mail->smtpClose();
}

exit;

// Function to send confirmation email to user
function sendConfirmationEmail($userEmail, $userName) {
    $confirmMail = new PHPMailer(true);
    
    try {
        $confirmMail->isSMTP();
        $confirmMail->Host = 'smtp.gmail.com';
        $confirmMail->SMTPAuth = true;
        $confirmMail->Username = 'noreplyivorycounty@gmail.com';
        $confirmMail->Password = 'Pihu@1234';
        $confirmMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $confirmMail->Port = 587;
        
        $confirmMail->setFrom('noreplyivorycounty@gmail.com', 'Ivory County Contact Form');
        $confirmMail->addAddress($userEmail, $userName);
        
        $confirmMail->isHTML(true);
        $confirmMail->Subject = 'Thank you for contacting Ivory County';
        $confirmMail->Body = "
        <html>
        <body style='font-family: Poppins, sans-serif;'>
            <h2>Thank you for contacting us!</h2>
            <p>Dear {$userName},</p>
            <p>We have received your message and will get back to you within 24-48 hours.</p>
            <p>Best regards,<br>Ivory County</p>
        </body>
        </html>";
        
        $confirmMail->send();
    } catch (Exception $e) {
        logError("Confirmation email failed: " . $e->getMessage());
    }
}
?>
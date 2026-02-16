<?php
session_start();

if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("Security error.");
}

if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
    die("All fields required.");
}

$name  = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);

// Save lead
$lead = "Name: $name | Email: $email | Phone: $phone | Date: " . date("Y-m-d H:i:s") . PHP_EOL;
file_put_contents("leads.txt", $lead, FILE_APPEND);

// PDF path
$file = "src/assets/ivory-county-layout.pdf";

if (!file_exists($file)) {
    die("File not found.");
}

header("Content-Description: File Transfer");
header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=Ivory-County-Layout.pdf");
header("Content-Length: " . filesize($file));
readfile($file);
exit;
?>

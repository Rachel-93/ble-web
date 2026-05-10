<?php
header("Content-Type: application/json");

// CORS
$allowed_origins = [
    "https://bleglobal.com.my",
    "https://www.bleglobal.com.my",
    "http://localhost:5173"
];

$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
if (in_array($origin, $allowed_origins)) {
    header("Access-Control-Allow-Origin: $origin");
}
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Handle preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Method not allowed"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

$from = isset($data['from']) ? trim($data['from']) : '';
$subject = isset($data['subject']) ? trim($data['subject']) : '';
$text = isset($data['text']) ? trim($data['text']) : '';

if (empty($from) || empty($subject) || empty($text)) {
    http_response_code(400);
    echo json_encode(["error" => "All fields are required!"]);
    exit;
}

// Validate email
if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["error" => "Invalid email address"]);
    exit;
}

$to = "admin@bleglobal.com.my";
$email_subject = "[Website Enquiry] " . $subject;
$email_body = "From: " . $from . "\n\n" . $text;
$headers = "From: admin@bleglobal.com.my\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $email_subject, $email_body, $headers)) {
    echo json_encode(["message" => "Email sent successfully!"]);
} else {
    http_response_code(500);
    echo json_encode(["error" => "Failed to send email"]);
}
?>

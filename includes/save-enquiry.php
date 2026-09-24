<?php
require_once __DIR__ . '/../manager/database/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	http_response_code(405);
	echo json_encode(['success' => false, 'message' => 'Invalid request']);
	exit();
}

$enquiryType = trim(mysqli_real_escape_string($con, $_POST['enquiry_type'] ?? 'Website Enquiry'));
$name = trim(mysqli_real_escape_string($con, $_POST['name'] ?? ''));
$phone = trim(mysqli_real_escape_string($con, $_POST['phone'] ?? ''));
$email = trim(mysqli_real_escape_string($con, $_POST['email'] ?? ''));
$message = trim(mysqli_real_escape_string($con, $_POST['message'] ?? ''));
$state = trim(mysqli_real_escape_string($con, $_POST['state'] ?? ''));

if ($name === '' || $phone === '') {
	echo json_encode(['success' => false, 'message' => 'Name and phone are required']);
	exit();
}

if ($enquiryType === '') {
	$enquiryType = 'Website Enquiry';
}

$sql = mysqli_query($con, "INSERT INTO `contact` (`enquiry_type`, `name`, `email`, `state`, `phone`, `message`, `status`) VALUES ('$enquiryType', '$name', '$email', '$state', '$phone', '$message', 0)");

if ($sql) {
	echo json_encode(['success' => true, 'message' => 'Enquiry submitted successfully']);
} else {
	echo json_encode(['success' => false, 'message' => 'Failed to save enquiry']);
}
exit();

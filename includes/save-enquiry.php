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

$enquiryTypeRaw = trim($_POST['enquiry_type'] ?? 'Website Enquiry');
$nameRaw = trim($_POST['name'] ?? '');
$phoneRaw = trim($_POST['phone'] ?? '');
$emailRaw = trim($_POST['email'] ?? '');
$messageRaw = trim($_POST['message'] ?? '');
$stateRaw = trim($_POST['state'] ?? '');

if ($name === '' || $phone === '') {
	echo json_encode(['success' => false, 'message' => 'Name and phone are required']);
	exit();
}

if ($enquiryType === '') {
	$enquiryType = 'Website Enquiry';
}
if ($enquiryTypeRaw === '') {
	$enquiryTypeRaw = 'Website Enquiry';
}

$sql = mysqli_query($con, "INSERT INTO `contact` (`enquiry_type`, `name`, `email`, `state`, `phone`, `message`, `status`) VALUES ('$enquiryType', '$name', '$email', '$state', '$phone', '$message', 0)");

if ($sql) {
	$adminTo = trim((string)($emailid ?? ''));
	if ($adminTo !== '' && function_exists('SendEmailer')) {
		$esc = function ($v) {
			return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
		};
		$subject = 'New Website Enquiry - ' . $enquiryTypeRaw;
		$body = '<div style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#222;line-height:1.6;">'
			. '<h2 style="margin:0 0 12px;color:#0d47a1;">New Enquiry Received</h2>'
			. '<table style="border-collapse:collapse;width:100%;max-width:560px;">'
			. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;width:120px;"><strong>Type</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($enquiryTypeRaw) . '</td></tr>'
			. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Name</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($nameRaw) . '</td></tr>'
			. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Email</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($emailRaw !== '' ? $emailRaw : '-') . '</td></tr>'
			. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Phone</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($phoneRaw) . '</td></tr>'
			. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>State</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($stateRaw !== '' ? $stateRaw : '-') . '</td></tr>'
			. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;vertical-align:top;"><strong>Message</strong></td><td style="padding:6px 10px;border:1px solid #ddd;white-space:pre-wrap;">' . $esc($messageRaw !== '' ? $messageRaw : '-') . '</td></tr>'
			. '</table>'
			. '<p style="margin:14px 0 0;color:#666;font-size:12px;">This is an automated alert from the website contact form.</p>'
			. '</div>';
		SendEmailer($adminTo, $subject, $body, null);
	}
	echo json_encode(['success' => true, 'message' => 'Enquiry submitted successfully']);
} else {
	echo json_encode(['success' => false, 'message' => 'Failed to save enquiry']);
}
exit();


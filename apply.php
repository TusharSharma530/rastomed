<?php
require_once __DIR__ . '/manager/database/db.php';

$applySuccess = '';
$applyError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = trim($_POST['email'] ?? '');
	$mobile = trim($_POST['mobile'] ?? '');
	$firstName = trim($_POST['first_name'] ?? '');
	$lastName = trim($_POST['last_name'] ?? '');
	$country = trim($_POST['country'] ?? '');
	$jobFunction = trim($_POST['job_function'] ?? '');
	$consent = isset($_POST['consent']) ? 1 : 0;

	if ($email === '' || $mobile === '' || $firstName === '' || $lastName === '' || $country === '' || $jobFunction === '' || !$consent) {
		$applyError = 'Please fill all required fields and accept the consent policy.';
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$applyError = 'Please enter a valid email address.';
	} elseif (!isset($_FILES['resume']) || $_FILES['resume']['error'] !== UPLOAD_ERR_OK) {
		$applyError = 'Please upload your resume (PDF, DOC, or DOCX).';
	} else {
		$resume = $_FILES['resume'];
		$allowedExt = ['pdf', 'doc', 'docx'];
		$ext = strtolower(pathinfo($resume['name'], PATHINFO_EXTENSION));
		$maxSize = 5 * 1024 * 1024;

		if (!in_array($ext, $allowedExt, true)) {
			$applyError = 'Resume must be a PDF, DOC, or DOCX file.';
		} elseif ($resume['size'] > $maxSize) {
			$applyError = 'Resume size must be 5MB or less.';
		} else {
			$uploadDir = __DIR__ . '/uploads/resumes';
			if (!is_dir($uploadDir)) {
				mkdir($uploadDir, 0755, true);
			}
			$safeName = 'resume_' . time() . '_' . bin2hex(random_bytes(4)) . '.' . $ext;
			$dest = $uploadDir . '/' . $safeName;

			if (!move_uploaded_file($resume['tmp_name'], $dest)) {
				$applyError = 'Could not upload resume. Please try again.';
			} else {
				$fullName = trim($firstName . ' ' . $lastName);
				$nameEsc = mysqli_real_escape_string($con, $fullName);
				$emailEsc = mysqli_real_escape_string($con, $email);
				$mobileEsc = mysqli_real_escape_string($con, $mobile);
				$countryEsc = mysqli_real_escape_string($con, $country);
				$jobEsc = mysqli_real_escape_string($con, $jobFunction);
				$fileEsc = mysqli_real_escape_string($con, 'uploads/resumes/' . $safeName);

				$sql = mysqli_query($con, "INSERT INTO applyjob (name, email, contactno, country, job_function, applyfor, degree, file) VALUES ('$nameEsc', '$emailEsc', '$mobileEsc', '$countryEsc', '$jobEsc', 0, '', '$fileEsc')");

				if ($sql) {
					$adminTo = trim((string)($emailid ?? ''));
					if ($adminTo !== '' && function_exists('SendEmailer')) {
						$esc = function ($v) {
							return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8');
						};
						$subject = 'New Job Application - ' . $fullName;
						$body = '<div style="font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#222;line-height:1.6;">'
							. '<h2 style="margin:0 0 12px;color:#0d47a1;">New Job Application Received</h2>'
							. '<table style="border-collapse:collapse;width:100%;max-width:560px;">'
							. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;width:120px;"><strong>Name</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($fullName) . '</td></tr>'
							. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Email</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($email) . '</td></tr>'
							. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Mobile</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($mobile) . '</td></tr>'
							. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Country</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($country) . '</td></tr>'
							. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Job Function</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($jobFunction) . '</td></tr>'
							. '<tr><td style="padding:6px 10px;border:1px solid #ddd;background:#f5f7fa;"><strong>Resume</strong></td><td style="padding:6px 10px;border:1px solid #ddd;">' . $esc($safeName) . '</td></tr>'
							. '</table>'
							. '<p style="margin:14px 0 0;color:#666;font-size:12px;">Resume is attached with this email. Also saved on server at uploads/resumes/' . $esc($safeName) . '</p>'
							. '</div>';
						SendEmailer($adminTo, $subject, $body, $dest);
					}
					$applySuccess = 'Thank you! Your application has been submitted. Our team will contact you shortly.';
				} else {
					@unlink($dest);
					$applyError = 'Failed to save your application. Please try again.';
				}
			}
		}
	}
}
?>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>
    <!-- Hero Banner -->
    <section class="apply-hero">
      <img src="assets/images/apply-hero.jpg" alt="Job Alerts at RastoMed Pharma" class="apply-hero__bg">
      <div class="apply-hero__overlay"></div>
      <div class="apply-hero__content">
        <span class="apply-hero__badge">Job Alerts</span>
        <h1 class="apply-hero__title">Subscribe for Job Alerts</h1>
      </div>
    </section>

    <!-- Application Form -->
    <section class="apply-form-section">
      <div class="container">
        <div class="apply-form-card">
          <?php if ($applySuccess !== ''): ?>
            <div id="applySuccess" class="enquiry-modal__success" style="display:block;">
              <div class="enquiry-modal__success-icon">&#10003;</div>
              <h3>Thank You!</h3>
              <p><?= htmlspecialchars($applySuccess) ?></p>
            </div>
          <?php else: ?>
          <?php if ($applyError !== ''): ?>
            <div class="apply-form__error" style="display:block;margin-bottom:16px;padding:12px 14px;border-radius:8px;background:#fdecea;color:#b71c1c;border:1px solid #f5c6cb;font-size:0.95rem;">
              <?= htmlspecialchars($applyError) ?>
            </div>
          <?php endif; ?>
          <form class="apply-form" action="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST" enctype="multipart/form-data">
            <div class="apply-form__row">
              <div class="apply-form__group">
                <label class="apply-form__label">Primary Email<span>*</span></label>
                <input type="email" name="email" class="apply-form__input" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
              </div>
              <div class="apply-form__group">
                <label class="apply-form__label">Mobile Number<span>*</span></label>
                <div class="apply-form__phone">
                  <span class="apply-form__phone-code">IN +91</span>
                  <input type="tel" name="mobile" class="apply-form__input apply-form__input--phone" value="<?= htmlspecialchars($_POST['mobile'] ?? '') ?>" required>
                </div>
              </div>
            </div>

            <div class="apply-form__row">
              <div class="apply-form__group">
                <label class="apply-form__label">First Name<span>*</span></label>
                <input type="text" name="first_name" class="apply-form__input" value="<?= htmlspecialchars($_POST['first_name'] ?? '') ?>" required>
              </div>
              <div class="apply-form__group">
                <label class="apply-form__label">Last Name<span>*</span></label>
                <input type="text" name="last_name" class="apply-form__input" value="<?= htmlspecialchars($_POST['last_name'] ?? '') ?>" required>
              </div>
            </div>

            <div class="apply-form__row">
              <div class="apply-form__group">
                <label class="apply-form__label">Country<span>*</span></label>
                <select name="country" class="apply-form__select" required>
                  <?php
                  $countries = ['India', 'United States', 'United Kingdom', 'Canada', 'Australia', 'Germany', 'Other'];
                  $selectedCountry = $_POST['country'] ?? 'India';
                  foreach ($countries as $c):
                  ?>
                  <option value="<?= htmlspecialchars($c) ?>"<?= $selectedCountry === $c ? ' selected' : '' ?>><?= htmlspecialchars($c) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="apply-form__group">
                <label class="apply-form__label">Job Function<span>*</span></label>
                <select name="job_function" class="apply-form__select" required>
                  <option value="" disabled<?= empty($_POST['job_function']) ? ' selected' : '' ?>>Select</option>
                  <?php
                  $functions = ['Sales', 'Marketing', 'Research & Development', 'Quality Assurance', 'Manufacturing', 'Finance', 'Human Resources', 'Operations', 'Other'];
                  $selectedFn = $_POST['job_function'] ?? '';
                  foreach ($functions as $fn):
                  ?>
                  <option value="<?= htmlspecialchars($fn) ?>"<?= $selectedFn === $fn ? ' selected' : '' ?>><?= htmlspecialchars($fn) ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="apply-form__group">
              <label class="apply-form__label">Resume<span>*</span></label>
              <input type="file" name="resume" class="apply-form__file" accept=".pdf,.doc,.docx" required>
            </div>

            <div class="apply-form__consent">
              <h3 class="apply-form__consent-title">Consent/Policy</h3>
              <p class="apply-form__consent-text">
                We collect and process your personal data strictly for recruitment purposes, including application screening, evaluations, offer roll-outs, and background checks. Your information is securely stored in our applicant tracking system and handled in accordance with applicable data protection laws.<br>
                By proceeding, you consent to the use of your data for these purposes.
              </p>
              <label class="apply-form__checkbox">
                <input type="checkbox" name="consent" required>
                <span>I agree to the processing of my personal data for recruitment activities, as outlined above.</span>
              </label>
            </div>

            <div class="apply-form__submit-wrap">
              <button type="submit" class="apply-form__submit">SUBMIT</button>
            </div>
          </form>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>


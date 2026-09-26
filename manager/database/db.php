<?php session_start();
error_reporting(0);
define('BASE_PATH',"//localhost/rastomed/");
define('DB_HOST', 'localhost');
define('DB_NAME','rastomed');
define('DB_USER','root');
define('DB_PASSWORD','');
// session_destroy();
date_default_timezone_set("Asia/Kolkata"); 
$path = BASE_PATH;
$con = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; 
//Load Composer's autoloader
@include __DIR__ . '/../PHPMailer/vendor/autoload.php';


function SendEmailer($senderemail,$subject,$bodydata, $filePath=null){

if (!class_exists('PHPMailer\PHPMailer\PHPMailer')) {
    return false;
}

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                               //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tusharsharma6868@gmail.com';                     //SMTP username
    $mail->Password   = 'kouf rxzp oxxi rnte';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
    $mail->Timeout    = 20;

    //Recipients
    $mail->setFrom('tusharsharma6868@gmail.com', '');
    $mail->addAddress("$senderemail", '');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    if($filePath!= null && is_string($filePath) && is_file($filePath)){
    $mail->addAttachment($filePath);         //Add attachments
    }
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
    $mail->Body    = "$bodydata";
    $mail->AltBody = '';

    $mail->send();
    return true;
} catch (\Throwable $e) {
    return false;
}

}



// $senderemail = "promotionparadise42@gmail.com";
// $subject = "New Enquiry for Job";
// $bodydata = "Name : Testing";
// echo SendEmailer($senderemail,$subject,$bodydata, null);

// Check connection
if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

  // Actual Link 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$query_str = parse_url($actual_link, PHP_URL_QUERY);
parse_str($query_str, $query_params);
$getparam = $query_params;


// SEO FRIENDLY URL
function seo_friendly_url($string){
     $string = str_replace(array('[\', \']'), '', $string);
     $string = preg_replace('/\[.*\]/U', '', $string);
     $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string); 
     return strtolower(trim($string, '-'));
}

// FUNCTION FOR MOBILE 
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function createImgWebp($fileinputname, $imagepath){
    $filename = $_FILES[$fileinputname]['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $tmp = $_FILES[$fileinputname]['tmp_name'];
    $filepath = "";
    if(file_exists("../branch/assets/$imagepath")){
        $filepath = "../branch/assets/".$imagepath."/";
    }else{
        mkdir("../branch/assets/$imagepath", 0777);
        $filepath = "../branch/assets/".$imagepath."/";
    }
    $file1 = $fileinputname . time().'.'.$ext;
    if($ext=='webp' || $ext=='png' || $ext=='pdf'){
        $filenewname = $fileinputname . time().'.'.$ext;
        move_uploaded_file($tmp, $filepath.$file1);
    }else{
        $filenewname = $fileinputname . time().'.webp';
        move_uploaded_file($tmp, $filepath.$file1);
    
        $file = $filepath. time().'.'.$ext;
        $imgpath = $filepath.$filenewname;
        $img = imagecreatefromjpeg($filepath . $file1);
    
        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imagewebp($img, $filepath . $filenewname, 80);
        imagedestroy($img);
        unlink($filepath.$file1);
    }
    return "branch/assets/".$imagepath."/".$filenewname;
}

function isValidVideoUpload($file){
    if(empty($file['name']) || $file['error'] !== UPLOAD_ERR_OK){
        return false;
    }
    $allowed = ['mp4','webm','mov','avi','m4v','3gp','mkv','wmv'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if(!in_array($ext, $allowed)){
        return false;
    }
    if($file['size'] > 40 * 1024 * 1024){
        return false;
    }
    return true;
}

function createVideoUpload($fileinputname, $uploadpath){
    if(empty($_FILES[$fileinputname]['name'])){
        return '';
    }
    $ext = strtolower(pathinfo($_FILES[$fileinputname]['name'], PATHINFO_EXTENSION));
    $dir = "../branch/assets/".$uploadpath."/";
    if(!file_exists("../branch/assets/".$uploadpath)){
        mkdir("../branch/assets/".$uploadpath, 0777, true);
    }
    $filenewname = $fileinputname . time() . rand(100,999) . '.' . $ext;
    if(move_uploaded_file($_FILES[$fileinputname]['tmp_name'], $dir.$filenewname)){
        return "branch/assets/".$uploadpath."/".$filenewname;
    }
    return '';
}
// $file_type = exif_imagetype($file);
//exif_imagetype($file);
// 1    IMAGETYPE_GIF
// 2    IMAGETYPE_JPEG
// 3    IMAGETYPE_PNG
// 6    IMAGETYPE_BMP
// 15   IMAGETYPE_WBMP
// 16   IMAGETYPE_XBM

/*** DEFAULT DATA LOAD ***/
$sqlsetting = mysqli_query($con,"SELECT * FROM `settings`");
$rwlinks = mysqli_fetch_array($sqlsetting);
$websitename = $rwlinks['web_name'];
$headercenterline = $rwlinks['headercenterline'];
$emailid = $rwlinks['email_id'];
$alternateemailid = $rwlinks['alternate_email_id'];
$contactno = $rwlinks['contact_no'];
$alternateno = $rwlinks['alternate_no'];
$whatsapp = $rwlinks['whatsapp_no'];
$address = $rwlinks['address'];
$youtubeembedcode = $rwlinks['youtubelink'];
$facebook = $rwlinks['facebook'];
$instagram = $rwlinks['instagram'];
$youtube = $rwlinks['youtube'];
$linkedin = $rwlinks['linkedin'];
$twitter = $rwlinks['twitter'];
$mapiframe = $rwlinks['map_iframe'];
$googletag = $rwlinks['googletag'];
$footerdesc = $rwlinks['footerdesc'];
$metatitle = $rwlinks['meta_title'];
$metakeywords = $rwlinks['meta_keywords'];
$metadesc = $rwlinks['meta_desc'];
$logo = $rwlinks['logo'];



// ===== get state name ====== 
function __getStateName($con, $id){
    $sql = mysqli_query($con, "SELECT * FROM `state` WHERE `id` = $id");
    $rw = mysqli_fetch_array($sql);
    return $rw['state'];
}

// ===== get single row from query =====
function fetch_one_row($con, $sql){
    $rs = mysqli_query($con, $sql);
    return ($rs && mysqli_num_rows($rs)) ? mysqli_fetch_assoc($rs) : null;
}

// ===== encrypt data ========
function encryptIt($q) {
    $secret_key = 'kgimeerut@)*(@)Ena234!212IOU';
    $secret_iv = '8';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    $output = base64_encode( openssl_encrypt( $q, $encrypt_method, $key, 0, $iv ) );
    return $output;
}       


// ===== decrypt data ========
function decryptIt($q) {
    $secret_key = 'kgimeerut@)*(@)Ena234!212IOU';
    $secret_iv = '8';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    $output = openssl_decrypt( base64_decode( $q ), $encrypt_method, $key, 0, $iv );
    return $output;
}   


// ===== get indian currency ========
function getIndianCurrency(float $number){
$no = floor($number);
$decimal = round($number - $no, 2) * 100;
$decimal_part = $decimal;
$hundred = null;
$hundreds = null;
$digits_length = strlen($no);
$decimal_length = strlen($decimal);
$i = 0;
$str = array();
$str2 = array();
$words = array(0 => '', 1 => 'one', 2 => 'two',
    3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
    7 => 'seven', 8 => 'eight', 9 => 'nine',
    10 => 'ten', 11 => 'eleven', 12 => 'twelve',
    13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
    16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
    19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
    40 => 'forty', 50 => 'fifty', 60 => 'sixty',
    70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
$digits = array('', 'hundred','thousand','lakh', 'crore');

while( $i < $digits_length ) {
    $divider = ($i == 2) ? 10 : 100;
    $number = floor($no % $divider);
    $no = floor($no / $divider);
    $i += $divider == 10 ? 1 : 2;
    if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? '  ' : null;
        $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
    } else $str[] = null;
}

$d = 0;
while( $d < $decimal_length ) {
    $divider = ($d == 2) ? 10 : 100;
    $decimal_number = floor($decimal % $divider);
    $decimal = floor($decimal / $divider);
    $d += $divider == 10 ? 1 : 2;
    if ($decimal_number) {
        $plurals = (($counter = count($str2)) && $decimal_number > 9) ? 's' : null;
        $hundreds = ($counter == 1 && $str2[0]) ? ' and ' : null;
        @$str2 [] = ($decimal_number < 21) ? $words[$decimal_number].' '. $digits[$decimal_number]. $plural.' '.$hundred:$words[floor($decimal_number / 10) * 10].' '.$words[$decimal_number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
    } else $str2[] = null;
}

$Rupees = implode('', array_reverse($str));
$paise = implode('', array_reverse($str2));
$paise = ($decimal_part > 0) ? $paise . ' Paise' : '';

if($decimal_part > 0){
    $txt = 'and '.$paise;
}else{
    $txt = '';
    
}


return ($Rupees ? $Rupees . 'Rupees ' : '') . $txt;
}




// echo getIndianCurrency(25201);


function __getJobTitle($con, $id){
$sql = mysqli_query($con, "SELECT * FROM `jobs` WHERE `status`=1 AND `id`=$id");
$rw = mysqli_fetch_object($sql);
return $rw->title;
}

// Plain-text helpers (HTML not stored in DB)
if (!function_exists('pages_html_to_plain')) {
function pages_html_to_plain($html) {
	$html = (string)$html;
	if (trim($html) === '') {
		return '';
	}
	$html = preg_replace('/<br\s*\/?>/i', "\n", $html);
	$html = preg_replace('/<h2[^>]*>/i', "\n\n## ", $html);
	$html = preg_replace('/<h3[^>]*>/i', "\n\n### ", $html);
	$html = preg_replace('/<h[1456][^>]*>/i', "\n\n## ", $html);
	$html = preg_replace('/<li[^>]*>/i', "\n- ", $html);
	$html = preg_replace('/<\/(p|ul|ol|div|article|table|tr|blockquote)>/i', "\n\n", $html);
	$html = preg_replace('/<\/h[1-6]>/i', "\n\n", $html);
	$html = preg_replace('/<\/li>/i', "\n", $html);
	$text = strip_tags($html);
	$text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
	$text = str_replace("\xc2\xa0", ' ', $text);
	$text = preg_replace('/[ \t]+/', ' ', $text);
	$text = preg_replace('/ *\n */', "\n", $text);
	$text = preg_replace('/\n\n- /', "\n- ", $text);
	$text = preg_replace('/\n{3,}/', "\n\n", $text);
	return trim($text);
}
}

if (!function_exists('pages_plain_input')) {
function pages_plain_input($value) {
	$value = (string)$value;
	if (strpos($value, '<') !== false && strpos($value, '>') !== false) {
		return pages_html_to_plain($value);
	}
	$value = str_replace("\r\n", "\n", $value);
	return trim($value);
}
}

if (!function_exists('render_pages_description')) {
function render_pages_description($text, $opts = []) {
	$listClass = $opts['list_class'] ?? 'legal-arrow-list';
	$useIntro = array_key_exists('intro', $opts) ? (bool)$opts['intro'] : true;
	$useArticle = array_key_exists('article', $opts) ? (bool)$opts['article'] : true;

	$text = str_replace(["\r\n", "\r"], "\n", (string)$text);
	$text = trim($text);
	if ($text === '') {
		return '';
	}

	$lines = explode("\n", $text);
	$html = '';
	$articleOpen = false;
	$listOpen = false;
	$seenHeading = false;
	$paraBuf = [];

	$flushPara = function () use (&$paraBuf, &$html, &$articleOpen, &$seenHeading, $useIntro, $useArticle) {
		if (!$paraBuf) {
			return;
		}
		$para = trim(implode("\n", $paraBuf));
		$paraBuf = [];
		if ($para === '') {
			return;
		}
		$esc = nl2br(htmlspecialchars($para, ENT_QUOTES, 'UTF-8'));
		if ($useIntro && !$seenHeading && !$articleOpen) {
			$html .= '<p class="legal-page__intro">' . $esc . "</p>\n";
			return;
		}
		if ($useArticle && !$articleOpen) {
			$html .= '<article class="legal-page__section">' . "\n";
			$articleOpen = true;
		}
		$html .= '<p>' . $esc . "</p>\n";
	};

	$closeList = function () use (&$listOpen, &$html) {
		if ($listOpen) {
			$html .= "</ul>\n";
			$listOpen = false;
		}
	};

	$ensureArticle = function () use (&$articleOpen, &$html, $useArticle) {
		if ($useArticle && !$articleOpen) {
			$html .= '<article class="legal-page__section">' . "\n";
			$articleOpen = true;
		}
	};

	$listOpenTag = $listClass !== '' ? '<ul class="' . htmlspecialchars($listClass, ENT_QUOTES, 'UTF-8') . '">' : '<ul>';

	foreach ($lines as $line) {
		$t = trim($line);

		if ($t === '') {
			$flushPara();
			$closeList();
			continue;
		}

		if (preg_match('/^###\s+(.*)$/', $t, $m)) {
			$flushPara();
			$closeList();
			$ensureArticle();
			$seenHeading = true;
			$html .= '<h3>' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . "</h3>\n";
			continue;
		}

		if (preg_match('/^##\s+(.*)$/', $t, $m)) {
			$flushPara();
			$closeList();
			$ensureArticle();
			$seenHeading = true;
			$html .= '<h2>' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . "</h2>\n";
			continue;
		}

		if (preg_match('/^[-*]\s+(.*)$/', $t, $m)) {
			$flushPara();
			$ensureArticle();
			$seenHeading = true;
			if (!$listOpen) {
				$html .= $listOpenTag . "\n";
				$listOpen = true;
			}
			$html .= '<li>' . htmlspecialchars($m[1], ENT_QUOTES, 'UTF-8') . "</li>\n";
			continue;
		}

		if ($listOpen) {
			$closeList();
		}
		$paraBuf[] = rtrim($line);
	}

	$flushPara();
	$closeList();
	if ($articleOpen) {
		$html .= "</article>\n";
	}
	return $html;
}
}

?>
 
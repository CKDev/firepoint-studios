<?php
# -------------------------------------------------------------------------------------- #
# CONFIGURATION
# -------------------------------------------------------------------------------------- #

define('APP_SITE_NAME', "Firepoint.");
define('APP_META_COPYRIGHT', null);


$script_base = basename($_SERVER['PHP_SELF']);
$script_name = $_SERVER['PHP_SELF'];
define('APP_SELF', $script_base);

$DS = "/";
define('DS', $DS); // Directory Separator (not being used )

$ROOT = substr($script_name, 0, -strlen($script_base));
$ROOT = str_replace( array("/templates/", "/includes/modals/"), "/", $ROOT );
$ROOT = rtrim( $ROOT, "/" );
define('APP_ROOT', $ROOT); // This variable is used for HTML references to the "/webroot" and image directories (ie. echo APP_ROOT . "webroot/css/...")

$STEP = "";
foreach ( array("/templates/") as $dir) {
	if (strpos($script_name, $dir) !== FALSE) {
		$STEP = "../";
	}
}
define('APP_LEVEL', $STEP); // This variable is used for PHP references to includes  (ie. include_once( APP_LEVEL . "includes/layout/global-meta.php")

include_once(__DIR__ . '/vendor/autoload.php');

include_once(APP_LEVEL . 'includes/phpmailer/exception.php');
include_once(APP_LEVEL . 'includes/phpmailer/phpmailer.php');
include_once(APP_LEVEL . 'includes/phpmailer/smtp.php');

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::create(__DIR__ . '/..');
$dotenv->load();

// -----------------------------------------------------------------------
function debug( $vars, $exit = false ) {
	echo '<pre>';
	print_r( $vars );
	echo '</pre>';
	if( $exit ) {
		exit();
	}
}


// -----------------------------------------------------------------------
// -----------------------------------------------------------------------
class Configure {
	
	private static $SETTINGS = Array(
		'page' => null,
		'meta-title' => null,
		'meta-description' => null,
		'meta-keywords' => null,
		'meta-copyright' => null
	);

	// -----------------------------------------------
	public static function instance() {
		return self::$instance ? self::$instance : self::$instance = new self();
	}
	public function __construct() {
		$this->init();
	}
	function init() {
		return true;
	}

	
	// -----------------------------------------------
	public function load( $settings=Array() ) {
		if( isset($settings) && !empty($settings) ) {
			self::settings( $settings );
		}
		define('APP_PAGE', self::$SETTINGS['page']);
		define('APP_META_TITLE', self::$SETTINGS['meta-title']);
		define('APP_META_DESCRIPTION', self::$SETTINGS['meta-description']);
		define('APP_META_KEYWORDS', self::$SETTINGS['meta-keywords']);
		return true;
	}

	// -----------------------------------------------
	private static function settings( $settings=Array() ) {
		if( isset($settings) && !empty($settings) ) {
			self::$SETTINGS['page'] = (isset($settings['page']) && !empty($settings['page'])) ? $settings['page'] : self::$SETTINGS['page'];
			self::$SETTINGS['meta-title'] = (isset($settings['meta-title']) && !empty($settings['meta-title'])) ? $settings['meta-title'] : self::$SETTINGS['meta-title'];
			self::$SETTINGS['meta-description'] = (isset($settings['meta-description']) && !empty($settings['meta-description'])) ? $settings['meta-description'] : self::$SETTINGS['meta-description'];
			self::$SETTINGS['meta-keywords'] = (isset($settings['meta-keywords']) && !empty($settings['meta-keywords'])) ? $settings['meta-keywords'] : self::$SETTINGS['meta-keywords'];
		}
		return true;
	} 
	
}
$Config = new Configure;


// -----------------------------------------------------------------------
// -----------------------------------------------------------------------
class Contact {

	public $ERRORS  = false;

	private static $SETTINGS = Array(
		'email_to' => Array('leah@firepointstudios.com', 'mike@firepointstudios.com','tynan@firepointstudios.com'),
		'email_subject' => "Contact Request From The Firepoint Studios Website",
		'smtp_from' => 'stationbuilt@gmail.com',
		'smtp_server' => 'aspmx.l.google.com'
	);
	public $NOTICES = Array(
		'errors' => null
	);

	// -----------------------------------------------
	public static function instance() {
		return self::$instance ? self::$instance : self::$instance = new self();
	}
	public function __construct() {
		$this->init();
	}
	function init() {
		if( isset($_POST) && !empty($_POST) ) {
			if ((isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))) {
				if (strtolower(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST)) != strtolower($_SERVER['HTTP_HOST'])) {
					// referer not from the same domain

				} else {
					// Check the nonce before processing the form
					$nonce = self::nonce_check( $_ENV['NONCE_SECRET'], $_POST['data']['nonce'] );
					if( $nonce === 1 || $nonce === true) {
						$process = self::process_form( $_POST );

						if( isset($process) && $process['error'] == 1 ) {
							$this->ERRORS = $process['error_keys'];
						//	header('Location: contact?errors='.implode(",", $process['error_keys'])); exit();
						}
						elseif( isset($process) && $process['success'] == 1 ) {
							unset( $_POST );
							header('Location: contact?success='); exit();
						}
						else {
							debug('ERROR', true);
						}
					}
				}
			}
		}
		return true;
	}

	
	// -----------------------------------------------
	private function process_form( $post=null ) {

		$VALIDATE = Array('name_full', 'contact_from', 'contact_phone', 'contact_company');

		$SUCCESS = false;
		$ERROR = false;
		$ERROR_KEYS = Array();

		if( isset($post['data']) && !empty($post['data']) ) {
			for( $i=0; $i<=(count($VALIDATE)-1); $i++) {
				$key = $VALIDATE[$i];
				if( !isset($post['data'][$key]) || empty($post['data'][$key]) ) {
					$ERROR = true;
					array_push( $ERROR_KEYS, $key );
				}
			}
		}
		else {
			$ERROR = true;
			array_push( $ERROR_KEYS, 'data' );
		}

		// No errors, move forward
		if( empty($ERROR) && $ERROR === false) {

			$EXP_EMAIL = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
			$EXP_STRNG = "/^[A-Za-z .'-]+$/";

			if( !preg_match($EXP_EMAIL, $post['data']['contact_from']) ) {
				$ERROR = true;
				array_push( $ERROR_KEYS, 'contact_from' );
			}

			if( !filter_var($post['data']['contact_from'], FILTER_VALIDATE_EMAIL) ) {
				$ERROR = true;
				array_push( $ERROR_KEYS, 'contact_from' );
			}

			if( !preg_match($EXP_STRNG, $post['data']['name_full']) ) {
				$ERROR = true;
				array_push( $ERROR_KEYS, 'name_full' );
			}
			if( !preg_match($EXP_STRNG, $post['data']['contact_company']) ) {
				$ERROR = true;
				array_push( $ERROR_KEYS, 'contact_company' );
			}
			if(strlen($post['data']['message']) < 3) {
				$ERROR = true;
				array_push( $ERROR_KEYS, 'message' );
			}
			if( empty($ERROR) && $ERROR === false) {

// Settings
function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad,"",$string);
}
ini_set("SMTP", self::$SETTINGS['smtp_server']);
ini_set("sendmail_from", self::$SETTINGS['smtp_from']);

// Email To/From/Message + Formatting
				$email_to = self::$SETTINGS['email_to'];
				$email_subject = self::$SETTINGS['email_subject'];
				$email_from = $post['data']['contact_from'];
				
				$email_message = "Form details below.\n\n";
				
				$email_message .= "Full Name: ".clean_string($post['data']['name_full'])."\n";
				$email_message .= "Email: ".clean_string($post['data']['contact_from'])."\n";
				$email_message .= "Telephone: ".clean_string($post['data']['contact_phone'])."\n";
				$email_message .= "Message: ".clean_string($post['data']['message'])."\n";
				//$email_message .= "\r\n---------------\r\nThe mail message was sent with the following mail setting:\r\nSMTP = ".self::$SETTINGS['smtp_server']."\r\nPORT = 25\r\nFROM = ".self::$SETTINGS['smtp_from'];
				$email_message .= "\r\nSending IP Address: ".$_SERVER['REMOTE_ADDR'];

// Headers + Send
				$headers = 'From: '.$email_from."\r\n". 'Reply-To: '.$email_from;
				//if( is_array($email_to) ) {
				//	$email_to = implode(",", $email_to);
				//}

				// ---------------------------- NEW HOTNESS -------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				$mail = new PHPMailer(true);
				try {
					$mail->SMTPDebug = 2;
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = 'tls';
					$mail->Username = $_ENV['SMTP_USERNAME'];
					$mail->Password = $_ENV['SMTP_PASSWORD'];
					$mail->SMTPSecure = 'tls';
					$mail->Port = 587;

					$mail->setFrom($email_from, clean_string($post['data']['name_full']));
					$mail->addReplyTo($email_from, clean_string($post['data']['name_full']));

					foreach ($email_to as $email) {
						$mail->addAddress($email);
					}

					$mail->isHTML(false);
					$mail->Subject = $email_subject;
					$mail->Body    = $email_message;

					$mail->send();

					$SUCCESS = true;
				} catch (Exception $e) {
					debug($mail->ErrorInfo, true);
					$ERROR = true;
				}
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------
				// ------------------------------------------------------------------------

				//mail($email_to, $email_subject, $email_message, $headers);


				// Return a Success
				// $SUCCESS = true;

			}
		}

		return Array('error'=>$ERROR, 'error_keys'=>$ERROR_KEYS, 'success'=>$SUCCESS);
	}
 	

	// -----------------------------------------------
	// https://github.com/timostamm/NonceUtil-PHP
	public static function nonce_generate($secret, $timeoutSeconds=180) {
		if (is_string($secret) == false || strlen($secret) < 10) {
			throw new InvalidArgumentException("Missing valid secret");
		}
		$salt = self::nonce_salt();
		$time = time();
		$maxTime = $time + $timeoutSeconds;
		$nonce = $salt . "," . $maxTime . "," . sha1( $salt . $secret . $maxTime );
		return $nonce;
	}

	public static function nonce_check($secret, $nonce) {
		if (is_string($nonce) == false) {
			return false;
		}
		$a = explode(',', $nonce);
		if (count($a) != 3) {
			return false;
		}
		$salt = $a[0];
		$maxTime = intval($a[1]);
		$hash = $a[2];
		$back = sha1( $salt . $secret . $maxTime );
		if ($back != $hash) {
			return false;
		}
		if (time() > $maxTime) {
			return false;
		}
		return true;
	}

	private static function nonce_salt() {
		$length = 10;
		$chars  ='1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
		str_shuffle($chars);
		$rand  = strlen($chars)-1;
		$strng = '';
		while (strlen($strng) < $length) {
			$strng .= $chars[ rand(0, $rand) ];
		}
		return $strng;
	}

}

?>
<?php 
	if(!isset($_SESSION["user_id"])) {

		header("Location: /login/");
		exit;

	}

    require("models/users.php");

    $model = new Users();

    $user = $model->getUserCheckout($_SESSION["user_id"]);

	if(empty($_SESSION["cart"])){
		header("Location: /cart/");
		exit;
	}

    require("views/checkout.php"); 
?>

<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = ''.ENV["MAIL_HOST"].'';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = ''.ENV["MAIL_SEND"].'';                     //SMTP username
    $mail->Password   = ''.ENV["MAIL_PASSWORD"].'';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = ''.ENV["MAIL_PORT"].'';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('marcomaluco7@gmail.com', 'Mailer');
    $mail->addAddress(''.$user["email"].'', ''.$user["username"].'');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'STONES THROW - #'.order_id.'';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
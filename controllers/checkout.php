 <?php 
    if(!isset($_SESSION["user_id"])) {

        header("Location: /login/");
        exit;

    }

    require("models/orders.php");

    $modelOrders = new Orders;

    $order_id = $modelOrders->insertOrder($_SESSION["user_id"]);

    foreach($_SESSION["cart"] as $product){
        $modelOrders->createOrderDetail($order_id, $product);

        require_once("models/products.php");

        $modelProducts = new Products;

        $modelProducts->updateStock($product);
    }


    require("models/users.php");

    $modelUsers = new Users();

    $user = $modelUsers->getUserCheckout($_SESSION["user_id"]);

    if(empty($_SESSION["cart"])){
        header("Location: /cart/");
        exit;
    }

    unset($_SESSION["cart"]);

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
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = ''.ENV["MAIL_HOST"].'';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = ''.ENV["MAIL_SEND"].'';                     //SMTP username
    $mail->Password   = ''.ENV["MAIL_PASSWORD"].'';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = ''.ENV["MAIL_PORT"].'';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('marcomaluco7@gmail.com', 'StonesThrow');
    $mail->addAddress(''.$user["email"].'', ''.$user["username"].'');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'STONES THROW - #'.$order_id.'';
    $mail->Body    = 'Hello <b>'.$user["username"].'</b>! <br> Thanks for your order. Here are the information to the payment:<br>
    Please check too if your information is correct.<br>
    Name: <b>'.$user["name"].'</b><br>
    Country: <b>'.$user["countryname"].'</b><br>
    Address: <b>'.$user["address"].'</b><br>
    Postal-Code: <b>'.$user["postal_code"].'</b><br>
    City: <b>'.$user["city"].'</b>
      ';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
unset($_SESSION["cart"]);
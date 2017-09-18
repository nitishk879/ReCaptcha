<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/17
 * Time: 9:53 PM
 */
$captcha = $_POST['g-recaptcha-response'];
$name = $_POST['name'];
$from = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$url = "https://www.google.com/recaptcha/api/siteverify";
$privateKey= "YOur-secret-Key";
$response= file_get_contents($url."?secret=".$privateKey."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
$data = json_decode($response);

$to = "nitishk879@gmail.com";
$ip = $_SERVER['REMOTE_ADDR'];
$subject = "New Email received: ";


if (isset($_POST['contact-form'])){
    if (empty($captcha)){
        echo "Please enter a valid Captcha";
    }
}
if (isset($data->success) && $data->success==true){
    // BOOLEAN STATEMENT FOR SENDING FORM VALUES
    // Construct email body
    $body_message .= 'Name: ' . $name . "\r\n";
    $body_message .= 'Email: ' . $from . "\r\n";
    $body_message .= 'Phone ' . $phone . "\r\n";
    $body_message .= 'User IP: ' . $ip . "\r\n";
    $body_message .= 'Message: ' . $msg . "\r\n";

    // Construct headers of the message
    $headers = 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' . $from . "\r\n";

    mail($to, $subject, $body_message, $headers);
    header("Location: index.php?CaptchaPass=True");
}else{
    header("Location: index.php?CaptchaFail=True");
}

<?php

require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMAILER\PHPMailer\Exception;

function send_confirmation_email($to_email, $to_name, $token) {
    $mail = new PHPMailer(true);

    // Change SMTP configuratio
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "your_email_here";
    $mail->Password = "your_password_here(app_password_for_gmail)";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("NO-REPLY@company.com", "Registration Confirmation");
    $mail->addAddress($to_email, $to_name);

    $confirm_link = "http://localhost/3t2526/tw22/module7/confirm.php?token=" . $token;

    $mail->isHTML(true); // Set message type as HTML
    $mail->Subject = "Confirm your registration";
    $mail->Body = "
        <p>Dear <strong>$to_name</strong>,</p>
        <p>Thank you for registering. Click the link to confirm you registration:</p>
        <p>
            <a href='$confirm_link' style='padding: 10px 20px; background: #198754; color: white; text-decoration: none; border-radius: 4px;'>Confirm Account</a>
        </p>
        <p>If the link does not work, click copy-paste this link to your web browser:</p>
        <p><a href='$confirm_link'>$confirm_link</a></p>
        <p>Joseph Q. Calleja</p>
    ";

    $mail->send();
}

?>
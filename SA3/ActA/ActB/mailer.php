<?php
require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");
require("phpmailer/src/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_confirmation_email($to_email, $to_name, $subject, $body) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rycadump@gmail.com'; 
        $mail->Password   = 'exix ubft cnzd wosj';  
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('rycadump@gmail.com', 'ActivityB Test');
        $mail->addAddress($to_email, $to_name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
// Email
function get_password_reset_template($name, $link) {
    return "
    <div style='font-family: Arial, sans-serif; max-width: 600px; margin: auto; border: 1px solid #e0e0e0; padding: 30px; border-radius: 8px; background-color: #ffffff;'>
        <h2 style='color: #333; margin-top: 0;'>Password Reset Successful</h2>
        <p style='color: #555; line-height: 1.6;'>Hello <strong>" . htmlspecialchars($name) . "</strong>,</p>
        
        <p style='color: #555; line-height: 1.6;'>
            This is an automated notification to confirm that your password for your account has been successfully updated.
        </p>

        <div style='background-color: #f9f9f9; padding: 15px; border-left: 4px solid #d32f2f; margin: 20px 0;'>
            <p style='margin: 0; color: #d32f2f; font-weight: bold;'>If you did not initiate this change:</p>
            <p style='margin: 5px 0 0 0; color: #555;'>Please contact our support team immediately or click the link below to secure your account:</p>
            <a href='$link' style='color: #d32f2f; text-decoration: underline; font-weight: bold;'>Secure my account now</a>
        </div>

        <p style='color: #888; font-size: 0.85em; margin-top: 30px;'>
            Thank you,<br>
            The Support Team
        </p>
    </div>";
}
?>
<?php
function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';                    
    $mail->Host = "mail.vgsbo.com";               
    $mail->Port = 465;                             
    $mail->Username = "support@vgsbo.com";      
    $mail->Password = "support@vgsbo.com";        

    $mail->IsHTML(true);
    $mail->From = $from;                           
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);

    if(!$mail->Send()) {
        // Return detailed error message
        return 'Mailer Error: ' . $mail->ErrorInfo;
    }

    return true;  // Sending successful
}
?>


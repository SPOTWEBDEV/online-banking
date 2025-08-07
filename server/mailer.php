<?php
function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';                    
    $mail->Host = "mail.greenshieldfine.com";               
    $mail->Port = 465;                             
    $mail->Username = "contact@greenshieldfine.com";      
    $mail->Password = "DV&hPd!gkEX#w8=y";        

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


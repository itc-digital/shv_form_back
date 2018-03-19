<?php
namespace models;
class Mail {
    public static function mailTo($email, $subject, $message)
    {
        $subject = "$subject - Школа Выживания";
        $message = "<html><body>$message</body></html>"; 	
        
        $header = "From: Школа Выживания 2018 :: ITC <no-reply@the-center.it>\r\n"; 
		$header .= "Reply-To: no-reply@the-center.it\r\n"; 
        $header .= "Content-Type: text/html; charset=utf-8\r\n";
        
        return mail($email,$subject,$message,$header);
    }
}
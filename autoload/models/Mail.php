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

    public static function createMessage($data)
    {
        $message = "<p>ФИО: $data[fio]</p>";
        $message .= "<p>Факультет: $data[fakultet]</p>";
        $message .= "<p>Курс: $data[kurs]</p>";
        $message .= "<p>Группа: $data[group]</p>";
        $message .= "<p>Телефон: $data[phone]</p>";
        $message .= "<p>Ссылка VK: $data[vkLink]</p>";
        $message .= "<p>Опыт походов: $data[experience]</p>";
        $message .= "<p>Другой полезный опыт: $data[otherExperience]</p>";
        $message .= "<p>Имеющийся инвентарь: $data[inventoryAvailiable]</p>";
        $message .= "<p>Уровень физической подготовки (1-10): $data[fitnessLevel]</p>";
        $message .= "<p>Болезни и травмы: $data[diseases]</p>";
        $message .= "<p>Аллергии: $data[allergies]</p>";
        $message .= "<p>Самое дальнее путешествие: $data[yourTrip]</p>";
        return $message;
    }
}
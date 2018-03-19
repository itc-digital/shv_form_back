<?php
namespace controllers;

class Form {
    public function sendData($f3)
    {
        $data = $f3->get('POST');
        $validate = \models\FormAction::validate($f3, $data);
        if($validate[status]) {
            $email = "shkolavizhivaniya2018@gmail.com";
            $subject = "$data[fio] - Школа Выживания";
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
            \models\FormAction::record($f3, $data);
            \models\Mail::mailTo($email, $subject, $message);
            $f3->status(200);
        } else {
            echo $validate[textError];
            $f3->status(418);
        }
    }
}

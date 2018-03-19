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
            $message = \models\Mail::createMessage($data);
            \models\FormAction::record($f3, $data);
            \models\Mail::mailTo($email, $subject, $message);
            $f3->status(200);
        } else {
            echo $validate[textError];
            $f3->status(400);
        }
    }
}

<?php
namespace controllers;

class shvForm {
    public function sendData($f3)
    {
        $data = $f3->get('POST');
        $validate = \models\shvFormAction::validate($f3, $data);
        if($validate[status]) {
            $email = $f3->get('email');
            $subject = "$data[fio] - Школа Выживания";
            $message = \models\shvMail::createMessage($data);
            \models\shvFormAction::record($f3, $data);
            \models\shvMail::mailTo($email, $subject, $message);
            $f3->status(200);
        } else {
            echo $validate[textError];
            $f3->status(400);
        }
    }
}

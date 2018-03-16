<?php
namespace controllers;

class Form {
    public function sendData($f3)
    {
        $data = $f3->get('POST');
        $validate = \models\FormAction::validate($f3, $data);
        if($validate[status]) {
            \Models\FormAction::record($f3, $data);
            \Views\Render::formDoneRender($f3);
        } else {
            $f3->set('textError', $validate[textError]);
            \Views\Render::formRender($f3);
        }
    }
}

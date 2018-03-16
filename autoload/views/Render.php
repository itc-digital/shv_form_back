<?php
namespace Views;

class Render {
    public static function main($f3)
    {
        $template = \Template::instance();
		echo $template->render("index.html");
    }
    public static function formDoneRender($f3) {
        $template = \Template::instance();
        echo $template->render("formDone.html");
    }
    public static function formRender($f3) {
        $template = \Template::instance();
        echo $template->render("index.html");
    }
}

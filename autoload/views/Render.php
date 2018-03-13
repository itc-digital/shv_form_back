<?php
namespace views;

class Render {
    public static function main($f3)
    {
        $template = \Template::instance();
		echo $template->render("main.html");
    }
}

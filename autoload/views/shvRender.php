<?php
namespace views;

class shvRender {
    public static function main($f3)
    {
        $template = \Template::instance();
		echo $template->render("shv/index.html");
    }
}

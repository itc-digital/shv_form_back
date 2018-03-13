<?php
namespace controllers;

class Page {
    public function mainPage($f3)
    {
        \views\Render::main($f3);
    }
  }

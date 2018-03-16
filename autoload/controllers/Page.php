<?php
namespace controllers;

class Page {
    public function mainPage($f3)
    {
        \Views\Render::main($f3);
    }
  }
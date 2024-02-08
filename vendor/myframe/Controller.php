<?php

namespace vendor\myframe;

class Controller
{
    public Views $view;
    public function __construct()
    {
        $this->view = new Views();
    }

    public function render($viewFile, $data = null)
    {
        $this->view->render($viewFile, $data);
    }
}

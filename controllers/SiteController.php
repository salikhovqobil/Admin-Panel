<?php

namespace controllers;
use vendor\myframe\Controller;
class SiteController extends Controller
{
    public function index()
    {
        $this->view->render('site/index');
    }
}
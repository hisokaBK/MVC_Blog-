<?php 

namespace app\controllers;
use app\core\controller;

class HomeController extends controller{
    public function index(){
        $this->view('home', [
            'title' => 'Welcome to blog home'
        ]);
    }
}
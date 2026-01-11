<?php 
namespace app\controllers;
use app\core\controller;


class ProfilController extends controller{

    public function profilView(){
           $this->view('profil', [
            'title' => 'Profil _ page ' 
        ]);
    }


}
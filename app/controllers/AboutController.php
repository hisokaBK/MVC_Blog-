<?php  

namespace app\controllers;
use app\core\controller;
class AboutController extends controller{
      public function aboutView(){
          $this->view('about', [
            'title' => 'About _ page '
        ]);
      }
   }
   

?>
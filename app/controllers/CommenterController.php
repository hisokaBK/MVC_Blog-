<?php 
  
  namespace app\controllers;
  use app\core\Controller;

  
  use app\core\Database;
//   3,6,"dahaba faratisa alman andam halelooo
  
  class CommenterController extends Controller {
       public function commenter(){
              $connex = Database::getConnection();
              if($_POST['commenter']=='' || (!isset($_SESSION['user']))){

                    if(!(isset($_SESSION['user'])) ){
                          header('Location: /login');
                          exit();
                    }

                   header('Location: /one_blog?id='.$_POST['id']);
                  exit();
                     
              }else{
                   $prepare = $connex->prepare('INSERT INTO commentaires (user_id,article_id,content) 
                       VALUES (?,?,?)');
                   $prepare->execute([$_POST['user_id'],$_POST['id'],$_POST['commenter']]);

                  header('Location: /one_blog?id='.$_POST['id']);
                  exit();

              }
              


       }

}
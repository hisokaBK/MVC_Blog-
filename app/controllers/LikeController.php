<?php 

namespace app\controllers;
use app\models\Like;

use app\core\Database;

class LikeController {
     public function like(){
        if(isset($_SESSION['user'])){
            $connx = Database::getConnection();
            $prepareChekLike = $connx->prepare("SELECT * FROM likes WHERE user_id = ? and article_id = ? ");
            $prepareChekLike->execute([$_SESSION['user']->id,$_GET['id']]);
            $prepareChekLike= $prepareChekLike->fetch();
            if($prepareChekLike){
                 $prepare = $connx->prepare("DELETE FROM likes WHERE user_id = ?  and article_id = ?");
                 $prepare->execute([$_SESSION['user']->id,$_GET['id']]);
            }else{
                 $prepare = $connx->prepare("INSERT INTO likes (user_id,article_id)
                 VALUES (?,?)");
                 $prepare->execute([$_SESSION['user']->id,$_GET['id']]);
            }


            if (isset($_GET['place'])) {
               header('Location: /blogs');
               exit();
            }else{
                header('Location: /one_blog?id='.$_GET['id']);
                exit();
            }
            
           
        }else{
              header('Location: /login');
              exit();
        }


     } 
}
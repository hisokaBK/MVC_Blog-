<?php 
namespace app\controllers;

use app\core\controller;
use app\models\Article ;
use app\models\Category;
use app\models\Author;
use app\models\Reader;
use app\models\Admin;
use app\models\Like;
use app\core\Database;
use app\models\Comment;


class OneArticlController extends controller{
    public function one_articl(){
           $connx = Database::getConnection();

           $user_prepare =$connx-> prepare("SELECT s.* FROM users s  JOIN articles a 
           ON s.id = a.user_id WHERE a.id = ? ;");
           $user_prepare->execute([$_GET['id']]);
           $user= $user_prepare->fetch();

          $userx= new Author($user['id'],$user['name'],$user['email'],$user['photo'],$user['password'],$user['role'],$user['is_active'],$user['created_at']);
          

           $artical_prepare =$connx-> prepare("SELECT * FROM articles WHERE id = ?");
           $artical_prepare->execute([$_GET['id']]);
           $articl = $artical_prepare->fetch();
           $articl= new Article($articl['id'],$articl['user_id'],$articl['categorie_id'],$articl['title'], $articl['photo'],$articl['content'],$articl['created_at'],$articl['updated_at']);

            $userlike ;
            if(isset($_SESSION['user'])){
                $prepareChekLike = $connx->prepare("SELECT * FROM likes 
                WHERE user_id = ? and article_id = ? ");
                $prepareChekLike->execute([$_SESSION['user']->id ,$_GET['id']]);
                $prepareChekLike->fetch();
                if($prepareChekLike){
                    $userlike=true ;
                    }else{$userlike=false ;}
            }else{
                   $userlike=false ;
            }

            
           $categories_prepare =$connx-> prepare("SELECT c.* FROM categories c 
            JOIN articles a on c.id = a.categorie_id 
            WHERE a.id = ?
         ");
          $categories_prepare->execute([$_GET['id']]);
          $categorie=$categories_prepare->fetch();
          $categorie = new Category($categorie['id'],$categorie['name'],$categorie['created_at'],$categorie['updated_at']);


          //hna kan7sab number dyal like o comment lhad lblog

        $numberLiks_prepare =$connx-> prepare("SELECT a.id,COUNT(l.user_id) AS numLike
               FROM articles a  
               LEFT JOIN likes l 
               ON l.article_id = a.id 
               WHERE a.id = ? 
               GROUP BY a.id ;");
          $numberLiks_prepare->execute([$_GET['id']]);
          $likes=$numberLiks_prepare->fetch();

        $numberComments_prepare = $connx->prepare("SELECT a.id AS article_id,
                 COUNT(c.id) AS numComment
             FROM articles a
             LEFT JOIN commentaires c ON c.article_id = a.id
             WHERE a.id = ? 
             GROUP BY a.id
         ");
         
        $numberComments_prepare->execute([$_GET['id']]);
        $commentsCount=$numberComments_prepare->fetch();

        //   select * from  where article_id = 6
        //   select u.* from commentaires c join users u 
        //     on u.id = c.user_id join articles a 
        //   on a.id=c.article_id where a.id = 6;
        
        $prepareComments =$connx->prepare(
            "SELECT * FROM commentaires WHERE article_id = ? ORDER BY created_at DESC"
        );
        $prepareComments->execute([$_GET['id']]);
        $comments =[];
        foreach($prepareComments->fetchAll() as $comment){
               $id =$comment['id'];
               $user_id  = $comment['user_id'];
               $article_id  = $comment['article_id'];
               $content  = $comment['content'];
               $created_at  = $comment['created_at'];
               $updated_at  = $comment['updated_at'];
               $comments =[...$comments , new Comment($id, $user_id,$article_id ,$content,$created_at,$updated_at)];
        }
        
        $prepareUserComments =$connx->prepare(
            "SELECT u.* FROM commentaires c 
            JOIN  users u 
            ON u.id = c.user_id JOIN articles a 
          ON a.id=c.article_id WHERE a.id = ? 
          ORDER BY c.created_at DESC;"
        );
        $prepareUserComments->execute([$_GET['id']]);
        $UserComments =[];
        foreach($prepareUserComments->fetchAll() as $user){
                  $id=$user['id'];
                  $name=$user['name'];
                  $email=$user['email'];
                  $photo=$user['photo'];
                  $password=$user['password'];
                  $role=$user['role'];
                  $is_active=$user['is_active'];
                  $created_at=$user['created_at'];
                  
                  
                  if($role=="AUTHOR"){
                    $UserComments =[...$UserComments , new Author($id,$name,$email,$photo,$password,$role,$is_active,$created_at)];
                    }elseif($role=="ADMIN"){
                        $UserComments =[...$UserComments , new Admin($id,$name,$email,$photo,$password,$role,$is_active,$created_at)];
                    }
                    else{
                    $UserComments =[...$UserComments , new Reader($id,$name,$email,$photo,$password,$role,$is_active,$created_at)];
                }

        }


        $blogs=[ 
              'user'=>$userx,
             "articl"=>$articl,
             "categorie"=>$categorie,
             "likes"=>$likes,
             'comments'=>[$UserComments,$comments],
             "commentsCount"=>$commentsCount,
             'userlike'=>$userlike
        ];


        $this->view('one_articl', [
            'title' => 'one Blog page ' ,
            'elementBlog'=>$blogs
            ]);
    } 

    // public function one_articl2(){
    //     $this->view('one_articl', [
    //         'title' => 'one Blog page ' ,
    //         'elementsBlog'=>[
    //             'id'=>$_GET['id'],
    //             'name'=>$_GET['name'],
    //             'creacte_at'=>$_GET['creacte_at'],
    //             'photoUser'=>$_GET['photoUser'],
    //             'category'=>$_GET['category'],
    //             'title'=>$_GET['title'],
    //             "photoArticl"=>$_GET['photoArticl']
    //             ,'description'=>$_GET['description']
    //             ,'numberLike'=>$_GET['numberLike']
    //             ,'numberComments'=>$_GET['numberComments']
    //             ,'liked'=>$_GET['liked']
    //             ]
    //         ]);
    // } 
}

?>
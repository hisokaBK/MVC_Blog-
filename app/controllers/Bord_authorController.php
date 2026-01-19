<?php 

namespace app\controllers;
use app\core\controller;
use app\models\Article ;
use app\models\Category;
use app\models\Author;

use app\core\Database;

class Bord_authorController extends controller{

    public function authorView(){

        if((!isset($_SESSION['user']) || ($_SESSION['user']->role != 'AUTHOR' ))){
               if(!isset($_SESSION['user'])){
                     header('Location: /login');
                     exit();
               }

                header('Location: /');
                exit();
         }

         $connx = Database::getConnection();
          $articals_prepare =$connx-> prepare("SELECT * FROM articles where user_id = ?");
          $articals_prepare->execute([$_SESSION['user']->id]);
          $articls =[];

          foreach($articals_prepare->fetchAll() as $articl){
                   $id =$articl['id'];
                   $user_id  = $articl['user_id'];
                   $categorie_id  = $articl['categorie_id'];
                   $title  = $articl['title'];
                   $photo  = $articl['photo'];
                   $content  = $articl['content'];
                   $authorId  = $articl['created_at'];
                   $createdAt  = $articl['updated_at'];
                   $articls = [...$articls ,new Article($id,$user_id,$categorie_id,$title, $photo,$content,$authorId,$createdAt)];
          }

          $categories_prepare =$connx-> prepare("SELECT c.* FROM categories c
            JOIN articles a on c.id = a.categorie_id where user_id = ?");
          $categories_prepare->execute([$_SESSION['user']->id]);
          $categories =[];
          foreach($categories_prepare->fetchAll() as $categorie){
                  $id_cat=$categorie['id'];
                  $name=$categorie['name'];
                  $created_at = $categorie['created_at'];
                  $update_at = $categorie['updated_at'];
                  $categories =[...$categories , new Category($id_cat,$name, $created_at,$update_at)];
          }

        $user_prepare =$connx-> prepare("SELECT s.* FROM users s  JOIN articles a 
   ON s.id = a.user_id where a.user_id =?;");
          $user_prepare->execute([$_SESSION['user']->id]);
          $users=[];
          foreach($user_prepare->fetchAll() as $user){
                  $id=$user['id'];
                  $name=$user['name'];
                  $email=$user['email'];
                  $photo=$user['photo'];
                  $password=$user['password'];
                  $role=$user['role'];
                  $created_at=$user['created_at'];
                  $updated_at=$user['updated_at'];
                  $users =[...$users , new Author($id,$name,$email,$photo,$password,$role,$createdAt,$updated_at)];
          }

          $blogs=[];

          for($i=0;$i<count($users) ;$i++){
               $blogs=[...$blogs,"users"=>$users,"articls"=>$articls,"categories"=>$categories] ;
          }

//n7sam 3adad likes coments blogs lkol author

        $prepareNumLikes = $connx->prepare("SELECT COUNT(*) as numberLikes FROM likes WHERE user_id = ?");
        $prepareNumLikes->execute([$_SESSION['user']->id]);
        $numeLikes=$prepareNumLikes->fetch();

         $prepareNumBlogs= $connx->prepare("SELECT COUNT(*) as numberBlogs FROM articles WHERE user_id = ?");
        $prepareNumBlogs->execute([$_SESSION['user']->id]);
        $numberBlogs=$prepareNumBlogs->fetch();

         $prepareNumComents= $connx->prepare("SELECT COUNT(*) as numberComents FROM commentaires WHERE user_id = ?");
        $prepareNumComents->execute([$_SESSION['user']->id]);
        $numberComents=$prepareNumComents->fetch();


        $this->view('bord_author', [
            'title' => 'bord _ author ' ,
            'author_blogs' =>$blogs,
            'numeLikes'=>$numeLikes,
            'numberBlogs'=>$numberBlogs,
            'numberComents'=>$numberComents
            

        ]);
    }
}

?>
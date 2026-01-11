<?php 

namespace app\controllers;
use app\core\controller;
use app\models\Article ;
use app\models\Category;
use app\models\Author;
use app\models\Ban;

use app\core\Database;


class Bord_adminController extends controller{

    public function adminView(){
         if((!isset($_SESSION['user']) || ($_SESSION['user']->role != 'ADMIN' ))){
               if(!isset($_SESSION['user'])){
                     header('Location: /login');
                     exit();
               }

                header('Location: /');
                exit();
         }
         
         $connx = Database::getConnection();
         $user_prepare =$connx-> prepare("SELECT * FROM users");
          $user_prepare->execute();
          $users=[];
          foreach($user_prepare->fetchAll() as $user){
                  $id=$user['id'];
                  $name=$user['name'];
                  $email=$user['email'];
                  $photo=$user['photo'];
                  $password=$user['password'];
                  $role=$user['role'];
                  $is_active=$user['is_active'];
                  $created_at=$user['created_at'];
                  $users =[...$users , new Author($id,$name,$email,$photo,$password,$role,$is_active,$created_at)];
          }

          $user_prepare =$connx-> prepare("SELECT * FROM bans");
          $user_prepare->execute();
          $bans=[];
          foreach($user_prepare->fetchAll() as $ban){
                  $id=$ban['user_id'];
                  $reason=$ban['reason'];
                  $bannedAt=$ban['banned_at'];
                  $bans =[...$bans , new Ban($id,$reason,$bannedAt)];
          }       

           $this->view('bord_admin', [
            'title' => 'Bord _ admin ' ,
            'users' =>$users,
            'bans' =>$bans
        ]);
        
    }
    public function Categorys_View(){
          $connx = Database::getConnection();
          $categorys_prepare =$connx-> prepare("SELECT * FROM categories");
          $categorys_prepare->execute();
          $categories =[]; 
          foreach($categorys_prepare->fetchAll() as $category){
                  $id = $category['id'];
                  $name = $category['name'];
                  $created_at = $category['created_at'];
                  $update_at = $category['updated_at'];

                  $categories =[...$categories , new Category($id,$name,$created_at,$update_at)];
          }  

           $this->view('categorys', [
            'title' => 'categorys _ admin ' ,
            'Categorys' => $categories 
        ]);
        
    }

}

?>
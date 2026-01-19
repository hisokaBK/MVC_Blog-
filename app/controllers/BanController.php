<?php 

namespace app\controllers;

use app\core\Controller;
use app\core\Database;


class BanController extends Controller{
          public function ban(){
                $id = $_GET['id'];
                $conn = Database::getConnection();
                $prepare_ban=$conn->prepare('INSERT INTO bans(user_id , reason) VALUES (?,?)');
                $prepare_ban->execute([$id,'admin ban user']);

                $prepare_inActiv=$conn->prepare('UPDATE users SET is_active = ? WHERE id = ?');
                $prepare_inActiv->execute([0,$id]);

                header("Location: /bord_admin");
                exit();
          }
          public function unban(){
                $id = $_GET['id'];
                $conn = Database::getConnection();
                $prepare_ban=$conn->prepare('DELETE FROM bans WHERE user_id=? ');
                $prepare_ban->execute([$id]);

                $prepare_inActiv=$conn->prepare('UPDATE users SET is_active = ? WHERE id = ?');
                $prepare_inActiv->execute([1,$id]);

                header("Location: /bord_admin");
                exit();
          }

           public function CommentBan(){
                            if (!isset($_SESSION['user']) ) {
                                header('Location: /login');
                                exit();
                            }
                    
                            $connx = Database::getConnection();
                  
                        $insert = $connx->prepare(
                                    "INSERT INTO bans (user_id, reason) VALUES (?, ?)"
                                );
                         $insert->execute([ $_GET['user_id'],'Banned from comments']);
                            
                            header('Location: ' . $_SERVER['HTTP_REFERER']);
                            exit();
             }
                    
                    
}

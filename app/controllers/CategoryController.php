<?php 

  namespace app\controllers;
  use app\models\Category;
  use app\core\Database;


  class CategoryController {
          public function createCategory(){
              $connx = Database::getConnection();
              $prepare=$connx -> prepare("INSERT INTO categories (name) values (?)");
              $prepare->execute([$_POST['nameCTG']]);

              header('Location: /Categorys');
              exit();
          }

          public function editCategory(){
              $connx = Database::getConnection();
              $prepare=$connx -> prepare("UPDATE categories SET name = ? WHERE id = ? ");
              $prepare->execute([$_POST['nameCTG'],$_POST['id']]);

              header('Location: /Categorys');
              exit();
          }

          public function deleteCategory(){
              $connx = Database::getConnection();
              $prepare=$connx -> prepare("DELETE FROM categories WHERE id = ? ");
              $prepare->execute([$_GET['id']]);

              header('Location: /Categorys');
              exit();
          }


  }


?>
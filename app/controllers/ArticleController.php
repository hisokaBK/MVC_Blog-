<?php 
namespace app\controllers;
use app\core\controller;
use app\models\Article ;
use app\models\Category;
use app\models\Author;
use app\models\Like;

use app\core\Database;


class ArticleController extends controller{

    public function articlesView(){
          $connx = Database::getConnection();
          $articals_prepare =$connx-> prepare("SELECT * FROM articles");
          $articals_prepare->execute();
          $articls =[];
          $userlike=[];
          foreach($articals_prepare->fetchAll() as $articl){
                   $id =$articl['id'];
                   $user_id  = $articl['user_id'];
                   $categorie_id  = $articl['categorie_id'];
                   $title  = $articl['title'];
                   $photo  = $articl['photo'];
                   $content  = $articl['content'];
                   $authorId  = $articl['created_at'];
                   $createdAt  = $articl['updated_at'];

                    //hadi dartha bach nchof wach user dayar like lchi post ------hisoka sama--------
                   if(isset($_SESSION['user'])){
                        $prepareChekLike = $connx->prepare("SELECT * FROM likes WHERE user_id = ? and article_id = ? ");
                     $prepareChekLike->execute([$_SESSION['user']->id ,$id]);
                     $prepareChekLike= $prepareChekLike->fetch();

                     if($prepareChekLike){
                          $userlike=[...$userlike,true];
                     }else{
                          $userlike=[...$userlike,false];
                     }
                    }else{
                        $userlike=[...$userlike,false];
                    }

                     //--------------------------------

                   $articls = [...$articls ,new Article($id,$user_id,$categorie_id,$title, $photo,$content,$authorId,$createdAt)];
          }

          $categories_prepare =$connx-> prepare("SELECT c.* FROM categories c
            JOIN articles a on c.id = a.categorie_id");
          $categories_prepare->execute();
          $categories =[];
          foreach($categories_prepare->fetchAll() as $categorie){
                  $id_cat=$categorie['id'];
                  $name=$categorie['name'];
                  $created_at = $categorie['created_at'];
                  $update_at = $categorie['updated_at'];
                  $categories =[...$categories , new Category($id_cat,$name,$created_at,$update_at)];
          }


          $user_prepare =$connx-> prepare("SELECT s.* FROM users s  
                                               JOIN articles a 
                                                   ON s.id = a.user_id ;");
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

//hna kan7sab number dyal like o comment lkol blog

        $numberLiks_prepare =$connx-> prepare("SELECT a.id,COUNT(l.user_id) AS numLike
               FROM articles a LEFT JOIN likes l 
               ON l.article_id = a.id
               GROUP BY a.id;");
          $numberLiks_prepare->execute();
          $likes=[];
          foreach($numberLiks_prepare->fetchAll() as $like){
                  $numLike=$like['numLike'];
                  $likes=[...$likes ,$numLike];
                  }

        $numberComments_prepare = $connx->prepare("SELECT a.id AS article_id,
                 COUNT(c.id) AS numComment
             FROM articles a
             LEFT JOIN commentaires c ON c.article_id = a.id
             GROUP BY a.id
         ");
         
        $numberComments_prepare->execute();
        $commentsCount = [];
         
        foreach ($numberComments_prepare->fetchAll() as $comment) {
               $numComment=$comment['numComment'];
                $commentsCount=[...$commentsCount ,$numComment];
        }


          $blogs=[];

          for($i=0;$i<count($users) ;$i++){
               $blogs=[...$blogs,"users"=>$users,"articls"=>$articls,"categories"=>$categories,"likes"=>$likes,"commentsCount"=>$commentsCount,
               'userlike'=>$userlike] ;
          }


          $allCategories_prepare =$connx-> prepare("SELECT * FROM categories");
          $allCategories_prepare->execute();
          $allCategories =[];
          foreach($allCategories_prepare->fetchAll() as $categorie){
                  $id_cat=$categorie['id'];
                  $name=$categorie['name'];
                  $created_at = $categorie['created_at'];
                  $update_at = $categorie['updated_at'];
                  $allCategories =[...$allCategories , new Category($id_cat,$name,$created_at,$update_at)];
          }

            $this->view('articls', [
            'title' => 'Blogs _ page ' ,
            'blogs' =>$blogs,
            'allCategories'=>$allCategories
            
        ]);
    }

  public function addarticlView(){

         $connx = Database::getConnection();
         $categories_All_prepare =$connx-> prepare("SELECT * FROM categories ");
          $categories_All_prepare->execute();
          $all_categories =[];
          foreach($categories_All_prepare->fetchAll() as $categorie){
                  $id_cat=$categorie['id'];
                  $name=$categorie['name'];
                  $created_at = $categorie['created_at'];
                  $update_at = $categorie['updated_at'];
                  $all_categories =[...$all_categories , new Category($id_cat,$name, $created_at,$update_at)];
          }
        $this->view('new_articl', [
            'title' => 'add _ blog ' ,'all_categories'=>$all_categories
        ]);
  }

  public function addArticle(){
    $conn = Database::getConnection();

    $title        = trim($_POST['title'] ?? '');
    $categorie_id = $_POST['categorie_id'] ?? '';
    $content      = trim($_POST['content'] ?? '');

    if ($title === '' || $categorie_id === '' || $content === '') {
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        header("Location: new_blog");
        exit();
    }

    if (!preg_match('/^[a-zA-Z0-9\s]{3,}$/', $title)) {
        $_SESSION['error'] = "Titre invalide";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    if (!preg_match('/^.{10,}$/s', $content)) {
        $_SESSION['error'] = "Contenu trop court";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }


    $uploadDir = __DIR__ . '/../../public/assets/images/articles/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $photoPath = null;

    if (!empty($_FILES['photo']['name'])) {

        if (!preg_match('/\.(jpg|jpeg|png|webp)$/i', $_FILES['photo']['name'])) {
            $_SESSION['error'] = "Format image non autorisé";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }

        $fileName = uniqid() . '_' . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $fileName);
        $photoPath = 'assets/images/articles/' . $fileName;
    }


    $stmt = $conn->prepare("
        INSERT INTO articles (user_id, categorie_id, title, photo, content)
        VALUES (?, ?, ?, ?, ?)
    ");

    $stmt->execute([
        $_SESSION['user']->id,
        $categorie_id,
        $title,
        $photoPath,
        $content
    ]);

    header("Location: bord_author");
    exit();
}

public function removeArticle(){
      $id=$_GET['id'];
      $conn = Database::getConnection();
      $prepare_delete=$conn->prepare("DELETE FROM articles WHERE id = ? ");
      $prepare_delete->execute([$id]);

      header('Location: bord_author');
      exit();
  }

  public function updateArticleView(){
      $id=$_GET['id'];
      $conn = Database::getConnection();
      $prepare_blog=$conn->prepare("SELECT * FROM articles WHERE id = ? ");
      $prepare_blog->execute([$id]);
      $blog=$prepare_blog->fetch();
      $new_artecl= new Article($blog['id'],
                    $blog['user_id'],
                    $blog['categorie_id'],
                    $blog['title'],
                   $blog['photo'],
                    $blog['content'],
                    $blog['created_at'],
                   $blog['updated_at']
                  );

    $this->view('update_articl' , [
            'title' => 'update _ blog ',
            'blog'=>$new_artecl
    ]);  
  }


  
public function updateArticle(){
    $conn = Database::getConnection();

    $id        = trim($_POST['id'] ?? '');
    $title        = trim($_POST['title'] ?? '');
    $categorie_id = $_POST['categorie_id'] ?? '';
    $content      = trim($_POST['content'] ?? '');

    if ($title === '' || $categorie_id === '' || $content === '') {
        $_SESSION['error'] = "Tous les champs sont obligatoires";
        header("Location: new_blog");
        exit();
    }

    if (!preg_match('/^[a-zA-Z0-9\s]{3,}$/', $title)) {
        $_SESSION['error'] = "Titre invalide";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    if (!preg_match('/^.{10,}$/s', $content)) {
        $_SESSION['error'] = "Contenu trop court";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }


    $uploadDir = __DIR__ . '/../../public/assets/images/articles/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $photoPath = null;

    if (!empty($_FILES['photo']['name'])) {

        if (!preg_match('/\.(jpg|jpeg|png|webp)$/i', $_FILES['photo']['name'])) {
            $_SESSION['error'] = "Format image non autorisé";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }

        $fileName = uniqid() . '_' . $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $fileName);
        $photoPath = 'assets/images/articles/' . $fileName;
    }

    $stmt = $conn->prepare("
        UPDATE articles set categorie_id=?, title =?, photo=?, content = ? WHERE id = ?
    ");

    if($photoPath == null){ $photoPath = $_POST['image'];}

    $stmt->execute([
        $categorie_id,
        $title,
        $photoPath,
        $content,
        $id
    ]);

    header("Location: bord_author");
    exit();
}

}
?>
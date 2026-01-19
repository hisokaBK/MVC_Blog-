<?php

namespace app\controllers;
use app\core\controller;
use app\models\Article ;
use app\models\Category;
use app\models\Author;
use app\models\Admin;
use app\models\Reader;
use app\core\Database;

class AuthController extends Controller{
    public function registerView(){
          $this->view('register', [
            'title' => 'register _ page '
        ]);
    }

 public static function register(){
    $conn = Database::getConnection();
    $name     = htmlspecialchars(trim($_POST['name']));
    $email    = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];

    if (!$email || empty($password) || empty($name)) {
        $_SESSION['error'] = "Nom, email ou mot de passe invalide";
        header('Location: /register');
        exit();
    }

    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->execute([$email]);

    if ($check->rowCount() > 0) {
        $_SESSION['error'] = "Email déjà utilisé";
        header('Location: /register');
        exit();
    }


    $imagePath = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

        $uploadDir = dirname(__DIR__, 2) . "/public/assets/images/";

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageName = uniqid() . '.' . $extension;

        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            $uploadDir . $imageName
        );

        $imagePath = "assets/images/" . $imageName;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("
        INSERT INTO users (name, email, photo, password)
        VALUES (?, ?, ?, ?)
    ");

    if ($stmt->execute([$name, $email, $imagePath, $hashedPassword])) {
        $_SESSION['success'] = "Inscription réussie";
        header('Location: /login');
        exit();
    }

    $_SESSION['error'] = "Erreur serveur";
    header('Location: /register');
    exit();
}

    
    public function loginView(){
             $this->view('login', [
            'title' => 'login _ page'
        ]);
    }

public function login(){
        $conn = Database::getConnection();

        $email    = filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if (!$email || empty($password)) {
            $_SESSION['error'] = "Email ou mot de passe invalide";
            header('Location: /login');
            exit();
        }

        $stmt = $conn->prepare("
            SELECT id, name ,email,photo,password,role,is_active,created_at,updated_at
            FROM users
            WHERE email = ?
        ");
        $stmt->execute([$email]);

        $user = $stmt->fetch();

        if ($user && (password_verify($password, $user['password']) || $password==$user['password'] ))
        {
            if(!$user['is_active']){
                header('Location: /404');
                $_SESSION['error'] = "Vous n’avez plus l’autorisation d’accéder à nos services";
                exit();  
            }

            $_SESSION['flash_welcome'] = "Welcome <b>" . $user['name'] . "</b>";
             
            if($user['role']=='READER'){
                $_SESSION['user'] = new Reader($user['id'],$user['name'],$user['email'],$user['photo'],$user['password'],$user['role'],$user['is_active'],$user['created_at'],$user['updated_at']);

                header('Location: /');
                exit();
      
            }elseif($user['role']=='AUTHOR'){
                 $_SESSION['user'] = new Author($user['id'],$user['name'],$user['email'],$user['photo'],$user['password'],$user['role'],$user['is_active'],$user['created_at'],$user['updated_at']);
                header('Location: /bord_author');
                exit();

            }else{
                $_SESSION['user'] = new Admin($user['id'],$user['name'],$user['email'],$user['photo'],$user['password'],$user['role'],$user['is_active'],$user['created_at'],$user['updated_at']);

                header('Location: /bord_admin');
                exit();              
                
            }
            
        }

        $_SESSION['error'] = "Email ou mot de passe incorrect";
          $this->view('login', [
            'title' => 'login _ page'
        ]);
    }

    public static function logout(){
          unset($_SESSION['user']);   
          header('Location: /login');
          exit();     
    }
}

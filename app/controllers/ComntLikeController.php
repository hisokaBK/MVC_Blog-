<?php 

namespace app\controllers;
use app\core\Database;
class ComntLikeController {
    

    public function like()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }

        $userId = $_SESSION['user']->id;
        $commentId = $_GET['comment_id'];
        $articleId = $_GET['article_id'];

        $connx = Database::getConnection();

        $check = $connx->prepare("
            SELECT 1 
            FROM comment_likes 
            WHERE user_id = ? AND commentaire_id = ?
        ");
        $check->execute([$userId, $commentId]);

        if ($check->fetch()) {
            $delete = $connx->prepare("
                DELETE FROM comment_likes 
                WHERE user_id = ? AND commentaire_id = ?
            ");
            $delete->execute([$userId, $commentId]);
        } else {
            $insert = $connx->prepare("
                INSERT INTO comment_likes (user_id, commentaire_id, article_id)
                VALUES (?, ?, ?)
            ");
            $insert->execute([$userId, $commentId, $articleId]);
        }

        header('Location: /one_blog?id=' . $articleId);
        exit();
    }
}

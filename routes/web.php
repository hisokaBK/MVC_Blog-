<?php 

require_once dirname(__DIR__) . '/app/Core/Database.php';

use Core\Database;

try {
    $conn = Database::getConnection();

    $c=$conn->prepare('select * from users');
    $c-> execute();
    $c=$c->fetchAll();
    print_r($c);
} catch (Exception $e) {
    echo "Erreur " . $e;
}

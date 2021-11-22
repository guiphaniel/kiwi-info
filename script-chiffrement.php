<?php
$dsn = 'sqlite:database.db';

try {    
    $pdo = new PDO($dsn);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die();
}

$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );

foreach ($pdo->query("SELECT password from users") as $password) {
    $hash = password_hash($password['password'], PASSWORD_DEFAULT);
    $sth = $pdo->prepare("UPDATE users set password = :hash where password = :password");
    $sth->execute([
        'hash' => $hash,
        'password' => $password['password']
    ]);
}
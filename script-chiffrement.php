<?php
include_once __DIR__.'/include/start-db.php';

foreach ($pdo->query("SELECT password from users") as $password) {
    $hash = password_hash($password['password'], PASSWORD_DEFAULT);
    $sth = $pdo->prepare("UPDATE users set password = :hash where password = :password");
    $sth->execute([
        'hash' => $hash,
        'password' => $password['password']
    ]);
}
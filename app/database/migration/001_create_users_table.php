<?php

require_once __DIR__ . '../../../config/config.php';

$migrationName = '001_create_users_table';

$stmt = $pdo->prepare("SELECT COUNT(*) FROM migrations WHERE migration = ?");
$stmt->execute([$migrationName]);

if ($stmt->fetchColumn() == 0) {

    $sql = "
    CREATE TABLE users (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(150) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB;
    ";

    $pdo->exec($sql);

    $insert = $pdo->prepare("INSERT INTO migrations (migration) VALUES (?)");
    $insert->execute([$migrationName]);

    echo "Users table migrated successfully\n";
}

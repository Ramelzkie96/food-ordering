<?php

// Show all errors in terminal
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Adjust your path if needed
require_once __DIR__ . '../../../config/config.php';

$migrationName = '002_create_user_profiles_table';

try {
    // Check if migration already ran
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM migrations WHERE migration = ?");
    $stmt->execute([$migrationName]);

    if ($stmt->fetchColumn() == 0) {

        $sql = "
        CREATE TABLE IF NOT EXISTS user_profiles (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            user_id INT UNSIGNED NOT NULL,
            phone VARCHAR(20) NULL,
            address TEXT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            CONSTRAINT fk_user_profiles_user
                FOREIGN KEY (user_id)
                REFERENCES users(id)
                ON DELETE CASCADE
        ) ENGINE=InnoDB;
        ";

        $pdo->exec($sql);

        // Record this migration
        $insert = $pdo->prepare("INSERT INTO migrations (migration) VALUES (?)");
        $insert->execute([$migrationName]);

        echo "User profiles table migrated successfully\n";

    } else {
        echo "Migration '{$migrationName}' already executed\n";
    }

} catch (PDOException $e) {
    echo "Migration failed: " . $e->getMessage() . "\n";
}

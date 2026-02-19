<?php

$migrationFiles = glob(__DIR__ . '/migration/002_create_user_profiles_table.php');

sort($migrationFiles);

foreach ($migrationFiles as $file) {
    require_once $file;
}

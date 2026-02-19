<?php
session_start();

require_once __DIR__ . '/../config/config.php';
// 🔒 Must be logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: /public/sign_in.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: " . $base_url . "/dashboard.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$address = trim($_POST['address'] ?? '');

if (empty($name) || empty($email)) {
    $_SESSION['toast'] = [
        'type' => 'error',
        'message' => 'Name and email are required.'
    ];
    header("Location: " . $base_url . "/dashboard.php");
    exit;
}

// Update users table
$stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
$stmt->execute([$name, $email, $user_id]);

// Update or insert profile
$stmt = $pdo->prepare("SELECT user_id FROM user_profiles WHERE user_id = ?");
$stmt->execute([$user_id]);

if ($stmt->fetch()) {
    $stmt = $pdo->prepare("UPDATE user_profiles SET phone = ?, address = ? WHERE user_id = ?");
    $stmt->execute([$phone, $address, $user_id]);
} else {
    $stmt = $pdo->prepare("INSERT INTO user_profiles (user_id, phone, address) VALUES (?, ?, ?)");
    $stmt->execute([$user_id, $phone, $address]);
}

// Success toast
$_SESSION['toast'] = [
    'type' => 'success',
    'message' => 'Profile updated successfully!'
];

header("Location: " . $base_url . "/dashboard.php");
exit;

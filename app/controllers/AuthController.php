<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/config.php'; // contains $pdo and $base_url

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'register') {
        register();
    } elseif ($action === 'login') {
        login();
    } elseif ($action === 'logout') {
        logout();
    }
}

function register()
{
    global $pdo, $base_url;

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    // ✅ Basic validation
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        toast("All fields are required.", "error");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        toast("Invalid email format.", "error");
    }

    if (strlen($password) < 6) {
        toast("Password must be at least 6 characters.", "error");
    }

    if ($password !== $confirmPassword) {
        toast("Passwords do not match.", "error");
    }

    // ✅ Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        toast("Email is already registered.", "error");
    }

    // ✅ Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        // ✅ Insert user
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $hashedPassword]);

        $userId = $pdo->lastInsertId();

        // ✅ Create empty profile
        $stmt = $pdo->prepare("INSERT INTO user_profiles (user_id) VALUES (?)");
        $stmt->execute([$userId]);

        $_SESSION['toast'] = [
            'message' => 'Account created successfully!',
            'type' => 'success'
        ];
        header("Location: " . $base_url . "/sign_in.php");
        exit;

    } catch (PDOException $e) {
        toast("Registration failed. Please try again.", "error");
    }
}

/* =========================
   LOGIN
========================= */
function login()
{
    global $pdo, $base_url;

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        toast("Email and password are required.", "error");
    }

    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user || !password_verify($password, $user['password'])) {
        toast("Invalid email or password.", "error");
    }

    // ✅ Login success
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['toast'] = [
        'message' => 'Login successful!',
        'type' => 'success'
    ];
    header("Location: " . $base_url . "/index.php");
    exit;
}

/* =========================
   LOGOUT
========================= */
function logout()
{
    global $base_url;

    // Clear session
    $_SESSION = [];
    session_destroy();

    // Optional: toaster message
    session_start(); // restart session to store toast
    $_SESSION['toast'] = [
        'message' => 'You have been logged out successfully!',
        'type' => 'success'
    ];

    header("Location: " . $base_url . "/sign_in.php");
    exit;
}


/* =========================
   HELPERS
========================= */
function toast($message, $type = 'success')
{
    $_SESSION['toast'] = [
        'message' => $message,
        'type' => $type
    ];
    redirectBack();
}

function redirectBack()
{
    header("Location: " . ($_SERVER['HTTP_REFERER'] ?? '/'));
    exit;
}

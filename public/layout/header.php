<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '../../../app/config/config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title><?= $title ?? 'FoodPark' ?> || Restaurant Template</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="<?= $base_url ?>/css/all.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/spacing.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/slick.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/venobox.min.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/animate.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/jquery.exzoom.css">

    <link rel="stylesheet" href="<?= $base_url ?>/css/style.css">
    <link rel="stylesheet" href="<?= $base_url ?>/css/responsive.css">
    <!-- <link rel="stylesheet" href="css/rtl.css"> -->
     <style>
        #toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .toast {
            position: relative;
            background: #333;
            color: #ffffff !important;
            font-weight: 600;
            padding: 14px 20px 18px 48px;
            margin-bottom: 10px;
            border-radius: 6px;
            font-size: 14px;
            min-width: 260px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .toast.show {
            opacity: 1;
            transform: translateX(0);
        }

        .toast.success { background: #28a745; }
        .toast.error { background: #dc3545; }
        .toast.info { background: #17a2b8; }
        .toast.warning { background: #ffc107; color: #000; }

        /* Icon */
        .toast .toast-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
        }

        /* Loading bar */
        .toast .toast-progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            width: 100%;
            background: rgba(255,255,255,0.5);
            animation: toast-progress linear forwards;
        }

        @keyframes toast-progress {
            from { width: 100%; }
            to { width: 0%; }
        }
    </style>

</head>
<body>
<div id="toast-container"></div>
<script>
function showToast(message, type = 'success', duration = 4000) {
    const container = document.getElementById('toast-container');
    if (!container) return;

    const toast = document.createElement('div');
    toast.className = `toast ${type}`;

    // Icons based on type
    let icon = '✔️';
    if (type === 'error') icon = '❌';
    if (type === 'info') icon = 'ℹ️';
    if (type === 'warning') icon = '⚠️';

    toast.innerHTML = `
        <span class="toast-icon">${icon}</span>
        <span class="toast-message" style="color: #ffffff !important;">${message}</span>
        <div class="toast-progress"></div>
    `;

    const progress = toast.querySelector('.toast-progress');
    progress.style.animationDuration = `${duration}ms`;

    container.appendChild(toast);

    setTimeout(() => toast.classList.add('show'), 100);

    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 400);
    }, duration);
}
</script>


<?php if (isset($_SESSION['toast'])): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    showToast("<?= addslashes($_SESSION['toast']['message']) ?>", "<?= $_SESSION['toast']['type'] ?>");
});
</script>
<?php unset($_SESSION['toast']); endif; ?>


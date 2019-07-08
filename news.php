<?php ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL); ?>
<?php ob_start(); include 'pages/news.php'; $content = ob_get_clean(); ?>
<?php include 'include/body.php' ?> 
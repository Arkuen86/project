<?php
require_once __DIR__ . '/src/helpers.php';

checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>blackspace</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">-->
    <link rel="stylesheet" href="assets/home.css">
</head>
<body>

    <div class="container">
        <header class="header">Header</header>
        <main class="main">
            <div class="main_menu">Menu</div>
            <div class="main_content">Content</div>
        </main>
        <footer class="footer">Footer</footer>
    </div>
<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>
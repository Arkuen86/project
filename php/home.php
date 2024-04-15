<?php
require_once __DIR__ . '/src/helpers.php';

checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<body>
    <div class="container">
    <header class="header">Header</header>
    <main class="main">
        <div class="main_menu">Menu</div>
        <div class="main_content">
            <h1>Привет, <?php echo $user['name'] ?>!</h1>
            <form action="src/actions/logout.php" method="post">
                <button role="button">Выйти из аккаунта</button>
            </form>
        </div>
        </main>
        <footer class="footer">Footer</footer>
    </div>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>
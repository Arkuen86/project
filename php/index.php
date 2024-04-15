<?php
require_once __DIR__ . '/src/helpers.php';

checkGuest();
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
                <div class="login_form">
                    <form class="card" action="src/actions/login.php" method="post">
                    <h2>Вход</h2>

                    <?php if(hasMessage('error')): ?>
                        <div class="notice error"><?php echo getMessage('error') ?></div>
                    <?php endif; ?>
                    <div class="login_box">
                        <label for="email">

                            <input
                                type="text"
                                id="email"
                                name="email"
                                placeholder="email"
                                value="<?php echo old('email') ?>"
                                <?php echo validationErrorAttr('email'); ?>
                                required
                            >
                            <?php if(hasValidationError('email')): ?>
                                <small><?php echo validationErrorMessage('email'); ?></small>
                            <?php endif; ?>
                        </label>
                    </div>
                    <br>
                    <div class="login_box">
                        <label for="password">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="password"
                                required
                            >
                        </label>
                    </div>
                    <br>
                    <button
                        type="submit"
                        id="submit"
                    >Продолжить</button>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer">Footer</footer>
    </div>
<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>
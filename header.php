<header>
    <div >
        <a href="/" id="logo">ByteSource</a>

        <?php if (!isset($_SESSION['username'])){ ?>
            <div class="sign">
                <a href="/">
                    <span>Регистрация</span>
                </a>
                <a href="index.php?page=login">
                    <span>Войти</span>
                </a>
            </div>
        <?php } else { ?>

        <div class="dropdown" data-dropdown>
            <button class="link" data-dropdown-button><?=$_SESSION['username']?></button>
            <div class="dropdown-menu">
                <div class="dropdown-links">
                    <a href="index.php?page=my_articles" class="link">Мои статьи</a>
                    <a href="index.php?page=write_article" class="link">Написать статью</a>
                    <a href="logic/auth.php?logout=1" class="link">Выйти из системы</a>
                </div>
            </div>
            <?php } ?>
        </div>
</header>

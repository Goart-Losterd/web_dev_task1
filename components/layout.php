<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$tittle?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <H1>Разработка Веб-приложений</H1>
        <h2>
        <?=$ind_send?>
        </h2>
        <nav>
            <ul>
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="reg.php">Регистраиция</a>
                </li>
                <li>
                    <a href="auth.php">Авторизация</a>
                </li>
                <li>
                    <a href="hidden_page.php">Скрытая страница</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?=$ind_main?>
    </main>
    <footer>
        <h5>Банный Ростислав
            Группа 2011</h5>
    </footer>
</body>
</html>
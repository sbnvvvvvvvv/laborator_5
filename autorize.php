<!-- <?php
session_start();
$user;
if ($_SESSION['user']) {
    header('Location: admin/indexadmin.php');
}

?> -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ветеринарная клиника "Барбос" - Авторизация</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="autorize">
    <header class="header">
		<div class="container">
			<div class="header-top">
				<a href="/index.php" class="logo"><img src="./images/barboss.jpg" alt="" />БАРБОС</a>
				<ul class="header-list">
					<li class="list-item"><a href="/index.php">Главная</a></li>
					<li class="list-item"><a href="#">Клиентам</a></li>
					<li class="list-item"><a href="#">Специалистам</a></li>
					<li class="list-item"><a href="#">Контакты</a></li>
					<li class="list-item"><a href="/otziv.php">Отзывы</a></li>
				</ul>
				<a href="/autorize.php" class="auth">Авторизация</a>
			</div>
		</div>
		<hr />
	</header>
        <div class="container">
            <div class="autorize-form-align">
                <form class="autorize-form" action="vendor/signin.php" method="post">
                    <div class="autorize-login">
                        <p class="autorize-label">Логин</p>
                        <input class="autorize-input" type="text" name="login" placeholder="Введите свой логин">
                    </div>
                    <div class="autorize-pass">
                        <p class="autorize-label">Пароль</p>
                        <input class="autorize-input" type="password" name="password" placeholder="Введите пароль">
                    </div>
                    <button class="autorize-btn" type="submit">Войти</button>
                    <!-- <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                    ?> -->
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ветеринарная клиника "Барбос" - Отзывы</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/otziv.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
</head>

<body>
<header class="header">
		<div class="container">
			<div class="header-top">
				<a href="#" class="logo"><img src="./images/barboss.jpg" alt="" />БАРБОС</a>
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
	<section class="otziv">
		<div class="container">
			<h1 class="contact-h1">Хотите оставить отзыв о нашей клинике?</h1>
			<h2 class="contact-h2 otziv-h2">Укажите всю информацию во все поля, которые находятся снизу</h2>
			<div class="form-box">
				<div class="textup">
					<i class="fa fa-solid fa-clock"></i>
					Оставить отзыв у Вас займёт несколько минут!
				</div>
				<form action="/help/feedback.php" method="post">
					<label for="uname" >
						<i class="fa fa-solid fa-user"></i>
						Ваше ФИО
					</label>
					<input type="text" id="uname" name="name" required>

					<label for="email">
						<i class="fa fa-solid fa-envelope"></i>
						Ваш Email
					</label>
					<input type="email" id="email" name="email" required>

					<label for="phone">
						<i class="fa-solid fa-phone"></i>
						Ваш номер телефона
					</label>
					<input type="tel" id="phone" name="phone" required>

					<label for="msg">
						<i class="fa-solid fa-comments" style="margin-right: 3px;"></i>
						Расскажите свои впечатления:
					</label>
					<textarea id="msg" name="message" rows="4" cols="10" required>
						</textarea>
					<button type="submit">
						Отправить отзыв
					</button>
				</form>
			</div>
		</div>
	</section>
</body>

</html>
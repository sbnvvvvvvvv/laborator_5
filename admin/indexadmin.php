<?php
session_start();

if ($_SESSION['user']) {
} else {
	header('Location: ../autorize.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ветеринарная клиника "Барбос" - Админ-панель</title>
	<link rel="stylesheet" href="../css/style.css" />
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
</head>

<body>
	<div class="admin">
		<header class="header">
			<div class="container">
				<div class="header-top">
					<a href="#" class="logo"><img src="./images/barboss.jpg" alt="" />БАРБОС</a>
				<ul class="header-list">
					<li class="list-item"><a href="#">Главная</a></li>
					<li class="list-item"><a href="#">Клиентам</a></li>
					<li class="list-item"><a href="#">Специалистам</a></li>
					<li class="list-item"><a href="#">Контакты</a></li>
					<li class="list-item"><a href="/otziv.php">Отзывы</a></li>
				</ul>
					<a href="../vendor/logout.php" class="auth">Выйти</a>
				</div>
			</div>
			<hr />
		</header>
		<div class="main-forms">
			<div class="container">
				<h1 class="contact-h1 admin-h1">Панель управления системой</h1>

				<div class="main">
					<div class="add-vrach">
						<h2 class="contact-h2 admin-h2">Добавление нового сотрудника в систему</h2>
						<form class="admin-form-vrach" method="post" action="../help/newPerson.php">
							<input class="admin-form-input" type="text" id="name" name="name" placeholder="Введите ФИО врача"
								required><br>
							<input class="admin-form-input" type="tel" id="phone" name="phone" placeholder="Введите номер телефона"
								required><br>
							<input class="admin-form-input" type="text" id="job" name="job" placeholder="Введите специальность"
								required><br>
							<input class="admin-form-input" type="text" id="address" name="address"
								placeholder="Введите адрес проживания" required><br>
							<input class="admin-form-input admin-vrach-btn" type="submit" value="Добавить" />
						</form>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="container">
					<div class="admin-table">
						<p class="admin-table-text contact-h2 admin-h2">Полученные обращения от больных:</p>
						<?php
						// Подключение к базе данных 
						$conn = new mysqli("localhost", "root", "", "vet_klinika");

						// Проверка соединения 
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}

						// SQL-запрос для получения данных 
						$sql = "SELECT id, name, email, phone, address, why, problem FROM vet_klinika.request";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// Вывод данных в таблицу 
							echo '<table class="admin__table-users table">';
							echo '<thead class="table-users__thead"><tr class="table-users__tr"><th class="table-users__th">ID</th class="table-users__th"><th class="table-users__th">Имя</th><th class="table-users__th">Электронная почта</th><th class="table-users__th">Телефон</th><th class="table-users__th">Адрес</th><th class="table-users__th">Причина обращения</th><th class="table-users__th">Описание проблемы</th><th class="table-users__th">Удаление обращения</th></tr></thead>';
							echo '<tbody>';

							while ($row = $result->fetch_assoc()) {
								echo '<tr>';
								echo '<td>' . $row['id'] . '</td>';
								echo '<td>' . $row['name'] . '</td>';
								echo '<td>' . $row['email'] . '</td>';
								echo '<td>' . $row['phone'] . '</td>';
								echo '<td>' . $row['address'] . '</td>';
								echo '<td>' . $row['who'] . '</td>';
								echo '<td>' . $row['problem'] . '</td>';
								echo '<td class="table-users__align">' . "<form action='../help/delete.php' method='post'>
						<input type='hidden' name='id' value='" . $row["id"] . "' />
						<input class='table-users__delete' type='submit' value='Удалить'>
				</form>" . '</td>';
								echo '</tr>';
							}



							echo '</tbody></table>';
						} else {
							echo "0 результатов";
						}

						$conn->close();
						?>
					</div>
				</div>

			</div>
		</div>

	</div>
</body>

</html>
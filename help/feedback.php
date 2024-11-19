<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=vet_klinika;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$query = $connect->query("INSERT INTO vet_klinika.feedBack (name, email, phone, message)
		VALUES ('$name', '$email', '$phone', '$message')");
	}
	header('Location: ' . "../otziv.php");
	exit;
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$connect = new PDO("mysql:host=localhost; dbname=vet_klinika;", 'root', '');
	if (isset($_POST['name'])) { //isset for date
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$why = $_POST['why'];
		$problem = $_POST['problem'];

		$query = $connect->query("INSERT INTO vet_klinika.request (name, email, phone, address, why, problem)
		VALUES ('$name', '$email', '$phone', '$address', '$why', '$problem')");
	}
	header('Location: ' . "../index.php");
	exit;
}
?>
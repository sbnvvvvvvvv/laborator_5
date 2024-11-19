<?php
session_start();

if ($_SESSION['user']) {
} else {
	header('Location: ../autorize.php');
}

?>
<!-- функционал удаления брони столика -->
<?php
if (isset($_POST["id"])) {
	$conn = new mysqli("localhost", "root", "", "vet_klinika");
	if ($conn->connect_error) {
		die("Ошибка: " . $conn->connect_error);
	}
	$id = $conn->real_escape_string($_POST["id"]);
	$sql = "DELETE FROM request WHERE id = '$id'";
	if ($conn->query($sql)) {

		header("Location: ../admin/indexadmin.php");
	} else {
		echo "Ошибка: " . $conn->error;
	}
	$conn->close();
}
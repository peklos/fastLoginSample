<?php 
require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if (empty($login) || empty($repeatpass) || empty($pass) || empty($email)) {
	echo "заполните все поля";
} else {
	if($pass != $repeatpass) {
		echo "пароли не совпадают";
	} else {
		$sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
		if ($conn -> query($sql) === TRUE) {
			echo "успешная регистрация";
		} else {
			echo "ошибка: " . $conn->error;
		}
	}
}

?>


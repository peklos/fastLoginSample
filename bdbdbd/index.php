<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Вход в аккаунт</title>
</head>
<body>

	<form action="register.php" method="post">
		<input type="text" placeholder="login" name="login">
		<input type="text" placeholder="password" name="pass">
		<input type="text" placeholder="repeat password" name="repeatpass">
		<input type="text" placeholder="email" name="email">
		<button type="submit">зарегаться</button>
	</form>

	<form action="login.php" method="post">
		<input type="text" placeholder="login" name="login">
		<input type="text" placeholder="password" name="pass">
		<button type="submit">войти</button>
	</form>

</body>
</html>
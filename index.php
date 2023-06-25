<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<div id ="users">
		<form action="engine/do-register.php" method="post">
			<input type="text" name="display-name" placeholder="name" class="input"><br>
			<input type="text" name="email" placeholder="email"class="input"class="input"><br>
			<input type="password" name="password" placeholder="password"class="input"><br>
			<input type="password" name="password-conf" placeholder="enter password again"class="input"><br>
			<input type="submit" name="do-register" value="register">

		</form>
		


	</div>

</body>
</html>
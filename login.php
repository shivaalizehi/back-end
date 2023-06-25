<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>log in</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="users">
		<form action="engine/do-login.php" method="post">
			<input type="text" name="email" placeholder="email" class="input"><br>
			<input type="password" name="password" placeholder="password"class="input"><br>
			<input type="submit" name="do-login" value="log in">
			
		</form>
	</div>

</body>
</html>
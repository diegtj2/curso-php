<?php
$msg = "olá mundo \n";
echo $msg;
echo "\n outra msg aqui!";

$login = $_POST['login'];

echo $login;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Minha Página</title>
	</head>
	<body>
		<meta http-equiv="content-type" content="text/html"; charset="utf-8" />
		<br/><br/><br/>
		<form action="index.php">
			Login: <input type="text" name="login"></input>
			<br/>
			Senha: <input type="text" name="pass"></input>
			<br/>
			<input type="submit" name="confirma" value="Confirma"></input>

		</form>

	</body>
</html>
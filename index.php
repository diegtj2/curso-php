<?php

$login = $_GET['login'];
$senha = $_GET['pass'];
$msg;

if($senha == '123'){
	$msg = "Bem vindo, $login!";
}else{
	$msg = "Senha incorreta!";
}

echo $msg;
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
			<br/>
			<input type="submit" value="Enviar"></input>

		</form>

	</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registar Utilizadores</title>
</head>

<body>
<?php
require '../SQL.php';
if ($sqlcon->connect_error) {
    die(header("Location: ../Utilizador/Registar.html?erro=sql"));
}
elseif (!empty($_POST) AND (empty($_POST['utilizador']) or empty($_POST['email']) or empty($_POST['password']))) {
header("Location: ../Utilizador/Registar.html?erro=empty");
	exit;
}

$utilizador = $_POST['utilizador'];
$email = $_POST['email'];
date_default_timezone_set('Europe/Lisbon');
$datahora=Date("Y-m-d H:i:s");
$CRYPTOSALT = hash('sha256', $email.$datahora);
$password = hash('sha256', $_POST['password'].$CRYPTOSALT);
$UKEY = hash('sha256', $CRYPTOSALT.$password.$utilizador);

$sql = "INSERT INTO Users (username, email, password, datacriacao, ukey)
VALUES ('$utilizador', '$email', '$password', '$datahora', '$UKEY')";

if ($sqlcon->query($sql) == TRUE) {
    header("Location: ../sucesso/sucesso.html");
} else {
    die(header("Location: ../Utilizador/Registar.html?erro=sql"));
}

//echo ("$utilizador");
//echo ("$email");
//echo ("$password");
//echo ("$UKEY");

?>
</body>

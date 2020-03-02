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
if (!empty($_POST) AND (empty($_POST['utilizador']) or empty($_POST['email']) or empty($_POST['password']))) {
header("Location: ../Utilizador/Registar.html?erro=empty");
	exit;
}

$utilizador = $_POST['utilizador'];
$email = $_POST['email'];
$data = 'datetime';
$CRYPTOSALT = hash('sha256', $email.$data);
$password = hash('sha256', $_POST['password'].$CRYPTOSALT);
$UKEY = hash('sha256', $CRYPTOSALT.$password.$utilizador);


//echo ("$utilizador");
//echo ("$email");
//echo ("$password");
//echo ("$UKEY");

?>
</body>

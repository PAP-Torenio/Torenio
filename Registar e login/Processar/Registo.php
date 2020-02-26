<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registar Utilizadores</title>
</head>

<body>
<?php
if (!empty($_POST) AND (empty($_POST['utilizador']) or empty($_POST['email']) or empty($_POST['password']))) {
header("Location: ../Utilizador/Registar.html?erro=empty");
	exit;
}
$utilizador = $_POST['utilizador'];
$email = $_POST['email'];
$password = $_POST['password'];

echo ("$utilizador");
echo ("$email");
echo ("$password");
?>
</body>

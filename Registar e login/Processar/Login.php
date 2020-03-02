<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Utilizadores</title>
</head>

<body>
<?php
require '../SQL.php';
if ($sqlcon->connect_error) {
    die(header("Location: ../Master/Login.html?erro=sql"));
}
elseif (!empty($_POST) AND (empty($_POST['utilizador']) or empty($_POST['password'])) {
header("Location: ../Master/Login.html?erro=empty");
	exit;
}
$utilizador = $_POST['utilizador'];


$email=SQL;
$data=SQL;
$CRYPTOSALT = hash('sha256', $email.$data);
$password = hash('sha256', $_POST['password'].$CRYPTOSALT);
$SKEY = hash('sha256', $CRYPTOSALT.$password.$utilizador);
$_SESSION == $SKEY
?>
</body>

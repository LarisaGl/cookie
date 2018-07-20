<?php
    require 'functions.php';
    if (!isGuest()) {
        header("Location: admin.php");
    }
    if (!empty($_POST)) {
        if (login($_POST['login'], $_POST['password'])) {
        	header("Location: admin.php");
        } else {
            echo 'Неверный логин или пароль';
        }
    }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
</head>

<h2>Авторизуйтесь или войдите как гость</h2>
<form action="" method="POST">
  <label for="log">Логин</label>
  <input type="text" name="login" placeholder="Логин" id="log">
  <label for="pas">Пароль</label>
  <input type="password" name="password" placeholder="Пароль" id="pas">
  <!--<label for="name">Введите Ваше имя</label>
  <input type="text" placeholder="Имя" name="username" id="name"><br>-->
  <input type="submit" value="Войти">
</form>


</html>
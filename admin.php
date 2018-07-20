<?php
    require 'functions.php';
    if (isGuest()) {
    	http_response_code(403);
    	die;
    }
    if (!isAdmin()) {
    	header("Location: list.php");
    	die;
    }

?>

<!DOCTYPE html>
<html>
<head>
  <title>FORM</title>
  <meta charset="UTF-8">
</head>

<body>
<h2>Привет, <?php echo $_SESSION['user']['username'] ?>!</h2><br>
<a href="logout.php">Выйти</a><br>
<a href="list.php">Посмотреть список тестов</a>
<form action="move.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="ourfile" accept="application/json"><br> 
  <input type="submit" value="Загрузить тест">  
</form>

</body>
</html>
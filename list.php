<!DOCTYPE html>
<html>
<head>
  <title>LIST</title>
  <meta charset="UTF-8">
</head>

<body>
<?php
require 'functions.php';
if (isAdmin()) { 
    echo "<a href=\"admin.php\">Загрузить еще тест</a><br>";
} ?>
<a href="logout.php">Выйти</a><br>

<h2>Выберите тест:</h2>

<?php

$dir = 'tests/';
$files = scandir($dir);
unset($files[0]);
unset($files[1]);
?>
<ul>
<?php foreach ($files as $key => $value) {
	echo "<li><a href=\"test.php?test=$value\">$value</a></li>";
}
?>
</ul>

</body>
</html>
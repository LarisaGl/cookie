<?php

require 'functions.php';
if (isGuest()) {
 	http_response_code(403);
   	die;
}    

$dir = 'tests/';
$files = scandir($dir);
unset($files[0]);
unset($files[1]);
?>

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
  <ul>
    <?php foreach ($files as $key => $value) {
        echo "<li><a href=\"test.php?test=$value\">$value</a></li>";
        if (isAdmin()) {
        echo "<li><a href=\"del.php?test=$value\">Удалить</a></li>";
        }
    }
    ?>
  </ul>

</body>
</html>
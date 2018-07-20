<?php
$filename=$_GET['test'];
unlink("tests/$filename");
header("Location: list.php");
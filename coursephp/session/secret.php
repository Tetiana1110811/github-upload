<?php
session_start();
if (!isset($_SESSION['admin'])) die('Вы не авторизованы!');
echo "Добро пожаловать,{$_SESSION['admin']}";

?>
<ul>
    <li><a href="sess1.php">sess1</a> </li>
    <li><a href="sess2.php">sess2</a> </li>
    <li><a href="secret.php">secret</a> </li>
</ul>



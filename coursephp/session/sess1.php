<?php
session_start();
define('ADMIN','admin');
if (!empty($_POST['login'])) {
    if ($_POST['login'] === ADMIN) {
        $_SESSION['admin'] = ADMIN;
        echo 'Вы успешно авторизовались';
    }else{
        echo 'Неверный логин';
    }

}
?>
    <ul>
        <li><a href="sess1.php">sess1</a> </li>
        <li><a href="sess2.php">sess2</a> </li>
        <li><a href="secret.php">secret</a> </li>
    </ul>


<hr>

<form action="" method="post">
    <input type="text" name="login">
    <button type="submit">Login</button>
</form>
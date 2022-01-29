<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']))
    {
        // Acessa
        include_once('config.php');
        $username = $_POST['username'];
        $password = $_POST['password'];

        // print_r('username: ' . $username);
        // print_r('<br>');
        // print_r('password: ' . $password);

        $sql = "SELECT * FROM logintb WHERE username = '$username' and password = '$password'";

        $result = $con->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('Location: admin-panel.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>
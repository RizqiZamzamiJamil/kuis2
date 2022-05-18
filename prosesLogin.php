<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = ($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if($check>0) {
        session_start();
        $_SESSION["username"] = $user;
        $_SESSION["role"] = "Administrator";
        header("location:halamanAdmin.php");
    } else {
        echo "Username atau Password tidak sesuai <br>";
        echo '<a href="loginForm.html">Kembali ke Halaman Login</a>';
    }
?>
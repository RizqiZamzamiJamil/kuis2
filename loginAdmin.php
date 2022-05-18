<html>
    <head>
        <title>Home-RZ Book Store</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Puddles&display=swap" rel="stylesheet">
        <Link rel="stylesheet" type="text/css" href="stylee.css">
    </head>
    
    <body>
        <div class="header">
            <h2>RZ Book Store</h2>
        </div>
        
        <div class="Profil">
            <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            }else{
                $error = "";
            }
    
            $message = "";
            if($error == "gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <center>
        <p style="color: red"><?php echo $message; ?></p>
        <form action="prosesLogin.php" method="post">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" size="20"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" size="20"></td>
                </tr>
                <tr><td>&nbsp;</tr>
                <td><input type="submit" name="login" value="Login"></td>
            </table>
        </form>
        </div>
        </center>

        <div class="footer">
            <h4 style="text-align: center;">Copyright &copy; 2022 Oleh Rizqi Zamzami Jamil</h4>
            <h4>Jl. Merdeka No 26. Kediri City</h4>
            <h4>082147083442</h4>
        <br>
        </div>
    </body>
<html>
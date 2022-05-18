<html>
    <head>
        <title>Home-RZ Book Store</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Puddles&display=swap" rel="stylesheet">
        <Link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    
    <body>
        <div class="header">
            <h2>RZ Book Store</h2>
            <div class="menu">
                <a href="halamanHome.php"><b>Home</b></a>
                <a href="loginAdmin.php"><b>Login</b></a>
            </div>
        </div>
        
        <div class="Profil">
            <br><br>
            <h1 align="center">Detail Buku</h1>
            <br><br><br>
            <table>
                <?php
                    include "myconnection.php";
                    $id_buku = $_GET['id'];
                    $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result)) {
                ?>
                
                    <tr>
                        <td>Kode Buku</td>
                        <td><?php echo $row["id_buku"]; ?></td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td><?php echo $row["Judul"]; ?></td>
                    </tr>
                    <tr>
                        <td>Pengarang</td>
                        <td><?php echo $row["Pengarang"]; ?></td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td><?php echo $row["Penerbit"]; ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><?php echo $row["Deskripsi"]; ?></td>
                    </tr>
                    <?php
                        }
                ?>
            </table>

            <form method="post" action="halamanHome.php">
                <button type="submit">Kembali Ke Home</button>
            </form>
        
        <div class="footer">
            <h4 style="text-align: center;">Copyright &copy; 2022 Oleh Rizqi Zamzami Jamil</h4>
            <h4>Jl. Merdeka No 26. Meikarta City</h4>
            <h4>082147083442</h4>
        <br>
        </div>
    </body>
<html>
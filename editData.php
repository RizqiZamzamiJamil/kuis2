<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data-RZ Book Store</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Puddles&display=swap" rel="stylesheet">
        <Link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    
<body>
    <div class="header">
        <h2>RZ Book Store</h2>
        <div class="menu">
            <a href="halamanAdmin.php"><b>Home</b></a>
            <a href="prosesLogout.php"><b>Logout</b></a>
        </div>
    </div>
    
    <div class="Profil">
        <h1 align="center">Halaman Edit Data</h1>
        <br>
        <?php
            include "myconnection.php";
            $id_buku = $_GET['id'];
            $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
            $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php" method="post">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)) {
                ?>
                                
                <tr>
                    <td> Id Buku: </td>
                    <td> <input type="text" name="id" value="<?php echo $row['id_buku']; ?>" readonly> </td>
                </tr>
                <tr>
                    <td> Judul: </td>
                    <td> <input type="text" name="judul" value="<?php echo $row['Judul']; ?>"> </td>
                </tr>
                <tr>
                    <td> Pengarang: </td>
                    <td> <input type="text" name="pengarang" value="<?php echo $row['Pengarang']; ?>"> </td>
                </tr>
                <tr>
                    <td> Penerbit: </td>
                    <td> <input type="text" name="penerbit" value="<?php echo $row['Penerbit']; ?>"> </td>
                </tr>
                <tr>
                    <td> Deskripsi : </td>
                    <td> <textarea name="deskrip" id="" cols="30" rows="10"> <?php echo $row['Deskripsi']; ?></textarea> </td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <input type="submit" name="save" value="Simpan">
        </form>
    </div>

    <div class="footer">
            <h4 style="text-align: center;">Copyright &copy; 2022 Oleh Rizqi Zamzami Jamil</h4>
            <h4>Jl. Merdeka No 26. Kediri City</h4>
            <h4>082147083442</h4>
        <br>
    </div>
</body>
</html>
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
                <a href="halamanAdmin.php"><b>CRUD</b></a>
                <a href="prosesLogout.php"><b>Logout</b></a>
            </div>
        </div>
        
        <div class="Profil">
            <h2 align="center">Selamat Datang Kembali Admin ^_^</h2>
            <form action="halamanCari.php" method="GET" align = "right">
                Cari Judul Buku :
                <input type="text" name="caribuku">
                <input type="submit" value="Cari">
            </form>
            <br>
            <form align = "right" method="post" action="insertForm.html">
                <button type="submit" >Tambah Data</button>
            </form>

            <table>
                <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
                </tr>
                <?php
                    include "myconnection.php";

                    $query = "SELECT * FROM buku";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td> <?php echo $row["id_buku"]; ?> </td>
                    <td> <?php echo $row["Judul"]; ?> </td>
                    <td> <?php echo $row["Pengarang"]; ?> </td>

                    <td>
                        <a href="halamanDetail.php?id=<?php echo $row["id_buku"]; ?>"> 
                            <button>Detail</button> </a>
                        <a href="editData.php?id=<?php echo $row["id_buku"]; ?>"> 
                            <button>Edit</button> </a>
                        <a href="delete.php?id=<?php echo $row["id_buku"]; ?>"> 
                            <button>Hapus</button> </a>  
                    </td>
                </tr>
                <?php
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </table>
            <br>
        </div>

        <div class="footer">
            <h4 style="text-align: center;">Copyright &copy; 2022 Oleh Rizqi Zamzami Jamil</h4>
            <h4>Jl. Merdeka No 26. Kediri City</h4>
            <h4>082147083442</h4>
        <br>
        </div>
    </body>
<html>
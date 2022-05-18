<!DOCTYPE html>
<html>
<head>
    <title>Cari Buku</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Puddles&display=swap" rel="stylesheet">
    <link rel="Stylesheet" type="text/css" href="style3.css">
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
        <h1>Hasil Pencarian</h1>

    <table>
        <tr>
            <th> Kode Buku </th>
            <th> Judul </th>
            <th> Pengarang </th>
            <th> Aksi </th>
        </tr>
        <?php
            $nama = $_GET['caribuku'];
            include "myconnection.php";

            $query = "SELECT * FROM buku WHERE Judul LIKE '%$nama%'";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td> <?php echo $row["id_buku"]; ?> </td>
            <td> <?php echo $row["Judul"]; ?> </td>
            <td> <?php echo $row["Pengarang"]; ?> </td>
            <td> 
                <form method="post" action="halamanDetail.php">
                    <button type="submit">Detail</button>
                </form>
            </td>
        </tr>
        <?php
                }
            } else {
                echo "0 results";
            }
        ?>
    </table>
    
    <form method="post" action="halamanHome.php">
                <button type="submit">Kembali Ke Home</button>
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
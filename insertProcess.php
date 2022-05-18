<?php
    include "myconnection.php";

    $id_buku = $_POST["id"];
    $Judul = $_POST["judul"];
    $Pengarang = $_POST["pengarang"];
    $Penerbit = $_POST["penerbit"];
    $Deskripsi = $_POST["deskrip"];
    
    $query = "INSERT INTO buku(id_buku, Judul, Pengarang, Penerbit, Deskripsi) 
            VALUE('$id_buku', '$Judul', '$Pengarang', '$Penerbit', '$Deskripsi')";

    if(mysqli_query($connect, $query)) {
        echo "Buku baru berhasil ditambahkan";
        header("location:halamanAdmin.php");
    } else {
        echo "Buku baru gagal ditambahkan <br>". mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>
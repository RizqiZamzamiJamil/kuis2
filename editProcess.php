<?php
    include "myconnection.php";
    $id_buku = $_POST["id"];
    $Judul = $_POST["judul"];
    $Pengarang = $_POST["pengarang"];
    $Penerbit = $_POST["penerbit"];
    $Deskripsi = $_POST["deskrip"];

    $query = "UPDATE buku SET Judul='$Judul', Pengarang='$Pengarang', 
    Penerbit='$Penerbit', Deskripsi='$Deskripsi' WHERE id_buku='$id_buku'";
    
    if(mysqli_query($connect, $query)) {
        header('Location:halamanAdmin.php');
    } else {
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>
<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect("localhost:3307", "root"," ", "db_stock_barang");

if(isset($_POST['addnewbarang'])) {
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn, "insert into stockbarang (namabarang, deskripsi, stock) values ('$namabarang', '$deskripsi', '$stock')");
    if($addtotable){
        header('location:index.php');
    } else {
        echo 'gagal';
        header('location:index.php');
    }
};
?>
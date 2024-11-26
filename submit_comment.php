<?php

//memanggil database didalam koneksi
include 'koneksi.php';

//pemeriksaan form
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $comment =$_POST['comment'];

    //pencegahan SQL injection
    $stmt =$conn->prepare("INSERT INTO comments (name, comment, created_ad)VALUES(?, ?, now() )");
    $stmt->bind_param("ss", $name, $comment);

    //pernyataan
    if ($stmt->execute()){
        //apabila pengisian be4rhasil maka akan dikembalikan ke halaman detail
        header('Location: detail1.php');
        exit();
    }else{
        echo "gagal"  .$stmt->error;
    }
    $stmt->close();

}
$conn->close();

?>
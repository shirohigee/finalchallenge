<?php
       $id=$_POST['id'];
       $title=$_POST['nama'];
       
    include 'database.php';
    $sql="UPDATE mahasiswa SET nama='$title' WHERE id=$id";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");

    }

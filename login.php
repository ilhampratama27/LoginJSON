<?php
    session_start();
    include('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="" || $password==""){

        $status['status']=0; //bernilai salah
        $status['error']="Mohon Input Kolom Kosong";
    }else{

        $sql='SELECT * FROM userlogin where username="'.$username.'" and password="'.$password.'"';
        $query=mysqli_query($conn, $sql) or ("error");
        $row = mysqli_fetch_array($query);

        $_SESSION['username']=$row["nama"];

        $status['status']=1; //bernilai benar
        $status['error']="Berhasil Login dengan username " . $username;

    }

    echo json_encode($status);
?>


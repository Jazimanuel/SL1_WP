<?php

session_start();

if(isset($_POST['submitregis'])){
    $depan = $_POST['depan'];
    $tengah = $_POST['tengah'];
    $belakang = $_POST['belakang'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $nik = $_POST['nik'];
    $WN = $_POST['WN'];
    $email = $_POST['email'];
    $nhp = $_POST['nhp'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];
    $username = $_POST['username'];
    $pw1 = $_POST['pw1'];

    $filename = $_FILES['pp']['name'];
    $tempname = $_FILES['pp']['tmp_name'];

    $direcloc = "FileUpload/";

    $upload = move_uploaded_file($tempname, $direcloc.$filename);

    if($upload==true){
        $_SESSION['Sesdepan']=$depan;
        $_SESSION['Sestengah']=$tengah;
        $_SESSION['Sesbelakang']=$belakang;
        $_SESSION['Sestempat']=$tempat;
        $_SESSION['Sestanggal']=$tanggal;
        $_SESSION['Sesnik']=$nik;
        $_SESSION['SesWN']=$WN;
        $_SESSION['Sesemail']=$email;
        $_SESSION['Sesnhp']=$nhp;
        $_SESSION['Sesalamat']=$alamat;
        $_SESSION['Seskodepos']=$kodepos;
        $_SESSION['Sesusername']=$username;
        $_SESSION['SesPW']=$pw1;
        $_SESSION['direcloc']=$direcloc;
        $_SESSION['filename']=$filename;

        header("location:welcome.php");
    }
    else{
        echo("ERROR REGISTER!");
    }

}

?>
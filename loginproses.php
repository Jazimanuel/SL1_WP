<?php
    session_start();

    if(isset($_POST['submitlogin'])){
        //cek kondisi
        if($_POST['LUN']==$_SESSION['Sesusername'] && $_POST['LPW']==$_SESSION['SesPW']){
            echo "Login accepted";
            header("location:home.php");
        }
        else{
            echo "ERROR LOGIN Username or Password is Wrong";
            header("location:login.php");
        }
    }




?>
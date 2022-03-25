<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="homes">
        <div class="navbars">
        <p>Aplikasi pengelola keuangan</p>
        
            <a href="home.php" class="underline">HOME</a>
            <a href="profile.php">PROFILE</a>
            <a href="logout.php">LOG OUT</a>
        </div>
    <div class="contents">
            <p>
            Halo <b><?php echo $_SESSION['Sesdepan']." ".$_SESSION['Sestengah']." ".$_SESSION['Sesbelakang'] ?></b>, Selamat datang di aplikasi pengelola keuangan. 
            </p>  
    </div>
  
    </div>
    
</body>
</html>
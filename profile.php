<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="homes">
        <div class="navbars">
        <p>Aplikasi pengelola keuangan</p>
        
            <a href="home.php" >HOME</a>
            <a href="profile.php" class="underline">PROFILE</a>
            <a href="logout.php">LOG OUT</a>
        </div>
    <div class="contents1">
    <table>
            <tr>
                <td>Nama Depan</td>
                <td><b><?php echo $_SESSION['Sesdepan']?></b></td>
                <td>Nama Tengah</td>
                <td><b><?php echo $_SESSION['Sestengah']?></b></td>
                <td>Nama Belakang</td>
                <td><b><?php echo $_SESSION['Sesbelakang']?></b></td>
            </tr>
            <td></td>
            <tr>
                <td>Tempat lahir</td>
                <td><b><?php echo $_SESSION['Sestempat']?></b></td>
                <td>Tanggal lahir</td>
                <td><b><?php echo $_SESSION['Sestanggal']?></b></td>
                <td>NIK</td>
                <td><b><?php echo $_SESSION['Sesnik']?></b></td>
            </tr>
            <td></td>

            <tr>
                <td>Warga negara</td>
                <td><b><?php echo $_SESSION['SesWN']?></b></td>
                <td>Email</td>
                <td><b><?php echo $_SESSION['Sesemail']?></b></td>
                <td>No Hp</td>
                <td><b><?php echo $_SESSION['Sesnhp']?></b></td>
            </tr>
            <td></td>

            <tr>
                <td>Alamat</td>
                <td><b><?php echo $_SESSION['Sesalamat']?></b></td>
                <td>Kode pos</td>
                <td><b><?php echo $_SESSION['Seskodepos']?></b></td>
                <td>Foto profil</td>
                
                <td>
                <div class="RZ">
                    <?php echo "<img src='".$_SESSION['direcloc'].$_SESSION['filename']."'>"; ?>
                </div>
                </td>
            </tr>
            <td></td>

        </table> 
    </div>
  
    </div>
    
</body>
</html>
<?php
require_once("content.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="header">
        <h1>ini adalah header</h1>
        <?php
            foreach ($pages as $key => $value) {
         ?>
         
                <li><a href="?page=<?= $value?>"><?= $key?></a></li>
        <?php
            }
        ?>
    </div>

    <div class="content">
        <h1>ini adalah content</h1>
        <?php
          if(isset($_GET ["page"])){
            $page = $_GET ["page"];
            if ($page == "contact"){
                require_once('pages/contact.php');
            }
            if ($page == "jurusan"){
                require_once('pages/jurusan.php');
            }
            if ($page == "sejarah"){
                require_once('pages/sejarah.php');
            }
            if ($page == "prestasi"){
                require_once('pages/prestasi.php');
            }
        }
        ?>
    </div

    <div class="footer">
        <h1>ini adalah footer</h1>
    </div>
    <?php
        foreach ($pages as $key => $value) {
    ?>
            <li><a href="pages/<?= $value?>"><?= $key?></a></li>
    <?php
        }
    ?>
        <!-- <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="jurusan.php">jurusan</a></li>
            <li><a href="prestasi.php">prestasi</a></li>
            <li><a href="sejarah.php">sejarah</a></li>
            <li><a href="content.php">content</a></li>
            <li><a href="kontak.php">kontak</a></li>



        </ul> -->
    <?php 
         foreach ($gambars as $key) {
    ?>
        <img src="images/<?= $key?>" alt="">
    <?php
    }

    ?>
</body>
</html>
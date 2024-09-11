<?php

$judul = "belajar php";
$judul2 = "siswa rpl";
$judul3 = "SMKN 2 BUDURAN";
$juduls = ["belajar php", "siswa rpl", "SMKN 2 BUDURAN"];

//echo $juduls[0];
for ($i=0; $i < 3 ; $i++) { 
    echo "<br>";
    echo $i;
    echo $juduls[$i];
}
foreach ($juduls as $key) {
    echo "<br>";
    echo $key;
}

//echo $judul2;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $juduls[0]?></h1>
    <h1><?= $juduls[1]?></h1>
    <h1><?= $juduls[2]?></h1>

    <?php 
    for ($i=0; $i < 3 ; $i++) { 
        echo "<h1>";
        echo $juduls[$i];
        echo "</h1>";
    }
    ?>
    <h1>menampilkan PHP</h1>
    <?php 
    for ($i=0; $i <3 ; $i++) { 
        ?>
        <h1><?= $juduls[$i]?></h1>
        <?php
    }
    ?>

    <?php 
        foreach ($juduls as $key) {
            echo "<h2>";
            echo $key;
            echo "<hr>";
            echo "</h2>";
            echo "<hr>";
        }
    ?>

    <?php 
        foreach ($juduls as $key) {
            ?>
            <h2><?= $key?></h2>
            <?php
        }

    
    
    ?>
    <hr>
    <?php 
        for ($i=1; $i < 10 ; $i++) { 
            echo "<h$i>";
            echo "SMKN 2 BUDURAN ";
            echo "<h$i>";
        }
    ?>

    <?php 
        for ($i=10; $i > 1; $i--) { 
            echo "<h$i>"." SMKN 2 BUDURAN "."</h$i>";
        }
    
    ?>
</body>
</html>
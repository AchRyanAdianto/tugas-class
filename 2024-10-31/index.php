<?php

    $identitas = ["nama"=>"Ach Ryan Adianto",
                "alamat"=>"Sidoarjo",
                "telpon"=>"085730556105",
                "email"=>"ryanadianto27@gmail.com",
                "fb"=>"ryanadianto",
                "ig"=>"arynnd1_",
                "tiktok"=>"1_yaan"];

    $sekolah = ["tk"=>"RA AL ihsan",
                "mi"=>"AL ihsan",
                "smp"=>"smpn 1 gedangan",
                "smk"=>"smkn 2 buduran",
                "S1"=>"ITS",
                "S2"=>"UNESA"];

    $hobi = ["balapan","futsal","modification","tawuran","ngeLC"];

    $skill = ["c++"=>"expert",
            "html"=>"newbie",
            "css"=>"intermediate",
            "php"=>"newbie"];

    $deskripsi = "saya adalah seorang programmer pemula giat bekerja <br>
                dan rajin belajar agar saya kaya raya dan masuk surga,<br>
                saya suka nongkrong malem dan pulang pagi dan paginya kopag,<br>
                siangnya tidur dan sorenya nyore saat menjelang malam,<br>
                saya mengaji saat malam nongkrong lagi pulang pagi,<br>
                saya kalo gabut nyuci motor dan bongkar pasang motor,<br>
                sambil dengerin lagu full album";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar riwayat hidup</title>
    <style>.container {width: 800px; margin-left: 300px;}</style>
</head>
<body>
    <div class="container">
        <h1>DAFTAR RIWAYAT HIDUP</h1>
        <h2>Data Diri</h2>
        <table border= 1px>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($identitas as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
        <table border= 2px>
            <thead>
                <tr>
                    <th>Pendidikan</th>
                    <th>Nama Sekolah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sekolah as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Skill Level</h2>
        <table border= 2px>
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Level</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($skill as $key => $value) {
                    ?>
                    <tr>
                        <td><?= $key?></td>
                        <td><?= $value?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h2>Hobi</h2>
        <ul>
            <?php
            foreach ($hobi as $key) {
                ?>
                <li><?= $key?></li>
                <?php
            }
            ?>
        </ul>
        <hr>
        <h2>Tentang Aku</h2>
        <p><?= $deskripsi?></p>
    </div>
    
</body>
</html>


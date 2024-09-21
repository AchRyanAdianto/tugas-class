<?php
require_once"content.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><= $sekolah ?></title>
</head>
<body>
    <h1><?= $judul; ?></h1>
    <p><?= $isi; ?></p>
    <hr>
    <h1>jadwal pelajaran rpl tahun 2024</h1>
    <table border= "3">
        <thead>
            <tr>
                <th><?= $hari[0]; ?></th>
                <th><?= $hari[1]; ?></th>
                <th><?= $hari[2]; ?></th>
                <th><?= $hari[3]; ?></th>
                <th><?= $hari[4]; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $mapel[0]; ?></td>
                <td><?= $mapel[0]; ?></td>
                <td><?= $mapel[1]; ?></td>
                <td><?= $mapel[1]; ?></td>
                <td><?= $mapel[1]; ?></td>
            </tr>
            <tr>
                <td><?= $mapel[1]; ?></td>
                <td><?= $mapel[4]; ?></td>
                <td><?= $mapel[5]; ?></td>
                <td><?= $mapel[5]; ?></td>
                <td><?= $mapel[5]; ?></td>
            </tr>
            <tr>
                <td><?= $mapel[8]; ?></td>
                <td><?= $mapel[8]; ?></td>
                <td><?= $mapel[8]; ?></td>
                <td><?= $mapel[8]; ?></td>
                <td><?= $mapel[8]; ?></td>
            </tr>
        </tbody>
    </table>

    <hr>
    <img src="images/<?= $gambar[2]; ?>" alt="" width= "200">
</body>
</html>
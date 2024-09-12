<form action="" method="post">
    <input type="number" name="bulan" placeholder="masukkan bulan">
    <input type="number" name="tanggal" placeholder="masukan tanggal">
    <input type="submit" value="kirim" name="tombol">
</form>

<?php
if (isset($_POST["tombol"])) {
    $bulan = $_POST["bulan"];
    $tanggal = $_POST["tanggal"];

    // echo $bulan;
    // echo $tanggal;

    $keterangan = "salah";

    if ($bulan > 0 && $bulan < 13 && $tanggal > 0 && $tanggal < 32) {
        // $keterangan = "benar";
        if ($bulan == 1) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Capricorn";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Aquarius";
            }
        }
        if ($bulan == 2) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Aquarius";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Pisces";
            }
        }
        if ($bulan == 3) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Pisces";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Aries";
            }
        }
        if ($bulan == 4) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Aries";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Taurus";
            }
        }
        if ($bulan == 5) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Taurus";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Gemini";
            }
        }
        if ($bulan == 6) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Gemini";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Cancer";
            }
        }
        if ($bulan == 7) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Cancer";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Leo";
            }
        }
        if ($bulan == 8) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Leo";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Virgo";
            }
        }
        if ($bulan == 9) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Virgo";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Libra";
            }
        }
        if ($bulan == 10) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Libra";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Scorpio";
            }
        }
        if ($bulan == 11) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "scorpio";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Sagitarius";
            }
        }
        if ($bulan == 12) {
            if ($tanggal > 0 && $tanggal < 20){
                $keterangan = "Sagitarius";
            }
            if ($tanggal > 19 && $tanggal < 32){
                $keterangan = "Capricorn";
            }
        }
    }
    echo $keterangan;
}
?>
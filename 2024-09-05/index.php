<?php 
     
    for ($i=1; $i < 10; $i++) {
        echo $i; 
        # code...
    }

    echo "<br>";
    for ($i=10; $i > -1 ; $i--) { 
        echo $i;
        # code...
    }

    echo "<br>";
    $ganjil =123456789%2;
    echo $ganjil;

    echo "<br>";
    for ($i=1; $i < 100 ; $i++) { 
        $ganjil = $i % 2;
       // echo $ganjil;
        if ($ganjil ==0) {
            echo $i;
        }
        # code...
    }

    echo "<br>";
    $kkm = 80;
    $nilai =76;
    if ($nilai > $kkm) {
        echo "lulus";
        # code...
    }

    else {
        echo "tidak lulus";
    }
    echo "<br>";
    $status = "tidak lulus";

    if ($nilai > $kkm) {
        $status = "lulus";
        # code...
    }
    echo $status;

    echo "<br>";
    $rapor = 0;
    $tugas = 0;
    if ($tugas == 0 ) {
       $rapor = 80;
    }
    echo $rapor;
    echo "<br>";

    $bulan = 4;
    $tanggal = 15;
    $keterangan =  "salah";
    if ($bulan > 0 && $bulan <13) {
        //$keterangan = "benar";
        if ($tanggal > 9 && $tanggal < 32) {
            //$keterangan ="benar";
            if ($bulan == 1 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "capricorn";
            }
            if ($bulan == 1 && $tanggal >19 && $tanggal <31) {
                $keterangan = "aquarius";
            
           }
            if ($bulan == 2 && $tanggal > 0 && $tanggal <17) {
                $keterangan = "aquarius";
            }
            if ($bulan == 2 && $tanggal >16 && $tanggal <30) {
                $keterangan = "pisces";
            
           }
            if ($bulan == 3 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "pisces";
            }
            if ($bulan == 3 && $tanggal >19 && $tanggal <31) {
                $keterangan = "aries";
            
           }
            if ($bulan == 4 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "aries";
            }
            if ($bulan == 4 && $tanggal >19 && $tanggal <31) {
                $keterangan = "taurus";
            
           }
            if ($bulan == 5 && $tanggal > 0 && $tanggal <21) {
                $keterangan = "taurus";
            }
            if ($bulan == 5 && $tanggal >20 && $tanggal <32) {
                $keterangan = "gemini";
            
           }
            if ($bulan == 6 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "gemini";
            }
            if ($bulan == 6 && $tanggal >19 && $tanggal <31) {
                $keterangan = "cancer";
            
           }
            if ($bulan == 7 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "cancer";
            }
            if ($bulan == 7 && $tanggal >19 && $tanggal <32) {
                $keterangan = "leo";
            
           }
            if ($bulan == 8 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "leo";
            }
            if ($bulan == 8 && $tanggal >19 && $tanggal <31) {
                $keterangan = "virgo";
            
           }
            if ($bulan == 9 && $tanggal > 0 && $tanggal <21) {
                $keterangan = "virgo";
            }
            if ($bulan == 9 && $tanggal >20 && $tanggal <32) {
                $keterangan = "libra";
            
           }
            if ($bulan == 10 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "libra";
            }
            if ($bulan == 10 && $tanggal >19 && $tanggal <31) {
                $keterangan = "scorpio";
            
           }
            if ($bulan == 11 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "scorpio";
            }
            if ($bulan == 11 && $tanggal >19 && $tanggal <31) {
                $keterangan = "sagitarius";
            
           }
            if ($bulan == 12 && $tanggal > 0 && $tanggal <20) {
                $keterangan = "sagitarius";
            }
            if ($bulan == 12 && $tanggal >19 && $tanggal <31) {
                $keterangan = "capricorn";
            
           }
        }
    }
    echo $keterangan;
    

?>
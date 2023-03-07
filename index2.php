<?php 

    

    $text = $_POST['text'] ;
    $matkul = $_POST['matkul'] ;
    $uts = $_POST['uts'] ;
    $uas = $_POST['uas'] ;
    $tugas =$_POST['tugas'] ;
    $nilaiRata = ($uts + $uas + $tugas)/3 ;
    $keterangan = lulus($nilaiRata);
    $grade = grade($nilaiRata);
    



    
    echo 'Nama Mahasiswa : ' . $text ;
    echo '<br> Mata kuliah :' . $matkul;
    echo '<br> Nilai UTS :' . $uts;
    echo '<br> Nilai UAS :' . $uas;
    echo '<br> Nilai tugas :'. $tugas;
    echo '<br> Nilai Rata - Rata :' . $nilaiRata ;
    echo '<br> Keterangan :'. $keterangan ;
    echo '<br> Grade :' . $grade ;

    

function lulus($nilaiRata){
    if($nilaiRata <=55){
        return  'Tidak lulus' ;
    }

    else {
        return  'lulus' ;

    }

}


    function grade($nilaiRata){
    if($nilaiRata >=85){
        return  'A';
    }

    elseif($nilaiRata >= 70){
        return  'B';

    }

    elseif($nilaiRata >= 56 ){
        return  'C';

    }

    elseif($nilaiRata >= 36){
        return  'D';
    }

    elseif($nilaiRata >= 1){
        return 'E';
    }

    else  "I(maaf coba lagi)" ;
    

    }





?>
<?php
/* Function digunakan untuk mengerjakan sesuatu yang spesifik dan dapat dipanggil berkali kali */
    function Aritmatika($nilai1, $nilai2, $tugas)
    {
        if($tugas == "+"){
            $hasil = $nilai1 + $nilai2;
        }elseif($tugas == "-"){
            $hasil = $nilai1 - $nilai2;
        }elseif($tugas == "*"){
            $hasil = $nilai1 * $nilai2;
        }elseif($tugas == "/"){
            $hasil = $nilai1 / $nilai2;
        }
        return $hasil; /* Return digunakan untuk mengembalikan nilai */
    };   
    echo Aritmatika(7,2,"+");
    echo"<br/>";
    echo Aritmatika(5,2,"-"); //Untuk menjalankan function harus menggunakan parameter yang sesuai apa yang telah ditentukan

    echo"<br/>";
    $ininilai1 = 40;
    $ininilai2 = 2;
    $tugasnya1 = "*"; //Function juga dapat mengambil nilai dari sebuah variable yang tersedia
    $tugasnya2 = "/"; // $ininilai1 dan $ininilai2 ditentukan setelah function ditulis
                      // Function dapat dipanggil dengan memasukkan nilai variable yang telah kita deklarasikan sebelumnya
    echo Aritmatika($ininilai1,$ininilai2,$tugasnya1);
    echo Aritmatika($ininilai1,$ininilai1,$tugasnya2);
?>
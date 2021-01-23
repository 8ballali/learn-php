

<?php   
/* Empty digunakan untuk mengecek apabila Variabel tidak memiliki nilai */ 
    $buah = "Jeruk";
    $kendaraan = "";
    $makanan = "Pisang Goreng";

    echo "Hasil Variable buah :" . empty($buah);
    echo"<br/>";
    echo "Hasil Variable kendaraan :" . empty($kendaraan);
    echo "<br/>";
    echo "Hasil Variable makanan :" . !empty($makanan);
?>
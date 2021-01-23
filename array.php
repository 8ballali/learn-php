
<?php
/* Array merupakan tempat menyimpan data sementara seperti variable
namun lebig terorganisir */
/* index dimulai dari 0 */
    $nama[0] = "Citra";
    $nama[1] = "Putri";  //Cara menulis array tipe1
    $nama[2] = "Ilham";

    $jenisKelamin = array("C" => "Cewek", "L" => "Laki-Laki"); //array tipe 2
    $olahraga = array("Badminton", "Basket", "Voli", "Tenis meja"); //array tipe 3
    $makanan = array("ikan", "bakwan", "mendoan");

    echo $nama[0];
    echo "<br/>"; /* <br/> digunakan untuk melakukan break row(baris baru) */
    echo $jenisKelamin["C"];
    echo "<br/>";
    echo "Suka $olahraga[1]";
    echo $makanan[1];
?>
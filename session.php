<?php   
    session_start();

    $_SESSION['Negara'] = "Indonesia";
    $_SESSION['Ibukota'] = "Jakarta";

    echo $_SESSION['Negara'];
    echo "<br/>";
    echo$_SESSION['Ibukota'];
?>
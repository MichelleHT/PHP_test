<?php
    $nameDelete = $_REQUEST['nameDelete'];
    if (empty($nameDelete)) {
        echo "Informe o registro para continuar.</br>";
    } else {

        //Connection
        $con = mysqli_connect('localhost','michelle','michelle','teste');

        //Query
        $log = $con->query("DELETE  FROM cadastro WHERE Name = '$nameDelete'");

        header("Location: index.php");
    } 
?>

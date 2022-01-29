<?php
    // isset -> serve para saber se uma variável está definida
    include("func.php");
    if(isset($_POST['update']))
    {
        $Package_id = $_POST['Package_id'];
        $Package_name = $_POST['Package_name'];
        $Amount = $_POST['Amount'];


        
        $sqlInsert = "UPDATE package 
        SET Package_name='$Package_name',Amount='$Amount'
        WHERE Package_id=$Package_id";
        $result = $con->query($sqlInsert);
        print_r($result);
    }
    header('Location: package.php');

?>
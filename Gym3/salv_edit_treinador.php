<?php
    // isset -> serve para saber se uma variável está definida
    include("func.php");
    if(isset($_POST['update']))
    {
        $Trainer_id = $_POST['Trainer_id'];
        $Name = $_POST['Name'];
        $phone = $_POST['phone'];

        
        $sqlInsert = "UPDATE trainer 
        SET Name='$Name',phone='$phone'
        WHERE Trainer_id=$Trainer_id";
        $result = $con->query($sqlInsert);
        print_r($result);
    }
    header('Location: trainers_details.php');

?>
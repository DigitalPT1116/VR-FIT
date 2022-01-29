<?php

    if(!empty($_GET['Trainer_id']))
    {
        include_once('func.php');

        $Trainer_id = $_GET['Trainer_id'];

        $sqlSelect = "SELECT *  FROM Trainer WHERE Trainer_id=$Trainer_id";

        $result = $con->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM Trainer WHERE Trainer_id=$Trainer_id";
            $resultDelete = $con->query($sqlDelete);
        }
    }
    header('Location: trainers_details.php');
   
?>
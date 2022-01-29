<?php

    if(!empty($_GET['Payment_id']))
    {
        include_once('func.php');

        $Payment_id = $_GET['Payment_id'];

        $sqlSelect = "SELECT *  FROM payment WHERE Payment_id=$Payment_id";

        $result = $con->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM payment WHERE Payment_id=$Payment_id";
            $resultDelete = $con->query($sqlDelete);
        }
    }
    header('Location: payment.php');
   
?>
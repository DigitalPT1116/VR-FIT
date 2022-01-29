<?php

    if(!empty($_GET['Package_id']))
    {
        include_once('func.php');

        $Package_id = $_GET['Package_id'];

        $sqlSelect = "SELECT *  FROM package WHERE Package_id=$Package_id";

        $result = $con->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM package WHERE Package_id=$Package_id";
            $resultDelete = $con->query($sqlDelete);
        }
    }
    header('Location: package.php');
   
?>
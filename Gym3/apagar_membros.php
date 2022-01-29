<?php

    if(!empty($_GET['contact']))
    {
        include_once('func.php');

        $contact = $_GET['contact'];

        $sqlSelect = "SELECT *  FROM doctorapp WHERE contact=$contact";

        $result = $con->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM doctorapp WHERE contact=$contact";
            $resultDelete = $con->query($sqlDelete);
        }
    }
    header('Location: member_details.php');
   
?>
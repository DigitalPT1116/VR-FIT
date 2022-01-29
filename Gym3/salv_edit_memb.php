<?php
    // isset -> serve para saber se uma variável está definida
    include("func.php");
    if(isset($_POST['update']))
    {
        $contact = $_POST['contact'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $docapp = $_POST['docapp'];

        
        $sqlInsert = "UPDATE doctorapp 
        SET fname='$fname',lname='$lname',email='$email',docapp='$docapp'
        WHERE contact=$contact";
        $result = $con->query($sqlInsert);
        print_r($result);
    }
    header('Location: member_details.php');

?>
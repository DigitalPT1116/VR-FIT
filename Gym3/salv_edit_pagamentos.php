<?php
    // isset -> serve para saber se uma variável está definida
    include("func.php");
    if(isset($_POST['update']))
    {
        $Payment_id = $_POST['Payment_id'];
        $payment_type = $_POST['payment_type'];
        $Amount = $_POST['Amount'];
        $customer_id = $_POST['customer_id'];
        $customer_name = $_POST['customer_name'];

        
        $sqlInsert = "UPDATE payment 
        SET payment_type='$payment_type',Amount='$Amount',customer_id='$customer_id',customer_name='$customer_name'
        WHERE Payment_id=$Payment_id";
        $result = $con->query($sqlInsert);
        print_r($result);
    }
    header('Location: payment.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apagar dados</title>
</head>
<?php
require('admin-panel.php');
$contact=$_REQUEST['contact'];
$query = "DELETE FROM doctorapp WHERE contact=$contact"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: members_details.php"); 
?>
<body>
</body>
</html>
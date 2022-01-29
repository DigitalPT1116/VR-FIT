<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `doctorapp`";

// for method 1

$result1 = mysqli_query($connect, $query);

if(!empty($_GET['contact']))
{
    $contact = $_GET['contact'];
    $sqlSelect = "SELECT * FROM doctorapp WHERE contact=$contact";
    $result = $connect->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $fname = $user_data['fname'];
            $lname = $user_data['lname'];
            $email = $user_data['email'];
            $docapp = $user_data['docapp'];
        }
    }
    else
    {
        header('Location: member_details.php');
    }
}
else
{
    header('Location: member_details.php');
}


?>
<html>
  <head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="icon" href="fit.png">
    <title>VR FIT</title>
  </head>
  <body>
      
   
       
 <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="" class="list-group-item active">Registro de Membros</a>
                <a href="member_details.php" class="list-group-item">Informações Membros</a>
                <a href="package.php" class="list-group-item">Informações dos Pacotes</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="trainers_details.php" class="list-group-item active">Informações Treinadores</a>             
              <a href="novo_treinador.php" class="list-group-item active">Adicionar Treinadores</a>
            </div>
            <hr>
            <div class="list-group">
              <a href="payment.php" class="list-group-item">Pagamentos</a>      
              <a href="#" class="list-group-item">Staff</a>        
            </div>            
            
        </div>
        <div class="col-md-8">
            <div class="card">
                
     <div class="card-body" style="background-color:#007bff;color:#fff;">
                <h3>Edição do membro</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="salv_edit_memb.php" method="post">
                <label>Primeiro nome:</label>
<input type="text" name="fname" class="form-control"value=<?php echo $fname;?> required><br>
                    <label>Último Nome:</label>
<input type="text" name="lname" class="form-control"value=<?php echo $lname;?> required><br> 
 <label>Email</label>
                    <input type="text" name="email" class="form-control"value=<?php echo $email;?> required><br>
                  <label>ID membro</label>
<input name="contact" type="text" class="form-control" readonly value=<?php echo $contact;?> required><br>        
 <label>Treinador </label> 
 <select class="form-control" name="docapp"value=<?php echo $docapp;?> required>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>
        <br>
        <input type="hidden" name="contact" value=<?php echo $contact;?>>
  <input type="submit" class="btn btn-primary" name="update" value="Modificar">                  
                    
                    
                </form>
                </div>
      </div>
       </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
	      
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#007bff;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
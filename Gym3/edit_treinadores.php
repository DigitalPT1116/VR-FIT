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
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);

if(!empty($_GET['Trainer_id']))
{
    $Trainer_id = $_GET['Trainer_id'];
    $sqlSelect = "SELECT * FROM Trainer WHERE Trainer_id=$Trainer_id";
    $result = $connect->query($sqlSelect);
    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $Trainer_id = $user_data['Trainer_id'];
            $Name = $user_data['Name'];
            $phone = $user_data['phone'];
        }
    }
    else
    {
        header('Location: trainers_details.php');
    }
}
else
{
    header('Location: trainers_details.php');
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
                <h3>Edição do treinador</h3>
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="salv_edit_treinador.php" method="post">
                <label>ID do treinador:</label>
<input type="text" name="Trainer_id" class="form-control" readonly value=<?php echo $Trainer_id;?> required><br>
                    <label>Nome:</label>
<input type="text" name="Name" class="form-control"value=<?php echo $Name;?> required><br> 
 <label>Telefone</label>
                    <input type="text" name="phone" class="form-control"value=<?php echo $phone;?> required><br>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>


            <?php endwhile;?>

        </select>
        <br>
        <input type="hidden" name="Trainer_id" value=<?php echo $Trainer_id;?>>
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
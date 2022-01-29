<!DOCTYPE html>
<?php include("func.php");
$pesquisa= $_GET["pesquisa"];

$procura="SELECT * FROM trainer where Name like '%".$pesquisa."%'";
$faz_procura=mysqli_query($con,$procura); 
$num_registos=mysqli_num_rows($faz_procura);
?>
<html>
    <?php
        $sql = "SELECT * FROM trainer ORDER BY Trainer_id ASC";
        $result = $con->query($sql);
    ?>
<head>
<meta http-equiv="refresh" content="30">
<link rel="icon" href="fit.png">
    <title>VR FIT</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color: #007bff; color: #ffffff;">
         <div class="row">
        
             <div class="col-md-1">
    <a href="trainers_details.php" class="btn btn-light ">Voltar</a>
             </div>
             <div class="col-md-4"><h3>Resultado</h3></div>
             <div class="col-md-8">
                 
</div></div></div>
     <div class="card-body" style="background-color: #007bff; color: #ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Nome</th>
         <th>Contacto</th>
        </tr>   
        </thead>
        <tbody>
        <?php

        if($num_registos==0){
            echo"Não existem registos com esse Nome.";
            echo"<a href='precario.php'> Voltar </a>";
            exit;
        }

        for($i=0;$i<$num_registos;$i++)
                    while($registos = mysqli_fetch_assoc($faz_procura)) {
                        echo "<tr>";
                        echo "<td>".$registos['Name']."</td>";
                        echo "<td>".$registos['phone']." €</td>";
                        echo "</tr>";
                    }
                    ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
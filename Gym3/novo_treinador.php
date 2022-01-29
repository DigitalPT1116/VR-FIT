<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
<link rel="icon" href="fit.png">
    <title>VR FIT</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color: #007bff; color: #fff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Voltar</a>
             </div>
             <div class="col-md-4"><h3>Registar novo Treinador</h3></div>
             <div class="col-md-8">
<div class="card-body" style="background-color: #007bff; color: #fff;">
                </div> 
                <div class="card-body"></div>
                <form class="form-group" action="func.php" method="post">
                <label>ID Treinador</label>
<input name="Trainer_id" type="text" class="form-control" readonly><br>
 <label>Nome Completo</label>
                    <input type="text" name="Name" class="form-control"><br>
                    <label>Contacto</label>
<input type="text" name="phone" class="form-control"><br> 
<input type="submit" class="btn btn-primary" name="tra_submit" value="Registar" style="background-color: #007bff; border-color: #fff;">
     </div>
    </div>
    </div>
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    </body>
</html>
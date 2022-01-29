<!DOCTYPE html>
<?php include("func.php");?>
<html>
    <?php
        $sql = "SELECT * FROM package ORDER BY Package_id ASC";
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
<form method="GET" action="result_prec.php">
 <div class="container">
<div class="card">
     <div class="card-body" style="background-color: #ed563b; color: #ffffff;">
         <div class="row">
        
             <div class="col-md-1">
    <a href="inicio.php" class="btn btn-light ">Voltar</a>
             </div>
             <div class="col-md-4"><h3>Preçário</h3></div>

             <div class="col-md-4"><input type="text" name="pesquisa" class="form-control" placeholder="Inserir produto"></div>
         <div class="col-md-2"><input type="submit" name="sumit" class="btn btn-light" value="Procurar"> </div>
         
             <div class="col-md-8">
                 
</div></div></div>
</form>
     <div class="card-body" style="background-color: #ed563b; color: #ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Produto</th>
         <th>Preço</th>
        </tr>   
        </thead>
        <tbody>
        <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['Package_name']."</td>";
                        echo "<td>".$user_data['Amount']." €</td>";
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
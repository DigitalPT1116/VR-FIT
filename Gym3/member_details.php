<!DOCTYPE html>
<?php include("func.php");?>
<html>
    <?php
        $sql = "SELECT * FROM doctorapp ORDER BY contact ASC";
        $result = $con->query($sql);
    ?>
<head>
<link rel="icon" href="fit.png">
    <title>VR FIT</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	
<form method="GET" action="result_mem.php">
 <div class="container">
<div class="card">
     <div class="card-body" style="background-color: #007bff; color: #ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Voltar</a>
             </div>
             <div class="col-md-5"><h3>Informações dos Membros</h3></div>
             
             <div class="col-md-4"><input type="text" name="pesquisa" class="form-control" placeholder="Inserir produto"></div>
         <div class="col-md-2"><input type="submit" name="sumit" class="btn btn-light" value="Procurar"> </div>
             <div class="col-md-8">
                
                 </form></div></div></div>
     <div class="card-body" style="background-color: #007bff; color: #ffffff;">
         <div class="card-body">
    <table class="table table-hover">
        <thead>
     <tr>
            <th>Primeiro Nome</th>
            <th>Último Nome</th>
         <th>Email</th>
         <th>ID Membro</th>
         <th>ID Treinador</th>
         <th scope="col">Editar | Eliminar</th>
        </tr>   
        </thead>
        <tbody>
        <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['fname']."</td>";
                        echo "<td>".$user_data['lname']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>".$user_data['contact']."</td>";
                        echo "<td>".$user_data['docapp']."</td>";
                        echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit_membros.php?contact=$user_data[contact]' title='Editar'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='apagar_membros.php?contact=$user_data[contact]' title='Apagar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>
                            </td>";
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
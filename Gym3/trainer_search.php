<html>

<head>
</head>

<body>

<?php
require("func.php");
//liga a base dados
$pesquisa= $_GET["pesquisa"];

$procura="SELECT * FROM package where Package_name like '%".$pesquisa."%'";
$faz_procura=mysqli_query($con,$procura); 
$num_registos=mysqli_num_rows($faz_procura);

if($num_registos==0){
    echo"Não existem registos com esse Nome.";
    echo"<a href='precario.php'> Voltar </a>";
    exit;
}
echo"<table border='1'>
<tr>
    <th>Nome:</th>
    <th>Email:</th>

</tr>";

for($i=0;$i<$num_registos;$i++)
{
    $registos=mysqli_fetch_array($faz_procura);
    echo"<tr>";
    echo"<td>" . $registos['Package_name'] . "</td>";
    echo"<td>" . $registos['Amount'] . "</td>";

    echo"</tr>";
}
echo"</table>";
?>
</body>


</html>

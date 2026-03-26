<?php
 
 //r_dump($_POST);

include("conexao.php");

$cod=$_POST["Codigo"];



$sql="DELETE FROM despesa WHERE  Codigo=$cod";
if(mysqli_query($mysqli,$sql)){
    echo "Despesa excluida com sucesso";
}
else{
    echo "Erro";
}
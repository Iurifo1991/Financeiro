<?php
 
 //r_dump($_POST);

include("conexao.php");

$cod=$_POST["Codigo"];
$nome=$_POST["Descrição"];
$valor=$_POST["valor"];
$vencimento=$_POST["vencimento"];



$sql= "UPDATE despesas SET Descriçao = '$nome', Valor = '$valor', Vencimento='$vencimento' WHERE Codigo = '$cod'";
if(mysqli_query($mysqli,$sql)){
    echo "Despesa alterada com sucesso";
}
else{
    echo "Erro";
}
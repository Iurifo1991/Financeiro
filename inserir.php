<?php
 
 //r_dump($_POST);

include("conexao.php");


$nome=$_POST["Descrição"];
$valor=$_POST["valor"];
$vencimento=$_POST["vencimento"];
$soma=0;


$sql="INSERT INTO despesa (Descrição, valor, vencimento ) VALUES ('$nome', '$valor','$vencimento')";
if(mysqli_query($mysqli,$sql)){
    echo "Despesa incluida com sucesso";
}
else{
    echo "Erro";
}
$sql1="SELECT * FROM despesa";
$result=$mysqli->query($sql1);
?>
<div>
  <table class="table">
     <thead>
      <tr>
        <th scope='col'>Código</th>
         <th scope='col'>Nome</th>
         <th scope='col'>Valor</th>
         <th scope='col'>Vencimento</th>
      </tr>
     </thead>
    <tbody>
        <?php
          while($user_data=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$user_data['Codigo']."</td>";
            echo "<td>".$user_data['Descrição']."</td>";
            echo "<td>".$user_data['Valor']."</td>";
            echo "<td>".$user_data['Vencimento']."</td>";
            echo "</tr>";
            $soma= $soma+ $user_data['Valor'];
          }
          echo "<tr>";
          echo "<td>"."Valor total das despesas= ".$soma."</td>";
          echo"</tr>";
        ?>
     
        
     
    </tbody>
    </table>
</div>
mysqli_close($mysqli);



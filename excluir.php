
 <html lang="pt-br">
   <head>
     <title>Exclusão de Despesa</title>
       <meta charset="utf8" />
       <style type="text/css">
            body{background-color:gray}
            label{color:whitesmoke;
                font-weight:bold;}
            label2{color:whitesmoke;
                font-weight:bold;
              font-size: 30px;
              text-align: center;
            }
            
            .bt{
                background-color:black;
                color:whitesmoke;
                width:75px;
                height:25px;
                font-weight:bold;
                border:0px;
                cursor:pointer;
            }
            input:hover{border:2px solid #0000ff }
            div{

              display: inline-block;
              align-items: center;
              justify-content: center;
            }
            div2{
              display: inline-block;
              align-items: baseline;
              justify-content: baseline;
            }
            </style>
       </head>
      </div>

  <main>
     <tr>,<label2>Digite o código da despesa a ser excluida.</label2></tr>
     <form id="" method="post" action="excluir2.php">
         <label for="codigo">Código:</label>
         <input id="Codigo" name="Codigo" type="int" placeholder="Digite o código" required/>
         <button type="submit" class="bt">Enviar</button> 
     </form>
<?php
include("conexao.php");
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
        
          }
        
        ?>
     
        
     
    </tbody>
    </table>
</div>
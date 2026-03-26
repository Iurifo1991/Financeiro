
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

   <head>
     <title>Despesa</title>
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
  <main>
     <tr>.<label2>Digite os novos valores.</label2></tr>
     <form id="" method="post" action="atualizar2.php">
          <label for="Codigo">Codigo:</label>
         <input id="Codigo" name="Codigo" type="int" placeholder="Codigo da despesa a ser alterada" required/>
         <label for="descricao">Descrição:</label>
         <input id="Descriçao" name="Descrição" type="text" placeholder="Digite a despesa" required/>
         <label for="valor">Valor:</label>
         <input id="valor" name="valor" type="double" placeholder="Digite o valor" required/>
         <label for="vencimento">Vencimento:</label>
         <input id="vencimento" name="vencimento" type="data" placeholder="Digite o vencimento" required/>
         <button type="submit" class="bt">Enviar</button> 
     </form>
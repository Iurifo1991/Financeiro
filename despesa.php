<html lang="pt-br">
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
     <tr>,<label2>Inclua abaixo uma despesa.</label2></tr>
     <form id="" method="post" action="inserir.php">
         <label for="descricao">Descrição:</label>
         <input id="Descriçao" name="Descrição" type="text" placeholder="Digite a despesa" required/>
         <label for="valor">Valor:</label>
         <input id="valor" name="valor" type="double" placeholder="Digite o valor" required/>
         <label for="vencimento">Vencimento:</label>
         <input id="vencimento" name="vencimento" type="data" placeholder="Digite o vencimento" required/>
         <button type="submit" class="bt">Enviar</button> 
     </form>
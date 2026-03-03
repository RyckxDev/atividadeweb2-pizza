<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PizzaTEch</title>
  <link rel="stylesheet" href="style.css">
</head>

  <body>
  <div class="container">
  <form action="#" method="POST">
    <h1>PizzaTech</h1>
    <h2>Novo Pedido</h2>


    <label><b>Seu Nome:</b></label>
    <br>
    <input type="text" name="nome" placeholder="Ex:Joao">
    <br><br>

    <label><b>Escolha o sabor da pizza:</b></label>
    <br>
    <select name="saborpizza">
      <option value="Mussarela">Mussarela - R$ 50,00</option>
      <option value="Calabresa">Calabresa - R$ 52,00</option>
      <option value="Portuguesa">Portuguesa - R$ 60,00</option>
    </select>
    <br><br>

    <div class="grupo-radio">
      <label><b>Borda Recheada:</b></label>
      <div class="opcao-radio">
        <input type="radio" name="bordaR" value="Não"> Não
      </div>
      <div class="opcao-radio">
        <input type="radio" name="bordaR" value="Sim"> Sim (+ R$ 5,00)
      </div>
    </div>

    <div class="grupo-checkbox">
      <label><b>Bebidas (você pode escolher mais de uma):</b></label>
      <div class="opcao-checkbox">
        <input type="checkbox" name="bebida[]" value="Refrigerante Lata"> Refrigerante Lata - R$ 8,00
      </div>
      <div class="opcao-checkbox">
        <input type="checkbox" name="bebida[]" value="Suco"> Suco 500ml - R$ 12,00
      </div>
      <div class="opcao-checkbox">
        <input type="checkbox" name="bebida[]" value="Agua"> Água 500ml - R$ 5,00
      </div>
    </div>

    <input type="submit" value="Finalizar Pedido">
  </form>

  <div class="resumo">
    <h3>Resumo do Pedido</h3>
    <p><b>Nome:</b> Ana</p>
    <p><b>Sabor da pizza:</b> Calabresa (R$ 52,00)</p>
    <p><b>Borda recheada:</b> Sim (R$ 5,00)</p>
    <p><b>Bebidas:</b> Refrigerante (R$ 8,00), Água (R$ 5,00)</p>
    <p class="total"><b>Total a pagar:</b> R$ 70,00</p>
  </div>
  </div>
  <div>
  </div>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

  $nm = $_POST['nome'];
  echo "<br>Aluno: " . $nm;

  $saborp = $_POST['saborpizza'];
  echo "<br>Sabor da Pizza: " . $saborp;

  $bordaR = $_POST['bordaR'];
  echo "<br>Borda Recheada: " . $bordaR;

  $bebida = $_POST['bebida'];
  echo "<br>Bebidas Selecionadas: ";

  foreach ($bebida as $b) {
    echo $b . " ";
  }
}

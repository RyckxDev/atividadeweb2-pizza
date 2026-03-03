<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PizzaTEch</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
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
        <input type="checkbox" name="bebida[]" value="refrigeranteLata"> Refrigerante Lata - R$ 8,00
      </div>
      <div class="opcao-checkbox">
        <input type="checkbox" name="bebida[]" value="suco"> Suco 500ml - R$ 12,00
      </div>
      <div class="opcao-checkbox">
        <input type="checkbox" name="bebida[]" value="agua"> Água 500ml - R$ 5,00
      </div>
    </div>

    <input type="submit" value="Finalizar Pedido">
  </form>
  <div>
  </div>
</body>

</html>

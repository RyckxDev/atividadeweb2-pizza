<?php
$nm = "";
$saborp = "";
$bordaR = "";
$bebida = [];
$vlsaborpizza = 0;
$vltotalapagar = 0;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $nm = $_POST['nome'];
  $saborp = $_POST['saborpizza'];
  $bordaR = $_POST['bordaR'];
  $bebida = $_POST['bebida'] ?? [];

  if ($saborp == "Mussarela") {
    $vlsaborpizza = 50;
  } elseif ($saborp == "Calabresa") {
    $vlsaborpizza = 52;
  } elseif ($saborp == "Portuguesa") {
    $vlsaborpizza = 60;
  }

  $vltotalapagar = $vlsaborpizza;

  if ($bordaR == "Sim") {
    $vltotalapagar += 5;
  }

  foreach ($bebida as $b) {
    if ($b == "Refrigerante Lata") {
      $vltotalapagar += 8;
    } elseif ($b == "Suco") {
      $vltotalapagar += 12;
    } elseif ($b == "Agua") {
      $vltotalapagar += 5;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PizzaTech</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">

    <form action="#" method="POST">
      <h1>PizzaTech</h1>
      <h2>Novo Pedido</h2>

      <label><b>Seu Nome:</b></label>
      <br>
      <input type="text" name="nome" placeholder="Ex: João" value="<?= htmlspecialchars($nm) ?>">
      <br><br>

      <label><b>Escolha o sabor da pizza:</b></label>
      <br>
      <select name="saborpizza">
        <option value="Mussarela" <?= $saborp == "Mussarela" ? "selected" : "" ?>>Mussarela - R$ 50,00</option>
        <option value="Calabresa" <?= $saborp == "Calabresa" ? "selected" : "" ?>>Calabresa - R$ 52,00</option>
        <option value="Portuguesa" <?= $saborp == "Portuguesa" ? "selected" : "" ?>>Portuguesa - R$ 60,00</option>
      </select>
      <br><br>

      <div class="grupo-radio">
        <label><b>Borda Recheada:</b></label>
        <div class="opcao-radio">
          <input type="radio" name="bordaR" value="Não" <?= $bordaR == "Não" ? "checked" : "" ?>> Não
        </div>
        <div class="opcao-radio">
          <input type="radio" name="bordaR" value="Sim" <?= $bordaR == "Sim" ? "checked" : "" ?>> Sim (+ R$ 5,00)
        </div>
      </div>

      <div class="grupo-checkbox">
        <label><b>Bebidas (você pode escolher mais de uma):</b></label>
        <div class="opcao-checkbox">
          <input type="checkbox" name="bebida[]" value="Refrigerante Lata" <?= in_array("Refrigerante Lata", $bebida) ? "checked" : "" ?>> Refrigerante Lata - R$ 8,00
        </div>
        <div class="opcao-checkbox">
          <input type="checkbox" name="bebida[]" value="Suco" <?= in_array("Suco", $bebida) ? "checked" : "" ?>> Suco 500ml - R$ 12,00
        </div>
        <div class="opcao-checkbox">
          <input type="checkbox" name="bebida[]" value="Agua" <?= in_array("Agua", $bebida) ? "checked" : "" ?>> Água 500ml - R$ 5,00
        </div>
      </div>

      <input type="submit" value="Finalizar Pedido">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == 'POST'): ?>
    <div class="resumo">
      <div class="resumo-topo">
        <h3>Resumo do Pedido</h3>
        <p><b>Nome:</b> <?= htmlspecialchars($nm) ?></p>
        <p><b>Sabor da pizza:</b> <?= htmlspecialchars($saborp) ?> (R$ <?= $vlsaborpizza ?>,00)</p>
        <p><b>Borda recheada:</b> <?= htmlspecialchars($bordaR) ?><?= $bordaR == "Sim" ? " (R$ 5,00)" : "" ?></p>
        <p><b>Bebidas:</b> <?= !empty($bebida) ? implode(', ', array_map('htmlspecialchars', $bebida)) : "Nenhuma" ?></p>
      </div>
      <p class="total"><b>Total a pagar:</b> R$ <?= $vltotalapagar ?>,00</p>
    </div>
    <?php endif; ?>

  </div>
</body>
</html>

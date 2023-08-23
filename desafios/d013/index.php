<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
  <style>
    img.nota {
      height: 50px;
      width: auto;
      margin-bottom: 4px;
    }
  </style>
</head>
<body>
  <?php
    $valor = $_POST["valor"] ?? 0;
    $resto = $valor;

    $notas100 = intdiv($resto, 100);
    $resto = $valor % 100;

    $notas50 = intdiv($resto, 50);
    $resto = $valor % 50;

    $notas10 = intdiv($resto, 10);
    $resto = $resto % 10;

    $notas5 = intdiv($resto, 5);
  ?>
  <main>
    <h1>Caixa Eletrônico</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="valor">Qual valor você deseja sacar? (R$)*</label>
      <input type="number" name="valor" id="valor" value="<?=$valor?>" step="5">
      <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
      <input type="submit" value="Sacar">
    </form>
  </main>

  <section>
    <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
      <li><img src="imagens/100-reais.jpg" alt="note de 100" class="nota"> x<?=$notas100?></li>
      <li><img src="imagens/50-reais.jpg" alt="note de 50" class="nota"> x<?=$notas50?></li>
      <li><img src="imagens/10-reais.jpg" alt="note de 10" class="nota"> x<?=$notas10?></li>
      <li><img src="imagens/5-reais.jpg" alt="note de 5" class="nota"> x<?=$notas5?></li>
    </ul>
  </section>
</body>
</html>
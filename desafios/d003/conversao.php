<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Conversor de Moedas v1.0</h1>
    <?php
      $cotacao = 4.96;
      $valor = (float) $_GET["numero"] ?? 0;
      $valorEmDolar = $valor / $cotacao;
      echo "<p>Seus R\$".number_format($valor, 2, ",", ".")." equivalem a <strong>US\$".number_format($valorEmDolar, 2, ",", ".")."</strong></p>";
      echo "<p><strong>*Cotação fixa de R\$".number_format($cotacao, 2, ",", ".")."</strong> informada diretamente no código.";
    ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
  </main>
</body>
</html>
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
    <h1>Resultado final</h1>
    <?php 
      $numero = $_GET["numero"] ?? 0;
      $antecessor = $numero - 1;
      $sucessor = $numero + 1;
      echo "<p>O número escolhido foi <strong>$numero</strong></p>";
      echo "<p>O seu <em>antecessor</em> $antecessor</p>";
      echo "<p>O seu <em>sucessor</em> $sucessor</p>";
    ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
  </main>
</body>
</html>
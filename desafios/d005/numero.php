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
    <h1>Analisador de Número Real</h1>
    <?php 
      $numero = (float) $_GET["numero"] ?? 0;
      $parteInteira = floor($numero);
      $parteFracionaria = round($numero - $parteInteira, 3);
      echo "<p>Analisando o número <strong>$numero</strong> informado pelo usuário</p>";
      echo "<ul>";
      echo "<li>A parte inteira do número é <strong>$parteInteira</strong></li>";
      echo "<li>A parte fracionária do número é <strong>$parteFracionaria</strong></li>";
      echo "</ul>";
    ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
  </main>
</body>
</html>
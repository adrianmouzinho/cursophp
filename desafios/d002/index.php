<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section>
    <h1>Trabalhando com números aleatórios</h1>
    <p>Gerando um número aleatório entre 0 e 100...</p>
    <p>O valor gerado foi <?php echo mt_rand(0, 100) ?></p>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro valor</button>
  </section>
</body>
</html>
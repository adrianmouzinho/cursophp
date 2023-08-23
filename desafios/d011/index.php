<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $preco = $_POST["preco"] ?? 0;
    $percentualReajuste = $_POST["percentualReajuste"] ?? 0;

    $precoReajustado = $preco + $preco * ($percentualReajuste/100);
  ?>
  <main>
    <h1>Reajustador de Preços</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="preco">Preço do produto (em R$)</label>
      <input type="number" name="preco" id="preco" min="0.10" value="<?=$preco?>" step="0.01">
      <label for="percentualReajuste">Qual será o percentual de reajuste? (<strong><span id="percentual"></span>%</strong>)</label>
      <input type="range" name="percentualReajuste" id="percentualReajuste" min="0" max="100" value="<?=$percentualReajuste?>" oninput="mudaValorDoRange()">
      <input type="submit" value="Reajustar">
    </form>
  </main>

  <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$percentualReajuste?>% de aumento</strong> vai passar a custar R$<strong><?=number_format($precoReajustado, 2, ",", ".")?></strong> a partir de agora.</p>
  </section>

  <script>
    mudaValorDoRange();

    function mudaValorDoRange() {
      percentual.innerText = percentualReajuste.value;
    }
  </script>
</body>
</html>
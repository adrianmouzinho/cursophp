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
    $segundosTotais = $_POST["segundosTotais"] ?? 0;

    $semanas = intdiv($segundosTotais, 60 * 60 * 24 * 7);
    $semanasResto = $segundosTotais % (60 * 60 * 24 * 7);

    $dias = intdiv($semanasResto, 60 * 60 * 24);
    $diasResto = $semanasResto % (60 * 60 * 24);

    $horas = intdiv($diasResto, 60 * 60);
    $horasResto = $diasResto % (60 * 60);

    $minutos = intdiv($horasResto, 60);
    $segundos = $horasResto % (60);
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="segundosTotais">Qual é o total de segundos?</label>
      <input type="number" name="segundosTotais" id="segundosTotais" min="0" value="<?=$segundosTotais?>">
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?=$segundosTotais?> segundos</strong> equivalem a um total de:</p>
    <ul>
      <li><?=$semanas?> semanas</li>
      <li><?=$dias?> dias</li>
      <li><?=$horas?> horas</li>
      <li><?=$minutos?> minutos</li>
      <li><?=$segundos?> segundos</li>
    </ul>
  </section>
</body>
</html>
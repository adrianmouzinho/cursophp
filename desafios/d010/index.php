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
    $anoAtual = date("Y");
    $anoNascimento = $_POST["anoNascimento"] ?? 2000;
    $ano = $_POST["ano"] ?? $anoAtual;

    $idade = $ano - $anoNascimento;
  ?>
  <main>
    <h1>Calculando a sua idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="anoNascimento">Em que ano você nasceu?</label>
      <input type="number" name="anoNascimento" id="anoNascimento" max="<?=($anoAtual-1)?>" value="<?=$anoNascimento?>">
      <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
      <input type="number" name="ano" id="ano" value="<?=$ano?>">
      <input type="submit" value="Qual será minha idade?">
    </form>
  </main>

  <section>
    <h2>Resultado</h2>
    <p>Quem nasceu em <?=$anoNascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?>!</p>
  </section>
</body>
</html>
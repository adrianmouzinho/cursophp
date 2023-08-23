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
    $salarioMinimo = 1320;
    $salario = $_POST["salario"] ?? $salarioMinimo;

    $qtdSalariosMinimos = intdiv($salario, $salarioMinimo);
    $resto = $salario % $salarioMinimo;
  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="salario">Salário (R$):</label>
      <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
      <p>Considere o salário mínimo de R$<?=number_format($salarioMinimo, 2, ",", ".")?></p>
      <input type="submit" value="Calcular">
    </form>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <p><?="Quem recebe um salário de R\$".number_format($salario, 2, ",", ".")." ganha <strong>$qtdSalariosMinimos salários mínimos</strong> + R$".number_format($resto, 2, ",", ".")."."?></p>
  </section>
</body>
</html>
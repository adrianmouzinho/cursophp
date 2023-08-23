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
    $numero = $_POST["numero"] ?? 0;
    $raizQuadrada = $numero ** (1/2);
    $raizCubica = $numero ** (1/3);
  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <label for="numero">Número:</label>
      <input type="number" name="numero" id="numero" value="<?=$numero?>">
      <input type="submit" value="Calcular Raízes">
    </form>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <p><?="Analisando o <strong>número $numero</strong>, temos:"?></p>
    <ul>
      <li>A sua raíz quadrada é <?="<strong>".round($raizQuadrada, 3)."</strong>"?></li>
      <li>A sua raíz cúbica é <?="<strong>".round($raizCubica, 3)."</strong>"?></li>
    </ul>
  </section>
</body>
</html>
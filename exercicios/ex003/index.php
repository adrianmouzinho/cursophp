<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos em PHP</title>
</head>
<body>
  <h1>Tipos primitivos em PHP</h1>
  <?php 
    // 0x - hexadecimal
    // 0b - binario
    // 0 - octal
    // $num = 010;
    // echo "O valor da variável é $num";

    // $v = "hello";
    // var_dump($v);

    // $num = (integer) 3e2; // 3 x 10^2
    // var_dump($num);
    // echo "O valor da variável é $num";

    // $num = (float) "240";
    // var_dump($num);

    // $casado = true; // false: vazio e true; 1
    // var_dump($casado);
    // echo "O valor da variável é $casado";

    // $vet = [2, 4.5, false, "oi", 5];
    // var_dump($vet);

    class Pessoa {
      private string $nome;
    }

    $pessoa = new Pessoa();
    var_dump($pessoa);
  ?>
</body>
</html>
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
    <h1>Conversor de Moedas v2.0</h1>
      <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valor = (float) $_GET["numero"] ?? 0;
        $valorEmDolar = $valor / $cotacao;
        echo "<p>Seus R$".number_format($valor, 2, ",", ".")." equivalem a <strong>US$".number_format($valorEmDolar, 2, ",", ".")."</strong></p>";
        echo "<p><strong>*Cotação fixa de R$".number_format($cotacao, 2, ",", ".")."</strong> vinda diretamente da API do Banco Central.";
      ?>
    <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
  </main>
</body>
</html>
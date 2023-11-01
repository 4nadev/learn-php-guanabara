<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>
<main>
    <?php 
     //   var_dump($_GET);
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["sobrenome"] ?? "desconhecido";
        echo "<p>É um prazer te conhecer, <strong>$n $s</strong> ! Esse é o meu site! </p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
</main>

</body>

</html>
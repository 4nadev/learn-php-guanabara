<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP</title>
</head>

<body>
    <section class="text-center items-center justify-center mx-20">
        <h1>Exemplo de PHP</h1>
        <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é " . date("G:i:s T");
        ?>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando strings</title>
</head>

<body>
    <h1>Manipulação de strings com php</h1>
    <?php


    const ESTADO = "TO";
    echo "Moro no ESTADO" . ESTADO;

    const CANAL = "Curso em video \u{1F499}";
    echo " Eu adoro o " . CANAL;
    echo "Estamos no ano de " . date("Y");
    $nom = "Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minotauro\" $snom ";

    echo " Para aspas simples a unica que funciona é isso 
    sequencia de escape ";

    $newlinha = '\n  Nova linha';
    $tabHoriz = '\t Tabulação  Horinzontal';
    $barrainver =  '\\  Barra Invertida';
    $sinalCif =  '\$ Sinal de cifrão';
    $emoj =  '\u{} Codepoint Unicode';

    echo " $newlinha  $tabHoriz  $barrainver  $sinalCif  $emoj";

    //  $curso = "PHP";
    // $ano = date('Y');
    //  echo <<< TEST
    //     Olá, como ce ta ?
    //       Hoje é meu aniversario!
    //       EStou feliz 
    //   TEST;
    ?>
</body>

</html>
<?php 

$alunni = [
    [
        'nome' => 'Davide',
        'cognome' => 'Di Pietro',
        'voti' => [4, 4, 4]
    ],
    [
        'nome' => 'Marco',
        'cognome' => 'Faragalli',
        'voti' => [2, 4, 3]
    ],
    [
        
        'nome' => 'Mirko',
        'cognome' => 'Silvi',
        'voti' => [1, 5, 6]
    ],
    [
        'nome' => 'Dalila',
        'cognome' => 'Di eusebio',
        'voti' => [9, 8, 9]
    ]
];
$mediaVoti = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php for($i = 0; $i < count($alunni); $i++ ) { ?>

    <p>
        <?php 
            
            echo 'Alunno: ' . $alunni[$i]['nome'] . ' ' . $alunni[$i]['cognome'] ; 

        ?>
    </p>

    <p>

        <?php 
            $mediaVoti = 0;
            for($y = 0; $y < count($alunni[$i]['voti']); $y++) {

                $mediaVoti += $alunni[$i]['voti'][$y];

            }
            echo 'Media voto: ' . $mediaVoti / count($alunni[$i]['voti']);
        
        ?>

    </p>

    <?php } ?>
</body>

</html>
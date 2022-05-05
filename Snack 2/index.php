<?php 

// Controllo se ho inserito i dati
if( !empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['age']) ) {

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    $accesso = '';

    if( strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age) == 1 ){

        $accesso = 'Accesso riuscito';

    }else{

        $accesso = 'Accesso negato';

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>
    <form method="GET">
        <p>Inserire i dati: </p>
        <input type="text" name="name" placeholder="Nome">
        <input type="text" name="mail" placeholder="Email">
        <input type="text" name="age" placeholder="Età">
        <button>Invia</button>
    </form>

    <p><?php echo $accesso ?></p>
</body>

</html>
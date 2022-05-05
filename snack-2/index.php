<!-- 
## Snack 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php 

// Nome
$name = isset($_GET['name'] ) ? $_GET['name'] : '' ;
$error = 'ERROR... Enter a name with at least 3 characters';

// E-mail
$email = isset($_GET['email'] ) ? $_GET['email'] : '' ;
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$allow = '  Is a valid email address';
$denied = ' Is a valid email address';


// Età
$age = isset($_GET['age'] ) ? $_GET['age'] : '' ;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>

    <div style="width: 80%; margin: 0 auto;padding: 50px">
        
        <p style="color: red;">Inserisci il tuo nome: </p>
        <form method="GET">
            <input type="text" placeholder="Inserisci il tuo nome..." name="name">
            <button type="submit">Invia</button>
        </form>
        <?php 
            if( $name != '' ){
                if( strlen($name) > 3){
                    echo ucwords($name);
                } else {
                    echo '<p style="color: red;">' . $error . '</p>';
                }
                    
            };
        ?>

        <p style="color: red;">Inserisci la tua mail: </p>
        <form method="GET">
            <input type="text" placeholder="Inserisci la tua email..." name="email">
            <button type="submit">Invia</button>
            <?php 
                if( $email != '' ){
                    // Validazione e-mail
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<p>' . $email . '<span style="color: red;">'. $allow . '</span>' . '</p>';
                    } else {
                        echo("$email is not a valid email address");
                    }
                };
            ?>
        </form>
        

        <p style="color: red;">Inserisci la tua età: </p>
        <form method="GET">
            <input type="text" placeholder="Inserisci la tua età..." name="age">
            <button type="submit">Invia</button>
        </form>
        <?php 
            if( $age != '' ){
                echo $age;
            };
        ?>

    </div>
    
</body>
</html>
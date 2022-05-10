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
$denied = ' It is not a valid email';

$validazioneName = false;
$validazioneEmail = false;
$validazioneAge = false;


// Età
$age = isset($_GET['age'] ) ? $_GET['age'] : '' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Snack-2</title>
</head>
<body>

    <div style="width: 80%; margin: 0 auto;padding: 50px">
        
       
        <form method="GET" class="text-center">
            <p style="color: blue;">Inserisci il tuo nome: </p>
            <input type="text" placeholder="Inserisci il tuo nome..." name="name">
            <!-- <button type="submit">Invia</button> -->
            
            <?php 
                if( $name != '' ){
                    if( strlen($name) > 3){
                        echo '<p>' . ucwords($name) . '</p>';
                        $validazioneName = true;
                    } else {
                        $validazioneName = false;
                        echo '<p style="color: red;">' . $error . '</p>';
                    }
                        
                }
            ?>
        
            <p style="color: blue;">Inserisci la tua mail: </p>
            <input type="text" placeholder="Inserisci la tua email..." name="email">
            <!-- <button type="submit">Invia</button> -->
            <?php 
                if( $email != '' ){
                    // Validazione e-mail
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo '<p>' . $email . '<span style="color: red;">'. $allow . '</span>' . '</p>';
                        $validazioneEmail = true;
                    } else {
                        $validazioneEmail = false;
                        echo '<p>' . $email . '<span style="color: red;">'. $denied . '</span>' . '</p>';
                    }
                }
            ?>
    
            <p style="color: blue;">Inserisci la tua età: </p>
            <input type="number" placeholder="Inserisci la tua età..." name="age">
            
            <?php 
                if( $age != '' ){
                    if(is_numeric( $age ) || is_numeric( $age ) > 0) {
                        echo $age;
                        $validazioneAge = true;
                    } else {
                        $validazioneAge = false;
                    }
                } 

            ?>

            <div class="m-4">
                <button type="submit">Invia</button>
            </div>

            <?php
                if(  $validazioneName != false && $validazioneEmail != false && $validazioneAge != false ) {
                    echo  "<p>Accesso riuscito</p>";
                } elseif ( (($name && $email && $age) != '')  && ($validazioneName && $validazioneEmail && $validazioneAge) != true ) {
                    echo "<p>Accesso negato</p>";
                } else {
                    echo '';
                }
            ?>
        </form>

        

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

    <body>
        <!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
        che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

        <?php

            $name = $_GET['name'] ?? '';
            $age = $_GET['age'] ?? '';
            $email = $_GET['email'] ?? '';

            $name_verify = false;
            $email_verify = false;
            $age_verify = false;

            if (isset($_GET['name']) && strlen($name) > 3) {
                $name_verify = true;
            }

            if (isset($_GET['email']) && strpos($email, '.') && strpos($email, '@')) {
                $email_verify = true;
            }
            if (isset($_GET['age']) && is_numeric($age)) {

                $age_verify = true;
            }

            if ($name_verify === true && $email_verify === true && $age_verify === true) {
                echo "<h1 style='color: green; font-family: sans-serif;'> Accesso consentito! </h1>";
            } else {
                echo "<h1 style='color: red; font-family: sans-serif;'> Accesso negato! </h1>";
            }

        ?>


    </body>
    
</html>
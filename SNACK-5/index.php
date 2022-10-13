<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>

    <body>
        <!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

        <?php

            $class = [

                    [
                        'name' => 'John',
                        'surname' => 'Mlem',
                        'votes' => [10, 9, 5, 5, 6]
                    ],
                    [
                        'name' => 'Clara',
                        'surname' => 'Sbriz',
                        'votes' => [9, 8, 3, 10, 5]
                    ],

                    [
                        'name' => 'George',
                        'surname' => 'Flex',
                        'votes' => 'Testo post 3'
                    ],

                    [
                        'name' => 'Jessica',
                        'surname' => 'Plum',
                        'votes' => [10, 9, 8, 10, 5]
                    ],
                    [
                        'name' => 'Bruno',
                        'surname' => 'Jupiter',
                        'votes' => [2, 9, 8, 4, 5]
                    ],
                    [
                        'name' => 'Kelly',
                        'surname' => 'Clarkson',
                        'votes' => [10, 4, 8, 6, 5]
                    ]
                ];

                for ($i = 0; $i < count($class); $i++) {

                    $mediaVoti = 0;
                
                    for ($j = 0; $j < count($class[$i]["voti"]); $j++) {
                        $mediaVoti = $mediaVoti + $class[$i]["voti"][$j];
                    }
            
                    echo "<strong style='font-family: sans-serif;'>" . $class[$i]["name"] . " " . "</strong>";
                    echo "<strong style='font-family: sans-serif;'>" . $class[$i]["surname"] . "</strong><br>";    
                    echo $mediaVoti / (count($class[$i]["voti"])) . "<br>";
                
                }
                
        ?>
    </body>
    
</html>
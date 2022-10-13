<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

    <body>
        <!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
        Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
        Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60 -->

        <?php 
        
        $matches = [

            // MATCH 1
            [
                "hostTeamName" => 'Team Green',
                "guestTeamName" => 'Team Red',
                "hostTeamScore" => 65,
                "guestTeamScore" => 40
            ],
            // MATCH 2
            [
                "hostTeamName" => 'Team Orange',
                "guestTeamName" => 'Team Yellow',
                "hostTeamScore" => 20,
                "guestTeamScore" => 35
            ],
            // MATCH 3 
            [
                "hostTeamName" => 'Team Black',
                "guestTeamName" => 'Team Pink',
                "hostTeamScore" => 5,
                "guestTeamScore" => 60
            ],
            
        ];
        
        ?>

        <?php foreach ($matches as $key => $value) : ?>

        <h2> <?php echo $value['hostTeamName'] ?> - <?php echo $value['guestTeamName'] ?> | <?php echo $value['hostTeamScore'] ?> - <?php echo $value['guestTeamScore'] ?> </h2>

        <?php endforeach ?>

    </body>

</html>
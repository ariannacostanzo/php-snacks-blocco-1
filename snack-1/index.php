<?php 
$games = [
   [
    'home_team' => ['name' => 'Thunder Hawks', 'points' => rand(1,100)],
    'transfer_team' => ['name' => 'Inferno Flames', 'points' => rand(1,100)],
   ],
   [
    'home_team' => ['name' => 'Sky Raptors', 'points' => rand(1,100)],
    'transfer_team' => ['name' => 'Nebula Swish', 'points' => rand(1,100)],
   ],
   [
    'home_team' => ['name' => 'Blaze Tigers', 'points' => rand(1,100)],
    'transfer_team' => ['name' => 'Galactic Hoops', 'points' => rand(1,100)],
   ],
   [
    'home_team' => ['name' => 'Solar Storm', 'points' => rand(1,100)],
    'transfer_team' => ['name' => 'Mirage Ballers', 'points' => rand(1,100)],
   ],
   [
    'home_team' => ['name' => 'Gravity Dunkers', 'points' => rand(1,100)],
    'transfer_team' => ['name' => 'Avalanche Dunk', 'points' => rand(1,100)],
   ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
</head>
<body>
    <h3>Il risultato delle partite di questo mese:</h3>
    <ul>

    <?php foreach ($games as $game) : ?>
        <li><?= $game['home_team']['name'] ?> - <?= $game['transfer_team']['name']?> | <?= $game['home_team']['points'] ?>- <?= $game['transfer_team']['points'] ?></li>
    <?php endforeach; ?>
    </ul>
            
</body>
</html>
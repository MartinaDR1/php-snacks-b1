<?php

 $basketTeams = [
    [
      "home" => "Olimpia",
      "away" => "Milano",
      "homeScore" => 55,
      "awayScore" => 60,
    ],
    [
        "home" => "Roma",
        "away" => "Milano",
        "homeScore" => 60,
        "awayScore" => 55,
    ],
    [
        "home" => "Olimpia",
        "away" => "Napoli",
        "homeScore" => 55,
        "awayScore" => 60,
      ]
  ]
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
<?php foreach($basketTeams as $team) : ?>
      <p><?= $team["home"] . " - " . $team["away"] . " | " . $team["homeScore"] . " - " . $team["awayScore"]?></p>
    <?php endforeach; ?> 
</body>
</html>
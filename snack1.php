<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. -->
<?php
$basket = [
    [
        "squadraCasa" => "Lakers",
        "puntiCasa"  => rand(1, 60),
        "squadraOspite" => "Brooklyn Nets",
        "puntiOspite"  => rand(1, 60),
    ],
    [
        "squadraCasa" => "Knicks",
        "puntiCasa"  => rand(1, 60),
        "squadraOspite" => "Boston Celtics",
        "puntiOspite"  => rand(1, 60),
    ],
    [
        "squadraCasa" => "Dallas Mavericks",
        "puntiCasa"  => rand(1, 60),
        "squadraOspite" => "Utah Jazz",
        "puntiOspite"  => rand(1, 60),
    ]
];

for ($i = 0; $i < count($basket); $i++) {
    $squadraCorrente = $basket[$i];
    $fullMatch = $squadraCorrente["squadraCasa"] . " - " . $squadraCorrente["squadraOspite"] . " | " . $squadraCorrente["puntiCasa"] . "-" . $squadraCorrente["puntiOspite"];
    echo $fullMatch . " // ";
}

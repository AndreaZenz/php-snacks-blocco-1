<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


//tramite questo ciclo prendiamo per ogni array innestato (quindi le date) i suoi array e stampiamo title author e text

for ($i = 0; $i < count($posts); $i++) {
    
    
    

}




?>


<!-- esempio in classe di florian -->

<?php

$array_md[] = [
    "name" => "Iolanda",
    "surname" => "Rossi",
    "email" => "iolanda.rossi@gmail.com",
    "dati_extra" => [
        "indirizzo" => "aasdasd",
        "città" => "Roma"
    ]
];


for ($i = 0; $i < count($array_md); $i++) {
    $currentItem = $array_md[$i];
    $fullName = $currentItem["name"] . " " . $currentItem["surname"];
    echo $fullName ;
    echo $currentItem["email"];
}

$dati_extra = $currentItem["dati_extra"];

$dati_extra_keys = array_keys($dati_extra);

for ($y = 0; $y < count($dati_extra_keys); $y++) {
    $key = $dati_extra_keys[$y];
    $value = $dati_extra[$key];

    echo "<li><strong>" . $key . "</strong>: " . $value . "</li>";
}
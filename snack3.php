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
$dati_extra_keys = array_keys($posts);

for ($i = 0; $i < count($dati_extra_keys); $i++){
    $date = $dati_extra_keys[$i];
    echo $date . " ";
    $postList = $posts[$date];

    for ($y = 0; $y < count($postList); $y++){
        $post = $postList[$y];

        echo $post["title"] . " ";
        echo $post["author"] . " ";
        echo $post["text"] . " ";
    }

}



?>


<!-- esempio in classe di florian -->


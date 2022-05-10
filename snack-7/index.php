<!-- 
## Snack 7
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente 
    i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.  
-->

<?php
$classe = [
    [
        "nome" => "Marco",
        "cognome" => "Marchetti",
        "voti" => [
            'italiano' => "8",
            'storia' => "4",
            'matematica' => "6",
        ]
        ],
    [
        "nome" => "Giuseppe",
        "cognome" => "Lomini",
        "voti" => [
            'italiano' => "3",
            'storia' => "8",
            'matematica' => "9",
        ]
        ],
    [
        "nome" => "Timoteo",
        "cognome" => "Giustetti",
        "voti" => [
            'italiano' => "3",
            'storia' => "2",
            'matematica' => "8",
        ]
    ]
    
];

// $media = ('italiano' + 'storia' + 'matematica') / array_sum(count($classe[$i]$voti));
// array_sum

for($i = 0; $i <= count($classe); $i++) {
    echo '<p>' . $classe[$i]['nome'] . " - " . $classe[$i]['cognome'] . '</p>';
}

?>
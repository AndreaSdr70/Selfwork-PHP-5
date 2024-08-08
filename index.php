<?php
$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$somma = 0;
$conteggio = 0;

foreach ($numeri as $numero) {
     if ($numero % 2 == 0) {
        $somma += $numero;
        $conteggio++; 
    }
}

if ($conteggio > 0) {
    $media = $somma / $conteggio;
    echo "La media dei numeri pari è: " . $media;
} else {
    echo "Non ci sono numeri pari nell'array.";
}
?>
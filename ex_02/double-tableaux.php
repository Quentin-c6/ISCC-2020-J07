<?php

$panier= [
    ['T-shirt Rouge', 15.50, 5],
    ['T-shirt Vert', 15.50, 6],
    ['T-shirt Argent', 15.50, 8],
    ['Short Bleu', 16.50, 5],
    ['Short Vert', 19.99, 5],
    ['Veste Argent', 19.99, 10],
    ['Veste Argent', 35, 3],
];
function afficher_panier($panier)
{
    foreach ($panier as $elements => $prix)
    {
        echo'
        <ul>
            <li>'.$prix[0]. '</li>
            <li>'.$prix[1]. '</li>
            <li>'.$prix[2]. '</li>
        </ul>';
    }
    return;
}
function calculer_total_panier($panier)
{
    $total=0;
foreach ($panier as $elements => $prix){
    $total= $total + $prix[1] * $prix[2];
}
     echo'<p>Le prix total du panier est '.$total. ' euro</p>';
}
afficher_panier($panier);
calculer_total_panier($panier);
?>
<footer></footer>
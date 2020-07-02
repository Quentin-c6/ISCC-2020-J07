<?php

$historique_commandes= array( 5.49, 9.99, 5.49, 15.99, 25);

   

function afficher_commandes($historique_commandes)
{
    $total=0;
    foreach($historique_commandes as $elements) {

     echo("Une commande de $elements euros a été reçue.");
    echo "<br>"; 
    $total= $total+ $elements;
}
    echo("Le total des commande est de $total euros");
return; 
}
afficher_commandes($historique_commandes);
?>
""
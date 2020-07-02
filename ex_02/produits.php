<?php

$produits= array(
   
    'T-shirt Rouge'=> 15.50 ,
   
    'T-shirt Vert' => 15.50 ,
   
   'T-shirt Argent' => 16.50,
   
   'Short Bleu' => 19.99,
   
   'Short Vert' => 19.99,
   
   'Veste Argent' => 35,);
   


   function afficher_produits($produits)
{
  
    echo'<table><tr> <th> "Produits" "Prix" </td>, </tr></table>';
  
     foreach ($produits as $elements =>$prix)    
    {
    echo '<p>' .$elements. ':'. $prix. '</p>';
    }
}
afficher_produits($produits)
?>

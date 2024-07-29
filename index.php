<?php

include("produits.php"); 
    /* permet de joindre la page */

    $numarticle= count($produits);
    /*  affiche quelle produit */


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotus Spirit</title>
    <link rel="icon" type="image/x-icon" href="TTF/petit_logo.png" >
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="logoh1">
    <img src="TTF/logo_lotus.png" alt="Logo lotus" style="width:118px;height:118px;">
    <h1>Bienvenue sur Lotus Spirit</h1> 
    <img src="TTF/logo_lotus.png" alt="Logo lotus" style="width:118px;height:118px;">
</div>

    <h2>Nos produits</h2>



  <!-- boucle  /  Ajout details et panier produits -->
      
<?php for($i=0; $i<$numarticle;$i++){ 
    $id= $produits[$i]["id"];?>
    <div class="listeproduit">
    <h3><?php echo $produits[$i]["name"]; ?></h3>
    <img class="tableau" src="<?php echo $produits[$i]["image"]?>" alt=""><br/>
    <p class="description"><?php echo $produits[$i]["overview"]; ?></p><br/>
    <p class="prix"><?php echo $produits[$i]["price"]; ?></p><br/>
    <a href="arcticle.php?subject=<?php echo $id ?>" target="_blank"><button>Voir le produit</button><br/></a>
    </div>
<?php } ?>


&copy;<p>Nous sommes toujours disponible pour toute question, n'hésitez pas à nous contacter à l'adresse suivante : <a href="mailto:contact@lotusspirit.fr">contact@lotusspirit.fr</a></p>


</body>
</html>
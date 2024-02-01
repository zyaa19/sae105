<!DOCTYPE html>
<html>
<head>
<title>ACCUEIL</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="fr">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
<body>

<?php
$pageActive = "accueil";
?>

<?php
// Appel du Début de Page
require ('header.php');
?>

<main>

<div class="container-magazine">
<div class="description"><h2>NOTRE <br> SELECTION <br> RECETTES</h2></div>
<div class="magazine"><img src="images/recette.png" class="magazine" alt="magazine"></div>
</div>

<div class="container-scoville">
    <div class="h-scoville"><h2>Développez vos papilles</h2></div>
    <div class="p-scoville"><p>L'échelle de Scoville est une mesure de la force ou de la chaleur des piments et des sauces piquantes. Plus le nombre de Scoville est élevé, plus la chaleur est intense.
L'échelle de Scoville est utilisée comme référence pour aider les consommateurs à choisir des produits piquants adaptés à leurs préférences en matière de chaleur.
<br>
En effet, l'effet du piquant rajoutera un plus à vos plats sur plusieurs niveaux...
Il ajoutera une dimension supplémentaire à un plat en augmentant sa complexité gustative. 
Le piquant peut aider à équilibrer les saveurs en ajoutant de la profondeur et de l'intensité.
<br>
Il contient aussi des bien faits sur votre santé, digestion ainsi que bien d'autres avantages... 
<br>Maintenant place aux recettes, pour allez plus loin, cliquez!</br>
<br>
<a class="button" href="donnees.php">Nos Recettes</a>

</div>
    <div class="img-scoville"><img src="images/piment1-1.png" alt="Piment"></div>

</div>



</main>

<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>


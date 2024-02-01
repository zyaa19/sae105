<!DOCTYPE html>
<html lang="fr">
<head>
<title>Partenaires | Site Web Valentine Lefort</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Les partenaires du site de System Of a Down">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>

<?php
$pageActive = "partenaires";
?>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
<div class="partenaires">
<h1 class="titre-partenaires">NOS PARTENAIRES</h1>


<div>
<p class="intro">Notre groupe est composé de 3 membres : Peniel (graphiste), Valentine (développeuse Web) et Zya (cheffe de projet). Nous avons constitué ce groupe car nous avons sommes amies et notre complicité nous permet d'être efficace dans nos travaux. De plus, nous avons chacun des compétences complémentaires, il est donc facile de nous attribuer un rôle à chacune.</p>
</div>


<div class="presentation">
  <div class="texte_pre">
    <h2>PENIEL LECHANGA</h2>
    <p class="presentation_2">Graphiste :</p>
    <p>J'ai choisi de réaliser un site sur le panafricanisme car c'est une idéologie très peu connu. Qui prône l'indépendance des Etats africains. Etant une personne qui aime partagé mes centres d'intérêts j'ai donc recensé les 50 artistes/auteurs et hommes politiciens qui sont à l'origine de ce mouvement. Car pour moi l'histoire et le savoir sont des choses sont des choses très importante. Mon envie via ce site est d'informer et de partager sur mes racines africaines.</p>
    <a href="http://mmi23g09.sae105.ovh/">
      <button class="bouton_p">Site Web</button>
    </a>
  </div>

  <div class="img_pre">
    <img class="photo_1" src="images/Peniel.JPG" alt="photo peniel">
    <img class="photo_2" src="images/peniel_graphiste.jpg" alt="photo graphiste">
  </div>
</div>



<div class="presentation reverse">
  <div class="texte_pre">
    <h2>VALENTINE LEFORT</h2>
    <p class="presentation_2">Développeuse Web :</p>
    <p>Pour mon site j'ai décidé de choisir le thème du Nu Métal en me concentrant sur un groupe des années 90-2000 : System Of a Down. J'ai donc choisi de répertorier 66 chansons des albums les plus connus du groupe. Grâce à ce site je veux partager ce genre mais surtout montrer à tous et toutes que ce style n'est pas réservé à une catégorie de personnes.</p>
    <a href="http://mmi23h08.sae105.ovh/">
      <button class="bouton_p">Site Web</button>
    </a>
  </div>

  <div class="img_pre trucbeugguela">
    <img class="photo_1 reversePhoto" src="images/Val.jpg" alt="photo valentine">
    <img class="photo_2" src="images/val_dev.jpg" alt="photo code">
  </div>
</div>


<div class="presentation">
  <div class="texte_pre">
    <h2>ZYA DUVAL</h2>
    <p class="presentation_2">Cheffe de Projet :</p>
    <p>J'ai choisi de réaliser un site sur le thème de la cuisine car les visuels qu'elle peut proposer m'attire. J'ai donc recensé 50 recettes du monde entier dans mon tableau afin de les partager avec un maximum de personnes. Il contient à la fois mes plats préférés mais aussi certains que j'ai moins apprécié, mais que j'ai quand même décidé d'intégrer dans mon site car ils restent incontournables.</p>
    <a href="http://mmi22a11.sae105.ovh/">
      <button class="bouton_p">Site Web</button>
    </a>
  </div>

  <div class="img_pre">
    <img class="photo_1" src="images/Zya.jpeg" alt="photo zya">
    <img class="photo_2" src="images/zya_cheffe.jpg" alt="photo cheffe de projet">
  </div>
</div>

<div class="pdf">
  <h3>CHARTE ET PLAN DE PROJET</h3><br \>
      <a href="images/gestiondeprojet.pdf"></a>
    <button class="bouton_p">PDF</button>
</div>
</div>


</main>

<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>

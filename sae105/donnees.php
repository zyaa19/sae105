<!DOCTYPE html>
<html>
<head>
<title>DONNEES</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="fr">
<link rel="stylesheet" type ="text/css" href="css/styles.css">

<body>

<?php
$pageActive = "donnees";
?>

<?php
// Appel du Début de Page
require ('header.php');
?>

<link rel="stylesheet" href="css/table.css"/>
<main>
<h1 class="titre-donnees">DONNÉES</h1>
<?php
// Déclaration du fichier et de son chemin dans une variable
$fichier = 'datas/table.json';

// Lecture du fichier - On stocke le contenu dans une autre variable
$tabRecettesJSON = file_get_contents($fichier);
// Décommenter si problème avec $tabRecettesJSON
// var_dump($tabRecettesJSON);

// Décodage du contenu du fichier et transformation en tablau php (array)
$tabRecettesPHP = json_decode($tabRecettesJSON, true);
// Décommenter si problème avec $tabRecettesPHP
// var_dump($tabRecettesPHP);

// Affichage de la structure du tableau

 ?>

<div class="base-donnees">
 <table id="table" class=" hover cell-border tripe ">
</div>

 <thead>

 <tr>

 <th>Nom</th>
 <th>Pays d'origine</th>
 <th>Temps de préparation</th>
 <th>Difficulté</th>
 <th>Type de plat</th>

 </tr>

 </thead>

 <tbody>

 <?php
 foreach ($tabRecettesPHP as $recette) {
    echo '<tr>';
    echo "<td>".$recette['nom'].'</td>';
    echo '<td>'.$recette['pays_origine'].'</td>';
    echo '<td>'.$recette['temps_preparation'].'</td>';
    echo '<td>'.$recette['difficulte'].'</td>';
    echo " <td>".$recette["type_plat"].'</td>';
    echo '</tr>';
    }
?>
 </tbody>
 </table>

</main>

 <script> 
let table = new DataTable('#table', {
    language: {
                url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
            }

});

</script>
</script>
<?php
// Appel du Pied de Page
require ('footer.php');
?>

    </body>
</html>


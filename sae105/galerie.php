<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>GALERIE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Galerie photos du site de System Of a Down">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>

<?php
$pageActive = "galerie";
?>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
<h1 class="titre-galerie">GALERIE</h1>

<form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
<label for="image">Choisir un fichier</label>
<input type="file" name="image" id="image" />
<input type="submit" value="Télécharger" />
</form>


<div id="images_galerie" style="
    display: flex;
    flex-wrap: wrap;
    ">
<?php
    $dossier=opendir ("images/galerie");
    while($fichier=readdir($dossier)){
        if($fichier!='.'&&$fichier!='..'&&$fichier!='.DS_Store')
        echo "<img src='images/galerie/$fichier' alt='$fichier'class='galerietel img-galerie'>";
    }
    echo $fichier;
?>
</div>

</main>

<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html

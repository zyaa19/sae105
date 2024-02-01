<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>CONTACT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang="fr">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>

<body>
<?php
$pageActive = "contact";
?>

<?php
// Appel du Début de Page
require ('header.php');
?>
<main>
<h1 class="titre-contact">CONTACTEZ NOUS</h1>
<form action="traitements/envoi_mail.php" method="post">

    <div id="en-tete">
        <div>
            <label for="prenom">Prénom <span class="span2">*</span></label>
            <input type="text" name="prenom" id="prenom" placeholder="Zya"/>
        </div>
        <div>
            <label for="nom">Nom <span class="span2">*</span></label>
            <input type="text" name="nom" id="nom" placeholder="Duval"/>
        </div>
    </div>

    <label for="email">E-mail <span class="span2">*</span></label>
    <input type="email" name="email" id="email" placeholder="nom@domaine.fr" />

    <div class="radio-container">
    <input type="radio" id="Information" name="Information" value="Information" checked />
    <label for="Information">Information</label>

    <input type="radio" id="Demande-de-devis" name="Demande-de-devis" value="Demande de devis" />
    <label for="Demande-de-devis">Demande de devis</label>

    <input type="radio" id="Reclamation" name="Reclamation" value="Reclamation" />
    <label for="Reclamation">Réclamation</label>

</div>

    <label for="message">Message <span class="span2">*</span></label>
    <textarea name="message" id="message" placeholder="Votre message"></textarea>

    <input type="submit" value="Envoyer" />


    <?php
if (isset($_SESSION['information'])) {
echo '<p>'.$_SESSION['information'].'</p>'."\n";
session_unset();
}
?>
</main>
<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>

</html>

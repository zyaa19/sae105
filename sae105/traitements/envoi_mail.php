<?php
session_start();
$_SESSION['information']='';

// Récupération des données du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$message=$_POST['message'];
$email=$_POST['email'];
$reclamation=$_POST['Reclamation'];
$demandeDeDevis=$_POST['Demande-de-devis'];
$information=$_POST['Information'];

// Traitement des données

$prenom=ucfirst(mb_strtolower($prenom));
$nom=ucfirst(mb_strtolower($nom));
if ($information) {
	$typeMessage="Information";
}
if ($demandeDeDevis) {
	$typeMessage="Demande de devis";
}
if ($reclamation) {
	$typeMessage="Reclamation";
}

$message1=$typeMessage . " - Confirmation de votre demande";


// Vérification des données du formulaire
// Exemple pour le nom

  // Vérification des données du formulaire

$affichage_retour = '';														// Lignes à ajouter au début des vérifications
$erreurs=0;

// Exemple pour le nom
if (!empty($_POST['nom'])) {
	$nom=$_POST['nom'];
} else {
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Le champ NOM est obligatoire<br>';
    $erreurs++;
}
if (!empty($_POST['prenom'])) {
	$prenom=$_POST['prenom'];
} else {
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Le champ PRENOM est obligatoire<br>';
    $erreurs++;
}


// Exemple pour l'adresse mail
if (!empty($_POST['email'])) {
// Si le champ email contient des données
  
  	// Verification du format de l'email
  	if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
      $email=$_POST['email'];
    } else {
    // Si l'email est incorrect 
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Adresse mail incorrecte<br>';
    $erreurs++;
    }
        
// Si le champ email est vide
} else {
    // header('location: contact.php'); 									// Ligne à remplacer
    $affichage_retour .='Le champ EMAIL est obligatoire<br>';
    $erreurs++;
}

if ($erreurs == 0) {
 
	//Préparation des variables pour l'envoi du mail de contact
	$subject='SAE105 : demande de '.$prenom.' '.$nom;
	$headers['From']=$email;							// Pour pouvoir répondre à la demande de contact
	$headers['Reply-to']=$email;						// On donne l'adresse de l'utilisateur comme adresse de réponse
	$headers['X-Mailer']='PHP/'.phpversion();  // On précise quel programme à généré le mail
	$headers['MIME-Version'] = '1.0';
	$headers['content-type']= 'text/html; charset=utf-8';			

	// On fixe l'adresse du destinataire - Pour ce Mail il s'agit de notre adresse MMI@mmi-troyes.fr
	$email_dest="mmi22a11@mmi-troyes.fr";
	//Envoi du mail de contact)
	if (mail($email_dest,$subject,$message,$headers)) {
	$erreurs=0;
	} else {
	$erreurs++;
	}
	
	// Préparation des données pour la confirmation
	$subject="Bonjour $prenom $nom votre demande est prise en compte";
	$headers['From']="mmi22a11@mmi-troyes.fr";							// Pour pouvoir répondre à la demande de contact
	$headers['Reply-to']="no-reply@mmi-troyes.fr";						// On donne l'adresse de l'utilisateur comme adresse de réponse
	$headers['X-Mailer']='PHP/'.phpversion();			// On précise quel programme à généré le mail
	$email_dest_confirmation = $email;
	//Envoi du mail de confirmation
	if (mail($email_dest_confirmation,$subject,$message1,$headers)) {
	$erreurs=0;
	} else {
	$erreurs++;
	}
	
	// Détermination du message à affichée après les tentatives d'envoi
		$affichage_retour= 'Votre demande à bien été envoyée !';
	  
		if ($erreurs != 0) {
	  $affichage_retour='Echec de l\'envoi du message';
	  }
  }

  ?>
<!-- Fin de l'envoi en PHP -->
<!-- Début de l'affichage HTML -->


<main>

<?php
if ($erreurs == 0) {                                       // aucune erreur
echo '<div id="reussite">'."\n";
echo '<p>'.$affichage_retour.'</p>'."\n";
echo '<form action="../index.php">'."\n";
echo '<button type="submit">Retour</button>'."\n";        // on retourne sur la page accuei
echo '</form>'."\n";
echo '</div>'."\n";

} else {                                                  // Erreurs de saisie ou d'envoi du mail

echo '<div id="echec">'."\n";
echo '<p>'.$affichage_retour.'</p>'."\n";
echo '<form action="../contact.php">'."\n";
echo '<button type="submit">Retour</button>'."\n";        // on retourne sur la page accueil
echo '</form>'."\n";
echo '</div>'."\n";
}

$_SESSION['information']=$affichage_retour;
header('location: ../contact.php');

?>

</main>
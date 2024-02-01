<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css"/>
<link rel="shortcut icon" type="images/jpg" href="images/flavicon.jpg"/>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<title>Site Travaux</title>
</head>

<header>
<nav>
        <ul>
            <li <?php echo ($pageActive == "accueil") ? 'class="active"' : ''; ?>><a href="index.php">Accueil</a></li>
            <li <?php echo ($pageActive == "donnees") ? 'class="active"' : ''; ?>> <a href="donnees.php">Données</a></li>
            <li <?php echo ($pageActive == "galerie") ? 'class="active"' : ''; ?>><a href="galerie.php">Galerie</a></li>
            <li <?php echo ($pageActive == "contact") ? 'class="active"' : ''; ?>><a href="contact.php">Contact</a></li>
            <li <?php echo ($pageActive == "partenaires") ? 'class="active"' : ''; ?>><a href="partenaires.php" >Partenaires</a></li>
            </div> 
        </ul>
     </nav>
</header>

<!-- PAGE ACTIVE -->



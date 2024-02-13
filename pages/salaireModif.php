<?php
    require'../inc/function.php'; 
    $id = $_GET['id'];
    $salaireById = getByIdSalaire($id);
    $cueilleur = getAllCueilleur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="cssInsertSalaire.css" rel="stylesheet">
</head>
<body>

    <header>
        <div class="logo col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <img class="logo-img" src="image/lg.png" alt="Your Logo">
        </div>

        <div class="nav col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <a href="#">Accueil</a>
            <a href="#">Menu</a>
            <a href="deconnexion.php">Déconnexion</a>

        </div>
    </header>
  
    <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12">
        
        <div class="divGestion col-xs-2 col-md-2 col-sm-2 col-lg-2">
           
            <button class="bouton btt " onclick="window.location.href='theGestion.php'">Gestion thé</button>
            <button class="bouton btt " onclick="window.location.href='parcelleGestion.php'">Gestion parcelle</button>
            <button class="bouton btt " onclick="window.location.href='cueilleurGestion.php'">Gestion cueilleur</button>
            <button class="bouton btt " onclick="window.location.href='depenseGestion.php'">Gestion depense</button>
            <button class="bouton btt " onclick="window.location.href='salaireGestion.php'">Configuration salaire</button>
            <button class="bouton btt " onclick="window.location.href='configurationJournaliere.php'">Configuration journaliere</button>
            <button class="bouton btt " onclick="window.location.href='prixVenteInsert.php'">Configuration prix vente</button>

            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class="formulaire col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Modifier salaire d'un cueilleur:</h1>
            <!-- ny action mankany am traitement dia ny traitement tokony miverina amlay page gestion -->
            <!-- alaina ny id anlay ligne modifier-na dia asiana valeur par défaut daholo lay champ -->
            <form action="../pages/traitement/traitementSalaireModif.php" method="post">
            <input type="hidden" name="id" value="<?php echo $salaireById['id']; ?>">
                <!-- mila fonction getAllCueilleur dia ny id anlay cueilleur no atao value -->
                <label for="">cueilleur:</label>
                <select name="id_cueilleur" id="id_cueilleur" value="">
                    <option value="">choisir un cueilleur</option>
                    <?php
                        for ($i=0; $i < count($cueilleur); $i++) { ?>
                            <option value="<?php echo $cueilleur[$i]['id'] ?>"><?php echo $cueilleur[$i]['nom'] ?></option>
                        <?php }
                    ?>
                    
                </select>
                <br>
                <label for="">Salaire par kg:</label>
                <input type="number" name="montant" value="">
                <br>
                <input type="submit" class="insert btn btn-primary" value="valider">


            </form>
        </div>


        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        

       

        

    </div>

    <footer >
        <p>Rabary Mihaingo Soa Harena Fifaliana ETU002455</p>
        <p>Rakotoharitiana Hedy Hamael ETU002500</p>
        <p>Randriambololona Kaloina ETU002571</p>
    </footer>

    

   
   


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
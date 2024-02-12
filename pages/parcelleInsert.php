<?php
    require'../inc/function.php'; 
    $the  = getAllThe();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserer thé</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/cssInsertParcelle.css" rel="stylesheet">
</head>
<body>

    <header>
        <div class="logo col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <img class="logo-img" src="../assets/image/lg.png" alt="Your Logo">
        </div>

        <div class="nav col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <a href="#">Accueil</a>
            <a href="#">Menu</a>
            <a href="#">Déconnexion</a>
        </div>
    </header>
  
    <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12">
        
        <div class="divGestion col-xs-2 col-md-2 col-sm-2 col-lg-2">
           
            <button class="bouton btt " onclick="window.location.href='theGestion.php'">Gestion thé</button>
            <button class="bouton btt " onclick="window.location.href='parcelleGestion.php'">Gestion parcelle</button>
            <button class="bouton btt " onclick="window.location.href='cueilleurGestion.php'">Gestion cueilleur</button>
            <button class="bouton btt " onclick="window.location.href='depenseGestion.php'">Gestion depense</button>
            <button class="bouton btt " onclick="window.location.href='salaireGestion.php'">Configuration salaire</button>

            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class="formulaire col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Inserer une parcelle:</h1>
            <form action="../pages/traitement/traitementParcelle.php" method="post">
                <label for="surface">Surface en ha:</label>
                <input type="number" name="surface" id="surface">
                <br>
                <!-- mila fonction getAllThe dia ny id anlay the no atao value -->
                <label for="id_the">Variete de the plante:</label>
                <select name="id_the" id="id_the">
                    <option value="">choisir une variete</option>
                    <!-- boucler-na eto ny anaralay the sy ny id any -->
                    <?php for ($i=0; $i <count($the) ; $i++) { ?> 
                        <option value="<?php echo $the[$i]['id'] ?>"><?php echo $the[$i]['nom'];  ?></option>                        
                   <?php } ?>
                    

                </select>
                <br>
                <input type="submit" class="insert btn btn-primary" value="inserer">
                <?php 
                        if(isset($_GET['message'])){ ?>
                            <p><?php echo $_GET['message']; ?></p>
                <?php } ?>

            </form>
        </div>


        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        

       

        

    </div>

    <footer >
        <p>Rabary Mihaingo Soa Harena Fifaliana ETU002455</p>
        <p>Rakotoharitiana Hedy Hamael ETU002500</p>
        <p>Randriambololona Kaloina ETU002571</p>
    </footer>

    

   
   


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php
    require'../inc/function.php'; 
    $cueilleur = getAllCueilleur();
    $parcelle = getAllParcelle();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saisie cueillette</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/cssSaisieCueillette.css" rel="stylesheet">
    <script src="../scripts/cueillette.js"></script>
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
            <button class="bouton btt " onclick="window.location.href='saisieCueillette.php'">Saisie cueillette</button>
            <button class="bouton btt " onclick="window.location.href='saisieDepense.php'">Saisie depense</button>
            <button class="bouton btt " onclick="window.location.href='resultat.php'">Resultat</button>
            <button class="bouton btt " onclick="window.location.href='paiement.php'">paiement</button>


            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class="formulaire col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Faire une cueillette:</h1>
            <form id="formCueillette">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date">
                <br>
                <label for="id_cueilleur">Cueilleur:</label>
                <select name="id_cueilleur" id="id_cueilleur">
                    <option value="">choisir un cueilleur</option>
                    <!-- boucler-na eto ny anaralay cueilleur sy ny id any -->
                    <?php for ($i=0; $i <count($cueilleur) ; $i++) { ?>
                    <option value="<?php echo $cueilleur[$i]['id']; ?>"><?php echo $cueilleur[$i]['nom'] ?></option>
                    <?php  } ?>
                </select>
                <br>
                <label for="id_parcelle">Parcelle:</label>
                <select name="id_parcelle" id="id_parcelle">
                    <option value="">choisir une parcelle</option>
                    <!-- boucler-na eto ny id anlay  parcelle sy ny id any -->
                    <?php for ($i=0; $i <count($parcelle) ; $i++) { ?>
                    <option value="<?php echo $parcelle[$i]['id']; ?>"><?php echo $parcelle[$i]['id'] ?></option>
                    <?php  } ?>
                </select>
                <br>
                <label for="poids">Poids cueilli:</label>

                <input type="number" name="poids" id="poids">
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

    

   
   


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    
</body>
</html>
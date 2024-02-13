<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserer thé</title>

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
            <a href="#">Déconnexion</a>
        </div>
    </header>
  
    <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12">
        
        <div class="divGestion col-xs-2 col-md-2 col-sm-2 col-lg-2">
           
            <button class="bouton btt " onclick="window.location.href='theGestion.html'">Gestion thé</button>
            <button class="bouton btt " onclick="window.location.href='parcelleGestion.html'">Gestion parcelle</button>
            <button class="bouton btt " onclick="window.location.href='cueilleurGestion.html'">Gestion cueilleur</button>
            <button class="bouton btt " onclick="window.location.href='depenseGestion.html'">Gestion depense</button>
            <button class="bouton btt " onclick="window.location.href='salaireGestion.html'">Configuration salaire</button>

            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class="formulaire col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Modifier salaire d'un cueilleur:</h1>
            <!-- ny action mankany am traitement dia ny traitement tokony miverina amlay page gestion -->
            <!-- alaina ny id anlay ligne modifier-na dia asiana valeur par défaut daholo lay champ -->
            <form action="" method="get">
                <!-- mila fonction getAllCueilleur dia ny id anlay cueilleur no atao value -->
                <label for="">cueilleur:</label>
                <select name="id_cueilleur" id="id_cueilleur" value="">
                    <option value="">choisir un cueilleur</option>
                    <!-- boucler-na eto ny anaralay cueilleur sy ny id any -->
                    <option value="">Nom cueilleur</option>
                    

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
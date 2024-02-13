<?php
    require'../inc/function.php'; 
    $cueilleurs  = getAllCueilleur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        <div class="liste col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Liste des cueilleurs</h1>

            <!-- boucler-na lay cueilleur, mila jerena hoe rehefa 0ny genre dia inona no mipoitra eo etc  -->
            <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Genre</th>
                <th scope="col">Date de naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i <count($cueilleurs) ; $i++) { ?>
                    <tr>
                    <td><?php echo $cueilleurs[$i]['id']; ?></td>
                    <td><?php echo $cueilleurs[$i]['nom']; ?></td>
                    <td><?php if($cueilleurs[$i]['genre'] == 0){echo "Homme";} else {echo "Femme";}; ?></td>
                    <td><?php echo $cueilleurs[$i]['date_naissance']; ?></td>
                    <td><a  class ="tdA" href="cueilleurModif.php?id=<?php echo $cueilleurs[$i]['id']; ?>">Modifier</a></td>
                    <td><a class ="tdA" href="cueilleurSupp.php?id=<?php echo $cueilleurs[$i]['id']; ?>">Supprimer</a></td>

                </tr>
               <?php } ?>
              
            </tbody>
            </table>

            <button class="add btt " onclick="window.location.href='cueilleurInsert.php'">Ajouter</button>


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
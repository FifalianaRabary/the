<?php
    require'../inc/function.php'; 
    $salaires = getAllSalaire();
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
            <a href="#">Déconnexion</a>
        </div>
    </header>
  
    <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12">
        
        <div class="divGestion col-xs-2 col-md-2 col-sm-2 col-lg-2">
           
            <button class="bouton btt " onclick="window.location.href='theGestion.php'">Gestion thé</button>
            <button class="bouton btt " onclick="window.location.href='parcelleGestion.php'">Gestion parcelle</button>
            <button class="bouton btt " onclick="window.location.href='cueilleurGestion.php'">Gestion cueilleur</button>
            <button class="bouton btt " onclick="window.location.href='depenseGestion.php'">Gestion depense</button>
            <button class="bouton btt " onclick="window.location.href='salaireGestion.html'">Configuration salaire</button>
            <button class="bouton btt " onclick="window.location.href='paiement.html'">paiement</button>
            <button class="bouton btt " onclick="window.location.href='configurationJournaliere.html'">Configuration journaliere</button>
            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class="liste col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Liste des salaires</h1>

            <!-- boucler-na lay salaire, mila alaiana à partir ny id-ny lay cueilleur  -->
            <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">id</th>
                <th scope="col">cueilleur</th>
                <th scope="col">montant</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($salaires); $i++) { ?>
                <tr>
                    
                    <td><?php echo $salaires[$i]['id']; ?></td>
                    <td><?php echo $salaires[$i]['id_cueilleur']; ?></td>
                    <td><?php echo $salaires[$i]['montant']; ?></td>
                    <td><a  class ="tdA" href="salaireModif.php?id=<?php echo $salaires[$i]['id']; ?>">Modifier</a></td>
                    <td><a class ="tdA" href="salaireSupp.php?id=<?php echo $salaires[$i]['id']; ?>">Supprimer</a></td>

                </tr>
               <?php } ?>
                
            </tbody>
            </table>

            <button class="add btt " onclick="window.location.href='salaireInsert.php'">Ajouter</button>


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
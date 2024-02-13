<?php
    require'../inc/function.php'; 
   $depense = getAllTypeDepense();
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
            <button class="bouton btt " onclick="window.location.href='salaireGestion.php'">Configuration salaire</button>

            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class="liste col-xs-6 col-md-6 col-sm-6 col-lg-6">
            <h1 class="titre">Liste des categories de depense</h1>

            <!-- boucler-na lay cueilleur, mila jerena hoe rehefa 0ny genre dia inona no mipoitra eo etc  -->
            <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">id</th>
                <th scope="col">Categorie de depense</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0; $i < count($depense); $i++) { ?>
                <tr>
                    <td><?php echo $depense[$i]['id']; ?></td>
                    <td><?php echo $depense[$i]['type']; ?></td>
                    <td><a  class ="tdA" href="depenseModif.php?id=<?php echo $depense[$i]['id']; ?>">Modifier</a></td>
                    <td><a class ="tdA" href="depenseSupp.php?id=<?php echo $depense[$i]['id']; ?>">Supprimer</a></td>
                </tr>
              <?php  } ?>
               
            </tbody>
            </table>

            <button class="add btt " onclick="window.location.href='depenseInsert.php'">Ajouter</button>


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
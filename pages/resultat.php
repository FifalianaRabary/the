<?php
       require '../inc/function.php';
       $parcelle = getAllParcelle();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/cssResultat.css" rel="stylesheet">
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

        <div class=" col-xs-6 col-md-6 col-sm-6 col-lg-6">

           
            <div class="row">

                <div class=" liste col-xs-6 col-md-6 col-sm-6 col-lg-6">

                    <h1 class="titre">Resultat</h1>

                    <!-- boucler-na lay cueilleur, mila jerena hoe rehefa 0ny genre dia inona no mipoitra eo etc  -->
                    <table class="table">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Poids total</th>
                        <th scope="col">Poids restant</th>
                        <th scope="col">Montant ventes</th>
                        <th scope="col">Montant depenses</th>
                        <th scope="col">Benefice</th>
                        <th scope="col">Cout de revient par kg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i <count($parcelle) ; $i++) {  
                        $poidTotal = poidsTotalParcelle($parcelle[$i]['id']);
                        $poidRestant = poidsRestantParcelle($parcelle[$i]['id'],$_POST['debut'],$_POST['fin']);
                        $montantVente = montantVente($parcelle[$i]['id'],$_POST['debut'],$_POST['fin']);
                        $benefice = benefice($parcelle[$i]['id'],$_POST['debut'],$_POST['fin']);
                        $montantDepense = depenseTotalParcelle($parcelle[$i]['id'],$_POST['debut'],$_POST['fin']);
                        $coutRevient = coutRevient($parcelle[$i]['id'],$_POST['debut'],$_POST['fin']);
        ?>
                            <tr>
                          
                            <td><?php echo $parcelle[$i]['id']; ?></td>
                            <td><?php echo $poidTotal[$i]; ?></td>
                            <td><?php echo $poidRestant[$i]; ?></td>
                            <td><?php echo $montantVente[$i]; ?></td>
                            <td><?php echo $montantDepense[$i]; ?></td>
                            <td><?php echo $benefice[$i]; ?></td>
                            <td><?php echo $coutRevient[$i]; ?></td>
                        </tr>
                       <?php } ?>
                       
                    </tbody>
                    </table>
                 </div>
            </div>

           
            



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
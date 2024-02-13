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
            <button class="bouton btt " onclick="window.location.href='paiement.html'">paiement</button>


            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class=" col-xs-6 col-md-6 col-sm-6 col-lg-6">

            <div class="row">
                <div class="formulaire col-xs-6 col-md-6 col-sm-6 col-lg-6">
                    <form action="../pages/traitement/traitementResultat.php" method="post">
                            <label for="id_parcelle">Parcelle:</label>
                            <select name="id_parcelle" id="id_parcelle">
                                <option value="">choisir un cueilleur</option>
                                <!-- boucler-na eto ny anaralay cueilleur sy ny id any -->
                                <?php for ($i=0; $i <count($parcelle) ; $i++) { ?>
                                <option value="<?php echo $parcelle[$i]['id'] ?>"><?php echo $parcelle[$i]['id'] ?></option>
                                <?php  } ?>
                            </select>
                        <label for="debut">Date debut:</label>
                        <input type="date" name="debut" value="" id="debut">
                        <label for="fin">Date Fin:</label>
                        <input type="date" name="fin" value="" id="fin">
        
                        <input type="submit" class="insert btn btn-primary" value="ok">
        
                    </form>
                </div>
            </div>

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
                        <th scope="col">Cout de revient par kg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          
                            <td><?php echo $parcelle[$i]['id']; ?></td>
                            <td><?php  ?></td>
                            <td>5kg</td>
                            <td>1000 ar</td>
                        </tr>
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
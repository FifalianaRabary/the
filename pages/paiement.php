<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/cssPaiement.css" rel="stylesheet">
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
            <button class="bouton btt " onclick="window.location.href='saisieCueillette.php'">Saisie cueillette</button>
            <button class="bouton btt " onclick="window.location.href='saisieDepense.php'">Saisie depense</button>
            <button class="bouton btt " onclick="window.location.href='resultat.php'">Resultat</button>
            <button class="bouton btt " onclick="window.location.href='paiement.php'">paiement</button>


            
        </div>

        <div class="filler col-xs-2 col-md-2 col-sm-2 col-lg-2"></div>

        <div class=" col-xs-6 col-md-6 col-sm-6 col-lg-6">

            <div class="row">
                <div class="formulaire col-xs-6 col-md-6 col-sm-6 col-lg-6">
                    <form action="" method="get">
                        <label for="debut">Date debut:</label>
                        <input type="date" name="debut" id="debut" value="">
                        <label for="fin">Date fin:</label>
                        <input type="date" name="fin" id="fin" value="">
        
                        <input type="submit" class="insert btn btn-primary" value="ok">
        
        
                    </form>
                </div>
            </div>

            <div class="row">

                <div class=" liste col-xs-6 col-md-6 col-sm-6 col-lg-6">

                    <h1 class="titre">Liste paiment</h1>

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">nom cueilleur</th>
                            <th scope="col">poids</th>
                            <th scope="col">bonus</th>
                            <th scope="col">mallus</th>
                            <th scope="col">montant paiment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>12-11-1999</td>
                                <td>Rakoto</td>
                                <td>52 kg</td>
                                <td>2%</td>
                                <td>1%</td>
                                <td>2000000 ar</td>
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
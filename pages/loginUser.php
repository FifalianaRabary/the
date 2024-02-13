<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/cssLoginUser.css" rel="stylesheet">
</head>
<body>


  
    <div class="container col-xs-12 col-md-12 col-sm-12 col-lg-12">
        
        
        <div class="text col-xs-7 col-md-7 col-sm-7 col-lg-7">
            <h1 class="bienvenu">Welcome</h1>
        </div>

        <div class="divLogin col-xs-5 col-md-5 col-sm-5 col-lg-5">
        <a href="loginAdmin.php" class="link">Log in as admin</a>

            <div class="formulaire col-xs-12 col-md-12 col-sm-12 col-lg-12">
                
                <img class="logo-img" src="../assets/image/lg.png" alt="Your Logo">

                <form action="../pages/traitement/traitementLogUser.php" method="post">
                    <label for="mail">Email:</label>
                    <input type="email" name="mail" id="mail" value="user1@gmail.com">
                    <br>
                    <label for="mdp">Password:</label>
                    <input type="password" name="mdp" id="mdp" value="mdp1">
                    <br>
                    <input type="submit" class="login btn btn-primary" value="Log in">
                    <?php 
                        if(isset($_GET['error'])){ ?>
                            <p><?php echo $_GET['error']; ?></p>
                       <?php } ?>
                </form>
            
            </div>
            
        </div>

        

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
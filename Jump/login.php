<?php 
session_start();
require "config/commandes.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>JUMP</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">JUMP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Client/Catalogue_cli.html">Catalogue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
          <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
          </nav>             
        </div>
      </nav>
    </header>


    <div class="container my-5">
        <div class="row">
          <div class="col-12">
            <h1>Connexion</h1>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form id="login-form" class="animated fadeIn" method="post">
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" class="form-control" name="email" style="width: 65%">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" name="mdp" style="width: 65%">
                </div>
                <button type="submit" class="btn btn-primary" name="envoyer">Se connecter</button>
                </form>
                <div class="text-center my-3">
                <a href="Inscription.html" id="register-link">Pas encore de compte ? S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
      
      
</body>
</html>

<?php

    if(isset($_POST['envoyer']))
    {
        if(!empty($_POST['email']) AND !empty($_POST['mdp']))
        {
            $email=htmlspecialchars($_POST['email']);
            $mdp=htmlspecialchars($_POST['mdp']);

            $admin=getAdmin($email, $mdp);

            if($admin)
            {
                $_SESSION['Jump_admin']=$admin;

                header("Location: admin_vendeur/");
            }else{
                echo "Connexion echouee";
            }
        }
    }

?>
<?php 
    session_start();

    if(!isset($_SESSION['Jump_admin'])){
        header("Location: ../login.php");
    }
    if(empty($_SESSION['Jump_admin'])){
        header("Location: ../login.php");
    }
    require("../config/commandes.php");
    $Produits=afficher();

?>


<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="foot.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>JUMP</title>
  </head>

<body>
    <header>
                <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">JUMP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gestion de Produits
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php">Ajouter de produit</a></li>
                        <li><a class="dropdown-item" href="Produit.php">Modifier un produits</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="suppression.php">Supprimer de Produits</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Factures</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Commandes</a>
                    </li>

                </ul>
             
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="Deco.php"><i class="fas fa-sign-in-alt"></i> Deconnexion</a>
                </li>
                </ul>
            </div>
            </nav>
    </header>
    <div class="container my-5">
        <div class="row">
        <div class="col-12">
            <h1>Gestion des produits</h1>
        </div>
        </div>
        <div class="row my-3">
       
        
        <form method="post">


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Identifiant du produit</label>
                <input type="number" class="form-control" name="idproduit" required>
            </div>

            
            <button type="submit" name="Valider" class="btn btn-success float-right">Supprimer le produit</button>
        </form>
        </div>
        
        <div class="row my-3">

        <?php foreach($Produits as $produit):  ?>
                <div class="col-md-4">
                <div class="card">
                  <img src="<?= $produit->img ?>" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title"><?= $produit->id ?></h5>
                  </div>  
                </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
    
    

</body>
<footer class="footer_area section_padding_130_0">
      <div class="container">
        <div class="row">
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Footer Logo-->
              <div class="footer-logo mb-3"></div>
              <p>Appland is completely creative, lightweight, clean app landing page.</p>
              <!-- Copywrite Text-->
            <br/>
              <!-- Footer Social Area-->
              <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">About</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Corporate Sale</a></li>
                  <li><a href="#">Terms &amp; Policy</a></li>
                  <li><a href="#">Community</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Support</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Help &amp; Support</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Contact</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Call Centre</a></li>
                  <li><a href="#">Email Us</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Help Center</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>     
</html>

<?php 

    if(isset($_POST['Valider']))
    {
        if(isset($_POST['idproduit']))
        {
            if(!empty($_POST['idproduit']))
            {

                $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));
 
                try{
                    supprimer($idproduit);
                }catch (Exception $e){
                    $e->getMessage();
                }
            }   

        }
    }

?>

 
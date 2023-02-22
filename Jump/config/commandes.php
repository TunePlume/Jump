<?php


function afficher()
{
    if(require("connexion.php"))
    {
        $req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data=$req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
    }

}

function supprimer($id)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("DELETE FROM produits WHERE id=?");
        $req->execute(array($id));
    }
}


function ajouter($image, $nom, $prix, $descri)
    
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO produits (img, nom, prix, descri) VALUES (:image, :nom, :prix, :descri)");
        $req->bindParam(':image', $image, PDO::PARAM_STR);
        $req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':prix', $prix, PDO::PARAM_INT);
        $req->bindParam(':descri', $descri, PDO::PARAM_STR);
        $req->execute(); 
        $req->closeCursor();

    }
        
}

function modifier($image, $nom, $prix, $descri, $id)
    
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("UPDATE produits SET img=?, nom=?, prix=?, descri=? WHERE id=?" );
        $req->execute(array($image, $nom, $prix, $descri, $id)); 
        $req->closeCursor();

    }
        
}


function getAdmin($email, $mdp){
    if(require("connexion.php")){
        $req=$access->prepare("SELECT * FROM admin WHERE email=? AND mdp=?");
        $req->execute(array($email, $mdp));
        if($req->rowCount()==1)
        {
            $data=$req->fetch();

            return $data;
        }else{
            return false;
        }
        $req->closeCursor();
    }
}


function getProduit($id){
    if(require("connexion.php")){
        $req=$access->prepare("SELECT * FROM produits WHERE id=?");
        $req->execute(array($id));
        if($req->rowCount()==1)
        {
            $data=$req->fetchAll(PDO::FETCH_OBJ);

            return $data;
        }else{
            return false;
        }
        $req->closeCursor();
    }
}

?>
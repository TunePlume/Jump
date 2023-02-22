<?php 
    session_start();
    if(isset($_SESSION['Jump_admin']))
    {
        $_SESSION['Jump_admin']=array();

        session_destroy();

        header("Location:../");
    }else{
        header ("Location:../login.php");
    }

?>
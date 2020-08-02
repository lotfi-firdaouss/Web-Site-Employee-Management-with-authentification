<?php
 require 'header.php';
?>
<div class="container row">
    <div class="col col-lg-3">
       <?php
        require 'sidebar1.php';
       ?> 
    </div>
    <div class="col col-lg-9 class1" style="background-image:url('photos/wallpaper.jpg'); font-size:small; background-repeat: no-repeat;
    background-size: cover;">
        <br><br><br><br>
        <div class="container ml-5">
            <?php
                require 'user__bd.php';
            ?>   

            <?php

            $role=$_POST['role'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $nomutilisateur=$_POST['nomutilisateur'];
            $adresseemail=$_POST['adresseemail'];
            $mdp=md5($_POST['mdp']);

            $user=new User($role,$nom,$prenom,$nomutilisateur,$adresseemail,$mdp);
            $user->UpdateUser();

            echo '<div class="alert alert-success" role="alert" style="width:640px";>
            <h4 class="alert-heading">Opération réussie !</h4>
            <p>L\'utilisateur indiqué a été modifié dans la base de donné du site</p>
           </div>';

            ?>

        </div>
        <BR><BR><BR>
        <BR><BR><BR>

    </div>
</div>
<?php
 require 'footer.php';
?>
            


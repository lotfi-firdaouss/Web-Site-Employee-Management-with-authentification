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

            class userid extends User{
                protected $user_id;

                function __construct($role,$nom,$prenom,$nomutilisateur,$adresseemail,$mdp,$user_id){
                    User::__construct($role,$nom,$prenom,$nomutilisateur,$adresseemail,$mdp);
                    $this->user_id=$user_id;
                }

                function DeleteUser(){
                    try{
                        $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
                    }
                    catch(exception $e){
                        echo 'connection failed'.$e;
                    }

                    $reponse=$bdd->prepare("DELETE FROM users WHERE user_id=:id");
                    $reponse->execute(['id'=>$this->user_id]); 

                }
            }
            $role='role';
            $nom='nom';
            $prenom='prenom';
            $nomutilisateur='nomutilisateur';
            $adresseemail='email';
            $mdp='mdp';
            $user_id=$_POST['user_id'];
            $user=new userid($role,$nom,$prenom,$nomutilisateur,$adresseemail,$mdp,$user_id);
            $user->DeleteUser();

            echo '<div class="alert alert-success" role="alert" style="width:640px";>
            <h4 class="alert-heading">Opération réussie !</h4>
            <p>L\'utilisateur indiqué a été supprimé de la base de donné du site</p>
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

                

<?php
 require 'header.php';
?>
<div class="container row">
    <div class="col col-lg-3">
       <?php
        require 'sidebar1.php';
       ?> 
    </div>
    <div class="col col-lg-9 class1" style="background-image:url('photos/wallpaper.jpg'); font-size:small;     background-repeat: no-repeat;
    background-size: cover;" >
        <br><br><br><br>
        <div class="container ml-5" id="parentcreateUser">
            <span style="text-decoration:underline;" id="spantext"><b>Veuiller remplir le formulaire ci-dessous pour ajouter un utilisateur </b></span> <br><HR>
            <form class="row" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> id="main_form">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label >Role : </label>
                        <input type="text" class="form-control" name="role" required>
                    </div>
                    <div class="form-group">
                        <label >Nom : </label>
                        <input type="text" class="form-control" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label >Prenom : </label>
                        <input type="text" class="form-control" name="prenom" required>
                    </div>
                    <div class="form-group">
                        <label >Nom d'utilisateur : </label>
                        <input type="text" class="form-control" name="nomutilisateur" required>
                    </div>
                    <div class="form-group">
                        <label >Adresse email : </label>
                        <input type="email" class="form-control" aria-describedby="emailHelp" name="adresseemail" required>
                    </div>
                    <div class="form-group">
                        <label>Mot de passe :</label>
                        <input type="password" class="form-control" name="mdp" required>
                    </div>
                    <button type="submit" class="btn btn-outline-primary float-right" name="submit">Envoyer</button>
                </div>
            </form>
            <?php
                require 'user__bd.php';
            ?>   

            <?php

            if(isset($_POST['submit'])){
                $role=$_POST['role'];
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $nomutilisateur=$_POST['nomutilisateur'];
                $adresseemail=$_POST['adresseemail'];
                $mdp=md5($_POST['mdp']);
    
                $user=new User($role,$nom,$prenom,$nomutilisateur,$adresseemail,$mdp);
                $user->CreateUser(); 
               
                echo '<script type="text/javascript" src="createUser.js"></script>';
                echo '<script>createUserSuccess();</script>';
                
            }
            ?>
        </div>
        <BR><BR><BR>
        <BR><BR><BR>

    </div>
</div>

<?php
 require 'footer.php';
?>

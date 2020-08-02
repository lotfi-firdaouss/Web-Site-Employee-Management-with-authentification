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
    background-size: cover;">
        <br><br><br><br>
        <div class="container ml-5">
        <span style="text-decoration:underline; font-size:medium;"><b>Veuiller remplir le formulaire ci-dessous pour mettre à jour un utilisateur :</b></span> <br>
        <form class="row" method="post" action="updateUser_bd.php">
            <div class="col-lg-8">
                <br>
                <hr style="background-color:white; height:1px;">
                <span style="text-decoration:underline;">Commencez par désigner l'utilisateur que vous souhaitez mettre à jour</span>
                <br><br>
                <div class="form-group">
                    <label >Nom : </label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label >Prenom : </label>
                    <input type="text" class="form-control" name="prenom">
                </div>
                
                <hr style="background-color:white; height:1px;">
                <span style="text-decoration:underline;">et puis introduire ses nouvelles informations</span><br><br>
                <div class="form-group">
                    <label >Nouveau role : </label>
                    <input type="text" class="form-control" name="role">
                </div>
                <div class="form-group">
                    <label >Nouveau nom d'utilisateur : </label>
                    <input type="text" class="form-control" name="nomutilisateur">
                </div>
                <div class="form-group">
                    <label >Nouvelle adresse email : </label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" name="adresseemail">
                </div>
                <div class="form-group">
                    <label>Nouveau mot de passe :</label>
                    <input type="password" class="form-control" name="mdp">
                </div>
                <hr style="background-color:white; height:1px;">
                <button type="submit" class="btn btn-outline-primary float-right">Envoyer</button>
            </div>
        </form>
        </div>
        <BR><BR><BR>
        <BR><BR><BR>

    </div>
</div>
<?php
 require 'footer.php';
?>


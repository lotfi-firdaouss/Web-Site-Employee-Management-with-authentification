<?php
 require 'header.php';
?>
<div class="container row">
    <div class="col col-lg-3">
       <?php
        require 'sidebar2.php';
       ?> 
    </div>
    <div class="col col-lg-9 class1" style="background-image:url('photos/wallpaper2.jpg'); font-size:small;     background-repeat: no-repeat;
    background-size: cover;">
        <br><br><br><br>
        <div class="container ml-5">
        <span style="text-decoration:underline; font-size:medium;"><b>Veuiller remplir le formulaire ci-dessous pour mettre à jour un employé :</b></span> <br>
        <form class="row" method="post" action="modifyEmployee_bd.php">
            <div class="col-lg-8">
                <br>
                <hr style="background-color:white; height:1px;">
                <span style="text-decoration:underline;">Commencez par désigner le code de l'utilisateur que vous souhaitez mettre à jour</span>
                <br><br>
                <div class="form-group">
                    <label >Code : </label>
                    <input type="text" class="form-control" name="code">
                </div>
                
                <hr style="background-color:white; height:1px;">
                <span style="text-decoration:underline;">et puis introduire ses nouvelles informations</span><br><br>
                <div class="form-group">
                    <label >Nouveau nom : </label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label >Nouveau prenom : </label>
                    <input type="text" class="form-control" name="prenom">
                </div>
                <div class="form-group">
                    <label >Nouvelle date d'embauche : </label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label >Nouveau nombre d'heures de travail : </label>
                    <input type="text" class="form-control" name="nmbreheures">
                </div>
                <div class="form-group">
                    <label>Nouveau taux de rénumération par heure :</label>
                    <input type="text" class="form-control" name="taux">
                </div>
                <div class="form-group">
                    <input type="radio" name="radio" onclick="show(0)" checked value=1>    Employé
                    <span style="display:inline-block; width: 27px  ;"></span>
                    <input type="radio" name="radio" onclick="show(1)" value=0>    Vendeur
                </div>
                <div style="display:none;" id="vendeurshow">
                    <div class="form-group">
                        <label >Montant des ventes : </label>
                        <input type="text" class="form-control" name="montant">
                    </div>
                    <div class="form-group">
                        <label>Pourcentage :</label>
                        <input type="text" class="form-control" name="pourcentage">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-outline-light float-right">Envoyer</button>
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


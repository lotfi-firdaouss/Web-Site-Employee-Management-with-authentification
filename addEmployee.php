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
        <span style="text-decoration:underline;"><b>Veuiller remplir le formulaire ci-dessous pour ajouter un employé </b></span> <br><HR style="width:70%;">
        <form class="row" method="post" action="addEmployee_bd.php">
            <div class="col-lg-8">
                <div class="form-group">
                    <label >Code : </label>
                    <input type="text" class="form-control" name="code">
                </div>
                <div class="form-group">
                    <label >Nom : </label>
                    <input type="text" class="form-control" name="nom">
                </div>
                <div class="form-group">
                    <label >Prenom : </label>
                    <input type="text" class="form-control" name="prenom">
                </div>
                <div class="form-group">
                    <label >Date d'embauche : </label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label >Nombre d'heures de travail : </label>
                    <input type="text" class="form-control" name="nmbreheures">
                </div>
                <div class="form-group">
                    <label>Taux de rénumération par heure :</label>
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

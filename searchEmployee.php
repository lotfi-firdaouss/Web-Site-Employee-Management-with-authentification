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
        <div class="container">
        <span style="text-decoration:underline;"><b>Veuiller remplir le formulaire ci-dessous pour chercher un employé : </b></span> <br><HR style="width:70%;">
        <form class="" method="post" action="searchEmployee_bd.php">
        <br>
            <div class="form-check form-group row">
                <label class="col-7" style="font-size:medium; padding:0px;">Cocher si l'employé est un vendeur  </label>
                
                <input type="checkbox" class="form-check-input" name="vendeur" >
                <span style="display:inline-block; margin-left:10px; font-size:medium">Vendeur</span> 
            </div>
                
            <div class="form-group row">
                <label class="col-3" style="font-size:medium; margin-left:5 px;">Chercher selon : </label>
                <select name="attribute" class="form-control col-6" >
                    <option value="employee_code"> Code </option>
                    <option value="nom"> Nom </option>
                    <option value="prenom"> Prenom </option>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="value" style="width:76%" placeholder="entrer les informations requis ici." >
            </div>
            
            <button type="submit" class="btn btn-outline-light" style="margin-left:490px">Chercher</button>
            
        </form>
        </div>
        <BR><BR><BR>
        <BR><BR><BR>

    </div>
</div>
<?php
 require 'footer.php';
?>

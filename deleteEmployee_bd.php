<?php
 require 'header.php';
?>
<div class="container row">
    <div class="col col-lg-3">
       <?php
        require 'sidebar2.php';
       ?> 
    </div>
    <div class="col col-lg-9 class1" style="background-image:url('photos/wallpaper2.jpg'); font-size:small; background-repeat: no-repeat;
    background-size: cover;">
      <br><br><br><br>
      <div class="container ml-5">
          
        <?php
        require 'employe__bd.php';
        ?> 
        
        <?php
        $code=$_POST['code'];
        $user_fk=1;
        $employe=0;
        $nom="dd";
        $prenom="dd";
        $date='2020-02-30';
        $nmbre_heures=88;
        $taux_remuneration=5;
        $montant=56;
        $pourcentage=23;

        $employe=new Employee($code,$user_fk,$employe,$nom,$prenom,$date,$nmbre_heures,$taux_remuneration,$montant,$pourcentage);
        $employe->DeleteEmployee();

        echo '<div class="alert alert-success" role="alert" style="width:640px";>
        <h4 class="alert-heading">Opération réussie !</h4>
        <p>l\'employé a été supprimé de la base de donné du site</p>
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




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
            $user_fk=$_SESSION['user_id'];
            $employe=$_POST['radio'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $date=$_POST['date'];
            $nmbreheures=$_POST['nmbreheures'];
            $taux=$_POST['taux'];

            if($employe==0)
            {
            $montant=$_POST['montant']; 
            $pourcentage=$_POST['pourcentage']; 
            }
            else
            {
                $montant=NULL;
                $pourcentage=NULL;
            }

            $employe1=new Employee($code,$user_fk,$employe,$nom,$prenom,$date,$nmbreheures,$taux,$montant,$pourcentage);
            $employe1->CreateEmployee();

            
            echo '<div class="alert alert-success" role="alert" style="width:640px";>
            <h4 class="alert-heading">Opération réussie !</h4>
            <p>l\'employé a été ajouté à la base de donné du site</p>
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







                        

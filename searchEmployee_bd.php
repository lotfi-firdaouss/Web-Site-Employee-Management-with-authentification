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
        <div class="container">
          <span style="font-size:medium;"> Les employés trouvées : </span><br><hr><br>
          <?php

            $attribute=$_POST['attribute'];
            $value=$_POST['value'];
            if(empty($_POST["vendeur"])){
                $employe=1;
            }
            else{
                $employe=0;
            }


            try{
                $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }

            if($attribute=="code"){
                $response=$bdd->prepare("SELECT employee_code,nom,prenom,date,nmbreHeures,taux,montant,pourcentage
                FROM employees where employee_code=:value and employe=:employe");
                $response->execute(['value'=>$value,'employe'=>$employe]);        
            }
            else{
                $pattern='%'.$value.'%';
                $response=$bdd->prepare("SELECT employee_code,nom,prenom,date,nmbreHeures,taux,montant,pourcentage
                FROM employees where ".$attribute." like :pattern and employe=:employe");
                $response->execute(['pattern'=>$pattern,'employe'=>$employe]);        
            }


            echo '<table class="table table-dark table-sm">';
            echo '<tr><td>'.'Code d\'employé'.'
            </td><td>'.'Nom'.'
            </td><td>'.'Prenom'.'
            </td><td>'.'Date d\'embauche '.'
            </td><td>'.'Nombre d\'heures de travail'.'
            </td><td>'.'Taux de remunération '.'
            </td><td>'.'Montant '.'
            </td><td>'.'Pourcentage '.'
            </td></tr>';


            while($donnees=$response->fetch()) //$donnes represents the row , each time the $reponse returns something which is not null $donnes increments and goes for the next line
            {
                echo '<tr><td>'.$donnees['employee_code'].'
                </td><td>'.$donnees['nom'].'
                </td><td>'.$donnees['prenom'].'
                </td><td>'.$donnees['date'].'
                </td><td>'.$donnees['nmbreHeures'].'
                </td><td>'.$donnees['taux'].'
                </td><td>'.$donnees['montant'].'
                </td><td>'.$donnees['pourcentage'].'
                </td></tr>';
            }
            echo '</table>';
            $response->closeCursor();

            ?>
        </div>
        <BR><BR><BR>
        <BR><BR><BR>

    </div>
</div>
<?php
 require 'footer.php';
?>


                        

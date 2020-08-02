<?php
 require 'header.php';
?>
<div class="container row">
    <div class="col col-lg-3">
       <?php
        require 'sidebar2.php';
       ?> 
    </div>
    <div class="col col-lg-9 class1" style="background-image:url('photos/wallpaper2.jpg'); font-size:small; background-size:1000px;     background-repeat: no-repeat;
    background-size: cover;">
        <br><br><br><br>
        <div class="container ">
            <span style="text-decoration:underline; font-size:medium;"><b>Choisissez l'employé que vous souhaitez supprimer :</b></span> <br>
            <BR><BR>
            <div style="color:white;">
            <?php
                try{
                    $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
                }
                catch(exception $e){
                    echo 'connection failed'.$e;
                }

                $reponse=$bdd->query('SELECT * FROM employees');
            
                echo '<table class="table table-dark table-sm">';
                echo '<tr><td>'.'Code d\'employé'.'
                </td><td>'.'Employe(ou vendeur)'.'
                </td><td>'.'Nom'.'
                </td><td>'.'Prenom'.'
                </td><td>'.'Date d\'embauche '.'
                </td><td>'.'Nombre d\heures de travail'.'
                </td><td>'.'Taux de remunération '.'
                </td><td>'.'Montant '.'
                </td><td>'.'Pourcentage '.'
                </td></tr>';
                
                
                while($donnees=$reponse->fetch()) //$donnes represents the row , each time the $reponse returns something which is not null $donnes increments and goes for the next line
                {
                    echo '<tr><td>'.$donnees['employee_code'].'
                    </td><td>'.$donnees['employe'].'
                    </td><td>'.$donnees['nom'].'
                    </td><td>'.$donnees['prenom'].'
                    </td><td>'.$donnees['date'].'
                    </td><td>'.$donnees['nmbreHeures'].'
                    </td><td>'.$donnees['taux'].'
                    </td><td>'.$donnees['montant'].'
                    </td><td>'.$donnees['pourcentage'].'
                    </td><td>'.'<form action="deleteEmployee_bd.php" method="post">
                    <input type="hidden" value='.$donnees['employee_code'].' name="code">
                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>'.'</td></tr>';
                }
                echo '</table>';
                $reponse->closeCursor();
                
            ?>
            </div>

        </div>
        <BR><BR><BR>
        <BR><BR><BR>

    </div>
</div>
<?php
 require 'footer.php';
?>
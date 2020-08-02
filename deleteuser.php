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
        <div class="container ml-6">
            <span style="text-decoration:underline; font-size:medium;"><b>Choisissez l'utilisateur que vous souhaitez supprimer :</b></span> <br>
            <BR><BR>
            <div style="color:white;">
            <?php
                try{
                    $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
                }
                catch(exception $e){
                    echo 'connection failed'.$e;
                }

                $reponse=$bdd->prepare('SELECT * FROM users where code=:code');
                $reponse->execute(array('code'=>1));
            
                echo '<table class="table table-dark">';
                echo '<tr><td>'.'Role'.'
                </td><td>'.'Nom'.'
                </td><td>'.'Prenom'.'
                </td><td>'.'Nomutilisateur'.'
                </td><td>'.'Email'.'
                </td></tr>';
                
                
                while($donnees=$reponse->fetch()) //$donnes represents the row , each time the $reponse returns something which is not null $donnes increments and goes for the next line
                {
                    echo '<tr><td>'.$donnees['role'].'
                    </td><td>'.$donnees['nom'].'
                    </td><td>'.$donnees['prenom'].'
                    </td><td>'.$donnees['nomutilisateur'].'
                    </td><td>'.$donnees['email'].'
                    </td><td>'.'<form action="deleteUser_bd.php" method="post">
                    <input type="hidden" value='.$donnees['user_id'].' name="user_id">
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
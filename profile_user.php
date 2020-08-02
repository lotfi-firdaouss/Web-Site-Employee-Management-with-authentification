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

        if(isset($_SESSION['code'])){
            $code=$_SESSION['code'];
        }
        try{
            $bdd=new PDO("mysql:host=localhost;dbname=webproject","root","");
        }
        catch(exception $e){
            echo 'connection failed'.$e;
        }

        $reponse=$bdd->prepare('SELECT * FROM users where code=:code');
        $reponse->execute(array('code'=>$code));


        $donnees=$reponse->fetch();

        echo '<ul class="list-group" style="color:black; width:600px;">
        <li class="list-group-item list-group-item-info">Vos informations :</li>
        <li class="list-group-item">ROLE : '.$donnees['role'].'</li>
        <li class="list-group-item">PRENOM : '.$donnees['prenom'].'</li>
        <li class="list-group-item">NOM : '.$donnees['nom'].'</li>
        <li class="list-group-item">NOM D\'UTILISATEUR : '.$donnees['nomutilisateur'].'</li>
        <li class="list-group-item">ADRESSE EMAIL : '.$donnees['email'].'</li>
        </ul>';

        $reponse->closeCursor();
        ?>

      </div>
      <BR><BR><BR>
      <BR><BR><BR>

    </div>
</div>
<?php
 require 'footer.php';
?>

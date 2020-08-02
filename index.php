<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet.css">
    <title> TopGestion</title>
    <link rel="icon" href="photos/icon2.png">
</head>

<body>


<div class="loginbox" style="border-radius:8px;">
    <img src="photos/avatar.png" class="avatar">
    <h1>Connectez-vous</h1>
    <form method="POST" ACTION=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <!---->
        <p>Nom d'utilisateur</p>
        <input type="text" name="nomutilisateur" id="nomutilisateur" placeholder="Entrer votre nom d'utilisateur" value="<?php if(isset($_COOKIE['user_name'])){ echo $_COOKIE['user_name']; }?>">
        <p>Mot de passe</p>
        <input type="password" name="mdp" placeholder="Entrer votre mot de passe" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password']; }?>">
        <div class="row">
            <div class="col-lg-2">   <input type="checkbox" name="maintenirinfo" id="a"> </div>
            <div class="col-lg-10"> <label for="a"><small style="color:grey;">maintenir mes informations</small></label>  </div>
        </div>   <br>
        <input type="submit" name="submit" value="Se connecter" style="margin-bottom:2px;"> 
        

    </form>    
    <?php

            session_start();
            try{
                $bd_user=new PDO("mysql:host=localhost;dbname=WEBPROJECT","root","");

            }
            catch(exception $e){
                echo 'connection failed'.$e;
            }

            if(isset($_POST['submit'])){
            $username =trim($_POST['nomutilisateur']);
            $passwordAttempt =trim($_POST['mdp']);

            if((empty($_POST['nomutilisateur']))||(empty($_POST['mdp']))){
                echo '<span style="font-size:11px; font-weight:lighter; text-align:center; margin-left:34px;">Veuilez remplir tout les champs requis!</span>';
            }


            if((!empty($_POST['nomutilisateur']))&& (!empty($_POST['mdp']))){
                if (isset($_POST["maintenirinfo"]))
                {
                    setcookie('user_name',$_POST['nomutilisateur'],time()+365*24*3600,null,null,false,true);
                    setcookie('password',$_POST['mdp'],time()+365*24*3600,null,null,false,true);
                }

            
                $var=$bd_user->prepare("select code,user_id,nomutilisateur,mdp from users where nomutilisateur=:nomutilisateur");
                $var->execute(['nomutilisateur'=>$_POST['nomutilisateur']]);

                $user = $var->fetch(PDO::FETCH_ASSOC);
                if($user === false){
                    echo '<span style="font-size:11px; font-weight:lighter; text-align:center; margin-left:30px;">Incorrect mot de passe/nom d\'utilisateur!</span>';
                    
                } else{
                if(md5($passwordAttempt)===$user['mdp']){
                        
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['code']=$user['code'];
                    $_SESSION['user_name'] = $user['nomutilisateur'];
                    $_SESSION['logged_in'] = time();

                    echo 'you are connected!';
                    
                    if($user['code']==0){
                        header('Location: index_admin.php');
                    }
                    else{
                        header('Location: index_user.php');
                    }
                    exit; //terminates execution of the script
                    
                } else{
                    echo '<span style="font-size:11px; font-weight:lighter; text-align:center; margin-left:30px;">Incorrect mot de passe/nom d\'utilisateur!</span>';
                    }
                }
                } 
            }


        ?> 
</div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>

</html>
<?php
    include 'header.php';
?>

<?php

    try{
        $bd_user=new PDO("mysql:host=localhost;dbname=WEBPROJECT","root","");
    }
    catch(exception $e){
        echo 'connection failed'.$e;
    }

    $username = !empty($_POST['nomutilisateur']) ? trim($_POST['nomutilisateur']) : null;
    $passwordAttempt = !empty($_POST['mdp']) ? trim($_POST['mdp']) : null;

    if (isset($_POST["maintenirinfo"]))
        {
            setcookie('user_name',$_POST['nomutilisateur'],time()+365*24*3600,null,null,false,true);
            setcookie('password',$_POST['mdp'],time()+365*24*3600,null,null,false,true);
        }

    $var=$bd_user->prepare("select code,user_id,nomutilisateur,mdp from users where nomutilisateur=:nomutilisateur");
    $var->execute(['nomutilisateur'=>$_POST["nomutilisateur"]]);

    $user = $var->fetch(PDO::FETCH_ASSOC);
    if($user === false){
        echo 'Incorrect username / password combination!';
        header('Location: index.php');
        
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
        exit;
        
    } else{
        header('Location: index.php');
        echo 'Incorrect username / password combination!';
        }
    }
?>

<?php
    include 'footer.php';
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet2.css">
    <title> TopGestion </title>
    <link rel="icon" href="photos/icon2.png">
    <script>
    function show(x){
      if(x==1)
      document.getElementById('vendeurshow').style.display='block';
      else
      document.getElementById('vendeurshow').style.display='none';
    }
    </script>
</head>

<body>

<header>

<?php
  session_start();
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark row no-gutters">
  <a class="navbar-brand" href=<?php
    if(isset($_SESSION['code'])){
      if($_SESSION['code']==0){echo "index_admin.php";}
      else{echo "index_user.php";}
    }
    else{ header('Location:index.php');}
  
?> style="padding-left:34px">
    <img src="photos/icon2.png" width="30" height="30" >
  </a>
  <a class="navbar-brand col-3 " href=<?php
    if(isset($_SESSION['code'])){
    if($_SESSION['code']==0){echo "index_admin.php";}
		else{echo "index_user.php";}
  }
?>><SPAN class="px-md-5" style="font-family:Adobe Song Std L; font-size:x-large; padding-left:0rem!important;">TopGestion</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="col-6"></div>
  <div class="collapse navbar-collapse col-2" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
       <li class="nav-item dropdown mr-sm-10">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" 
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
            style="margin-right:0px;">
                Bienvenue chère <?php echo $_SESSION['user_name'];   ?>     
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href=<?php     
                if(isset($_SESSION['code'])){
                  if($_SESSION['code']==0){echo "profile_admin.php";}
                  else{echo "profile_user.php";}
                }
                ?> >Mon profil</a>
                <a class="dropdown-item" href="deconnexion.php"> Déconnexion</a>
            </div>
        </li>     
    </ul>
  </div>
</nav>

</header>


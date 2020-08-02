	<footer>
	<div class="jumbotron jumbotron-fluid" style="opacity:0.94;">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-md-6">
	  			<a href=<?php if($_SESSION['code']==0){echo "index_admin.php";}
				else{echo "index_user.php";}?>><h1 style="font-family:Adobe Song Std L;">TopGestion</h1><a>
			    <p class="lead">Nous sommes pas les seules mais nous sommes les meilleures !</p>
	  		</div>
	  		<div class="col-md-2 text-center">
				<a href=<?php if($_SESSION['code']==0){echo "index_admin.php";}
				else{echo "index_user.php";}?>>Page d'accueil</a><br>
				<div > <img src="photos/avatar2.png" class="avatar" width=30px height=30px> </div>
	  		</div>
	  		<div class="col-md-2 text-center">
	  		
				<a href=<?php     
                if(isset($_SESSION['code'])){
                  if($_SESSION['code']==0){echo "profile_admin.php";}
                  else{echo "profile_user.php";}
                }
                ?>>Mon profil</a>
				<div > <img src="photos/avatar.png" class="avatar" width=30px height=30px> </div>
	  		
	  		</div>
	  		<div class="col-md-2 text-center">	
				<a href="deconnexion.php">Deconnexion</a>	
				<div > <img src="photos/avatar3.png" class="avatar" width=30px height=30px> </div>
	  		
	  		</div>	
	  	</div>
	  </div>
	</div>
	<div class="container">
		<p class="text-center" style="color:white;"> @copyrights </p>
	</div>		
	</footer>   


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>

</html>
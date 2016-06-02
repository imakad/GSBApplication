<?php


/* ***** CONNEXION ***** */

 if((isset($_POST['peusdo'])) && (isset($_POST['motdepasse'])))
            {  
    
                $connexion = mysqli_connect("localhost", "root","","bdgsb");
               // addslashes retourne la chaine de caractère après 
               // avoir sécuriser les infos contre les injections
                $peusdo = addslashes($_POST['peusdo']);
                $motdepasse = addslashes($_POST['motdepasse']);
                $requete = "select pseudo,motdepasse from Admin where pseudo = '$peusdo' and motdepasse = '$motdepasse' ";
                $result = mysqli_query($connexion, $requete);
                if (mysqli_num_rows($result)> 0)
 
                {
                    {
                        header("Location:RechercheVesiteur.html");
                    }
                }
                else
                {
                    echo "ERROR : Mauvais identifiant ou mot de passe. Merci de réessayer.. ";
                }
            }    
            
  
?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>

<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="all"/>

<link rel="stylesheet" href="ratchet-v2.0.2/css/ratchet.css">
           <link rel="stylesheet" href="ratchet-v2.0.2/css/ratchet.min.css">
           <link rel="stylesheet" href="ratchet-v2.0.2/css/ratchet-theme-android.css">
           <link rel="stylesheet" href="ratchet-v2.0.2/css/ratchet-theme-android.min.css">
           <link rel="stylesheet" href="ratchet-v2.0.2/css/ratchet-theme-ios.css">
           <link rel="stylesheet" href="ratchet-v2.0.2/css/ratchet-theme-ios.min.css">
           <script src="ratchet-v2.0.2/js/ratchet.js"> </script>
           <script src="ratchet-v2.0.2/js/ratchet.min.js"> </script>
           <link rel="stylesheet" href="ratchet-v2.0.2/fonts/ratchicons.eot">
           <link rel="stylesheet" href="ratchet-v2.0.2/fonts/ratchicons.svg">
           <link rel="stylesheet" href="ratchet-v2.0.2/fonts/ratchicons.woff">
           <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
           </link>
       
</head>
	
<body>

		<div id="logo">
			
				<header id="logo" class="bar bar-nav">
			
				<img id="img" src="../img/gsblogo.png"/>
				
				</header>

			
		</div>


		<div id="connex_text"class="content-padded">
		  <h2>Connexion</h2>
		  
		</div>
		
		
<div class="media-body">

			<form id="authentifi" class="input-group" method="POST">
			  <input id="pseudo" type="text" placeholder="Nom d'utilisateur">
			  <input id="motdepasse" type="password" placeholder="Mot de passe">
			 
	
			<button class="btn btn-positive btn-block"> Connexion</button>

			</form>

</div>

		<div id="copyright">
		
				<img  src="../img/../img/mentionLegale.png"/>
			
		</div>

</body>
</html>
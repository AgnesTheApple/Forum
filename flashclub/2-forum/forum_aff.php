<!DOCTYPE html>
<html>
    <head>
		<title>FlashClub-</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="icon" type="image/png" href="images/icon.png">
		<link rel="stylesheet" href="css/forum.css">
		<link rel="stylesheet" href="css/categories.css">
		<link rel="stylesheet" href="css/aide.css"> 
		<link rel="stylesheet" href="css/menu.css"> 
    </head>
	<body >
	
		<div class="col-12">
			<div class="menu">
			</div>
			<div class="position" align="center">
				<ul class="aide">
					<li class="aide1"><A HREF="https://www.youtube.com/channel/UC60-h5I94Lj9DhYr6eZq0vg"><p>TUTORIEL</p></A></li>
					<li class="aide2"><A HREF="https://www.capturenumerique.com/tutoriels/accessoires-photographes/"><p>OUTILS</p></A></li>
				</ul>
			</div>
			<div class="position_menu" align="center">
				<ul class="menuS">
					<li class="menuS1" ><A HREF="../accueil_forum.html"><p>ACCUEIL</p></A></li>
					<li class="menuS1" ><A HREF="../1-connexion_forum/connexion.php"><p>SE CONNECTER</p></A></li>
					<li class="menuS1" ><A HREF="../1-inscription_forum/inscription.php"><p>S'INSCRIRE</p></A></li>
				</ul>
			</div>
			<div class="position2" align="center">
				<div class="diap2S">
					<A HREF="https://twitter.com/"><img class="diap2" src="images/twi.png"/></A>
					<A HREF="https://github.com/"><img class="diap2" src="images/git.png"/></A>
					<A HREF="https://www.facebook.com/"><img class="diap2" src="images/fb2.png"/></A>
				</div>
			</div>
		</div>
		<p class="salut">Le forum des passionnés de photo</p>
		<p class="titre" align="center">FlashClub-</p>
		<div class="position1" align="center">
			<img class="photo" src="images/photo.png"/>
		</div>
		<div class="position3" align="center">
			<div class="position_categories">
				<ul class="categories">
					<li class="categories1"><A HREF=""><p>DISCUSSION</p></A></li>
					<li class="categories1"><A HREF=""><p>DEBUTANT</p></A></li>
					<li class="categories1"><A HREF=""><p>INTERMEDIAIRE</p></A></li>
					<li class="categories1"><A HREF=""><p>CONFIRMER</p></A></li>
				</ul>
			</div>
			<div class="discussion">
				
				<table class="forum">
   					<tr class="header">
      					<th class="main">Sujet</th>
      					<th class="main">Date</th>
   					</tr>
   					<?php
    				while($data = $topics->fetch()) { ?>

   					<tr>
    	  			<td><a href="../3_post/post.php?titre=<?= $data['sujet'] ?>&id=<?= $data['id'] ?>"><?= $data['sujet'] ?></a></td>
    				<td><?= $data["date_creation"]; ?></td>
   					</tr>
   					<?php } ?>
				</table>
			</div>
		</div>
	</body>
</html>
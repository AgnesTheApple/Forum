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
					<li class="menuS1" ><A HREF="../accueil_connecte/accueil_forum.html"><p>ACCUEIL</p></A></li>
					<li class="menuS1" ><A HREF="../3-profil_membre/profil.php"><p>PROFIL</p></A></li>
					<li class="menuS1" ><A HREF="../1-deconnexion_forum/deconnexion.php"><p>SE DECONNECTER</p></A></li>
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
		  		<!-- <th class="main center">Sujet></th> -->
					</tr>
					<tr>
					<td><?= $auteur['pseudo'] ?></th>
		  			<td class="sub-info w10"><?= $post['sujet'] ?></th>
		  			<td><?= $post['contenu'] ?></td>
					</tr>
					
					<?php while($data1 = $auteur_reponses->fetch()) { ?>
      				<td><?= $data1['pseudo'] ?></td>
      				<?php } ?>
			
	  				<?php while($data = $reponses->fetch()) { ?>
      				<td><?= $data['contenu'] ?></td>
      				<?php } ?>	
   					
   				</table>

   				<form method="POST">
      				<textarea placeholder="Votre réponse" name="reponse" style="width:80%"></textarea><br/>
      				<input type="submit" name="submit" value="Poster ma réponse">
      			</form>
      			<p style="color:red;"><?php if(isset($erreur)) { echo $erreur; } ?></p>
			</div>
		</div>
	</body>
</html>
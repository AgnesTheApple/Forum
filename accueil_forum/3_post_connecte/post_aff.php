<!DOCTYPE html>
<html>
    <head>
		<title>FlashClub-</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="icon" type="image/png" href="../images/icon.png">
		<link rel="stylesheet" href="../3-post_css/forum.css">
		<link rel="stylesheet" href="../3-post_css/categories.css">
		<link rel="stylesheet" href="../3-post_css/aide.css"> 
		<link rel="stylesheet" href="../3-post_css/menu.css"> 
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
					<li class="menuS1" ><A HREF="../3-profil_membre/connexion_profil.php"><p>PROFIL</p></A></li>
					<li class="menuS1" ><A HREF="../1-deconnexion_forum/deconnexion.php"><p>SE DECONNECTER</p></A></li>
				</ul>
			</div>
			<div class="position2" align="center">
				<div class="diap2S">
					<A HREF="https://twitter.com/"><img class="diap2" src="../images/twi.png"/></A>
					<A HREF="https://github.com/"><img class="diap2" src="../images/git.png"/></A>
					<A HREF="https://www.facebook.com/"><img class="diap2" src="../images/fb2.png"/></A>
				</div>
			</div>
		</div>
		<p class="salut">Le forum des passionnés de photo</p>
		<p class="titre" align="center">FlashClub-</p>
		<div class="position1" align="center">
			<img class="photo" src="../images/photo.png"/>
		</div>
		<div class="position3" >
			<div class="position_categories">
				<ul class="categories">
					<li class="categories1"><A HREF="../2-forum_connecte/forum.php"><p>CHANGER DE SUJET</p></A></li>
					<li class="categories1"><A HREF="../4_nouveau_post/nouveau_post.php"><p>CREER UN SUJET</p></A></li>
				</ul>
			</div>
			<div class="discussion">
				<div class="auteur_A">
						<p class="creer_A">Céer par</p>
						<div class="createur_A"><?= get_pseudo($post['id_createur']) ?></div>
		  				<div class="sujet_A"><?= $post['sujet'] ?></div>
		  				<div class="contenu_A"><?= $post['contenu'] ?></div>
				</div>
				<div class="ac">
					<table class="discussion1">
						<?php while($data = $reponses->fetch()) { ?>
						<tr>
							<td class="auteur"><?= get_pseudo($data['id_posteur']) ?></td>
						</tr>
						<tr>
							<td><p class="reponse"><?= $data['contenu'] ?></p></td>
						</tr>
						<tr>
							<td><p class="date"><?= $data['date_heure_post'] ?></p></td>
						</tr>
						<tr>
							<td><A HREF="" style="text-decoration:none"><p class="bouton1">&#215;</p></A><hr/></td>
						</tr>
						<?php } ?>
					</table>
				</div>
   				<form method="POST">
					<table class="envoie">
						<tr>
							<td><textarea  class="texte2" placeholder="Envoyer un message" name="reponse"></textarea></td>
							<td><input class="bouton" type="submit" name="submit" value=">"></td>
						</tr>
					</table>
      			</form>
			</div>
		</div>
	</body>
</html>
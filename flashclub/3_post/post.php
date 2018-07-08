<?php
	
   	require('../php/config.php');
	
	//on check si le varible qui contient le titre du post defini ds accueil.aff.php exist
		if(isset($_GET['titre'])) {

			$titre = htmlspecialchars($_GET['titre']);
			$id = htmlspecialchars($_GET['id']);
			//on selectionne tous les champs avec lid selectionner par luser
			$post = $bdd->prepare('SELECT * FROM f_topics WHERE id = ?');
			//on place les champs dans un tablaeu
		    $post->execute(array($id));
		    $post = $post->fetch();
		    //on recupere l"auteur de post
		    $auteur = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
		    $auteur->execute(array($post['id_createur']));
		    $auteur = $auteur->fetch();
		    //recupere toute les reponse a ce poste
		    $reponses = $bdd->prepare('SELECT * FROM f_messages WHERE id_topic = ?');
		    $reponses->execute(array($id));
		    //recupere toute les reponse a ce poste
		    $reponse_auteur = $bdd->prepare('SELECT * FROM f_messages WHERE id_topic = ?');
		    $reponse_auteur->execute(array($id));
		    $reponse_auteur = $reponse_auteur->fetch();

		    //ne recupere que le pseudo du poster
		    $auteur_reponses = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
		    $auteur_reponses->execute(array($reponse_auteur['id_posteur']));


			if(isset($_POST['submit'],$_POST['reponse'])) {

				$reponse = htmlspecialchars($_POST['reponse']);

				if(isset($_SESSION['id'])) {
					if(!empty($reponse)) {

					$ins = $bdd->prepare('INSERT INTO f_messages(id_topic, id_posteur, contenu, date_heure_post) VALUES (?,?,?,NOW())');
					$ins->execute(array($id, $_SESSION['id'], $reponse));

					$erreur = "OK! Votre reponse a bien etait poste!";

					}else {
						$erreur = "Oups votre reponse est vide!!!!";
					}
				}else {
						$erreur = "oups vous n'etes pas connecter...";
				}
			}
			require('post_aff.php');
		}else {
			die('Erreur...');
		}
		
?>
		   	
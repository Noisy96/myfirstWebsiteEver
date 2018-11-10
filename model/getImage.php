<?php

	include_once('connectDB.php');

	if(isset($_GET['id'])){

		$_GET['id'] = htmlspecialchars($_GET['id']);

		$req = $bdd->prepare('SELECT id,type,DATE_FORMAT(date_pub, \'%d/%m/%Y a %h:%i:%s\') AS date_f, description,file_path FROM content WHERE id = ?');
		$req->execute(array(
			$_GET['id']
		));

		$donnees = $req->fetch();

		echo '	<div class="image-div">
					<div class="header '.$donnees['type'].'">
						<p>'.$donnees['date_f'].'</p>
					</div>
					<img src="'.$donnees['file_path'].'">
					<p class="footer">'.$donnees['description'].'</p>
				</div>
		';

		$req->closeCursor();

	}


?>
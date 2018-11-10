<?php

	include_once('connectDB.php');

	if (isset($_GET['n']) AND $_GET['n'] != '') {
		$option_array = array('L1','L2','L3','M1','M2');
		if( in_array($_GET['n'], $option_array)){

		$_GET['n'] = htmlspecialchars($_GET['n']);


		$req = $bdd->prepare('SELECT id,type,niveau,section,groupe,module,description,file_path,DATE_FORMAT(date_pub, \'%d/%m/%Y a %h:%i:%s\') AS date_f FROM content WHERE niveau = ? ORDER BY date_pub');
		$req->execute(array($_GET['n']));


		echo '<div class="pinposts-div">';

		while($donnees = $req->fetch()){
			echo '<a href="affichImage.php?id='.$donnees['id'].'" style="background-image:url('.$donnees['file_path'].');">
					<div class="pinpost">
						<p class="header '.$donnees['type'].'">'.$donnees['date_f'].'</p>
						<p class="title">'.$donnees['module'].'</p>
						<p class="target">'.$donnees['niveau'];
						if($donnees['section'] != 0 AND $donnees['groupe'] != 0) {
							echo  ' - S'.$donnees['section'].' – G'.$donnees['groupe'].'</p>';
						}
						echo '<p class="desc">'.$donnees['description'].'</p>
					</div>
				</a>';
			}
		echo '</div>';
		$req->closeCursor();
		}
		else echo '<center><h1>Nice try !</h1></center>';
	}
	else echo '<center><h1>Nice try !</h1></center>';
?>
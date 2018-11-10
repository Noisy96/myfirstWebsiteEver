<?php

	include_once('connectDB.php');

	//Getting the whole list of teachers
	$req = $bdd->query('SELECT nom, prenom, grade, email FROM liste_prof ORDER BY nom');

	while ($donnees = $req->fetch()){
		echo '<tr><td>'.$donnees['nom'].'</td><td>'.$donnees['prenom'].'</td><td>'.$donnees['grade'].'</td><td>'.$donnees['email'].'</td></tr>';
	}
	
?>
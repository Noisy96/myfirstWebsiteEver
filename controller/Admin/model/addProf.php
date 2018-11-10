<?php
	
	include_once('../../../model/connectDB.php');

	$res = false;

	if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['grade']) AND isset($_POST['email'])){
		$n = htmlspecialchars($_POST['nom']);
		$p = htmlspecialchars($_POST['prenom']);
		$g = htmlspecialchars($_POST['grade']);
		$e = htmlspecialchars($_POST['email']);

		$req = $bdd->prepare('INSERT INTO liste_prof(id,nom,prenom,grade,email) VALUES(\'\',:n,:p,:g,:e)');
		$req->execute(array(
			'n' => $n,
			'p' => $p,
			'g' => $g,
			'e' => $e
		));

		$res = true;
	}
	header('Location: ../index.php?test='.$res);
?>
<?php

	$res = false;


	if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['niveau-etude'])){
			$header = 'Nom et prénom : '.$_POST['name'].'\nE-Mail : '.$_POST['email'].'\nNuméro de téléphone : '.$_POST['nmr-telephone'].'\nNiveau : '.$_POST['niveau-etude'];
			mail('exemple@gmail.com',$_POST['objet'],$_POST['message'],$header);
			$res = true;

	}
	header('Location: ../controller/contactez-nous.php?test='.$res);

?>
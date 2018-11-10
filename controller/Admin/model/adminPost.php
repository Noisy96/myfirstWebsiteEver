<?php

	$res = false;
	/*echo '<pre>';
	print_r($_FILES);
	echo '</pre><br><br>';*/

	if (!($_FILES['file']['error'] > 0)) {
		$extensions_valides = array('jpg','jpeg','gif','png');
		$extension_upload = strtolower( substr( strrchr($_FILES['file']['name'], '.'), 1));
		if( in_array($extension_upload, $extensions_valides)){

		
		include_once("../../../model/connectDB.php");

		$t = htmlspecialchars($_POST['type']);
		$n = htmlspecialchars($_POST['niveau']);
		$s = htmlspecialchars($_POST['section']);
		$g = htmlspecialchars($_POST['groupe']);
		$m = htmlspecialchars($_POST['module']);
		$de = htmlspecialchars($_POST['description']);
		$d = htmlspecialchars($_POST['date_exp']);


		$req = $bdd->prepare('INSERT INTO content(id,type,niveau,section,groupe,module,description,date_pub,date_exp,file_path) VALUES(\'\',:t,:n,:s,:g,:m,:de,NOW(),DATE_ADD(CURDATE(),INTERVAL '.$d.'),:fp)');
		$req->execute(array(
			't' => $t,
			'n' => $n,
			's' => $s,
			'g' => $g,
			'm' => $m,
			'de' => $de,
			'fp' => "default"
		));


		$id = $bdd->lastinsertId();



			if ($_POST['type'] == 'actu'){

				$new_name = 'actu_'.$n.'_'.$s.'_'.$g.'_'.$id.'.'.$extension_upload;
				$_FILES['file']['name'] = $new_name;

				$new_path = '../view/content/actu/'.$new_name;
				$bdd->exec('UPDATE content SET file_path = \''.$new_path.'\' WHERE id = '.$id);

				move_uploaded_file($_FILES['file']['tmp_name'], '../../'.$new_path);

				//For displaying a comfirmation message for the user using javascript
				$res = true;
			}
			else if($_POST['type'] == 'note'){

 				$new_name = 'note_'.$n.'_S'.$s.'_G'.$g.'_'.$id.'.'.$extension_upload;
				$_FILES['file']['name'] = $new_name;

				$new_path = '../view/content/note/'.$new_name;
				$bdd->exec('UPDATE content SET file_path = \''.$new_path.'\' WHERE id = '.$id);

				move_uploaded_file($_FILES['file']['tmp_name'], '../../'.$new_path);

				//For displaying a comfirmation message for the user using javascript
				$res = true;
			}
			else if($_POST['type'] == 'emp'){

				$new_name = 'emp_'.$n.'_S'.$s.'_'.$g.'_'.$id.'.'.$extension_upload;
				$_FILES['file']['name'] = $new_name;

				$new_path = '../view/content/emp/'.$new_name;
				$bdd->exec('UPDATE content SET file_path = \''.$new_path.'\' WHERE id = '.$id);

				move_uploaded_file($_FILES['file']['tmp_name'], '../../'.$new_path);

				//For displaying a comfirmation message for the user using javascript
				$res = true;
			}
			else {
				echo 'Erreur Inconnnu !';
			}
	
		}

		else echo 'Type de fichier non valide'; 
	}

	else echo 'Erreur lors de transfert !';

	header('Location: ../index.php?test='.$res);

?>
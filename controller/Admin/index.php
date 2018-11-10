<!DOCTYPE html>
<html>
<head>
	<title>Administrator Panel</title>
	<link rel="stylesheet" type="text/css" href="../../view/style/desktop.css">
</head>
<body>
	<div id="b-body">

		<script type="text/javascript">
			<?php
				if($_GET['test'])?>
					alert("Publié !");
		</script>

		<header id="admin-header">
			<a href="../accueil.php"><img src="../../view/icons/logo.png"></a>
			<h1>Panneau de control</h1>
		</header>

		<div class="admin-navbar">
			<ul>
				<a href=""><li>Ajouter</li></a>
				<a href=""><li>Supprimer</li></a>
				<a href=""><li>Modifier</li></a>
			</ul>
		</div>

		<div class="admin-form">
			<form action="model/adminPost.php" method="post" enctype="multipart/form-data">
				<div class="admin-form-header">
					<p>Importer un fichier image <span>(Actualité/Notes/Emploi du temps)</span></p>
				</div>
					<p><label for="nameid">Type : </label>
						<select name="type" id="nameid">
							<option value="actu">Actualité</option>
							<option value="note">Note</option>
							<option value="emp">Emploi du temps</option>
						</select>
					</p>
					<p><label for="niveauid">Niveau : </label>
						<select name="niveau" id="niveauid">
							<option value="T">concèrne tout les niveaux</option>
							<option value="L1">L1</option>
							<option value="L2">L2</option>
							<option value="L3">L3</option>
							<option value="M1">M1</option>
							<option value="M2">M2</option>
						</select>
					</p>
					<p><label for="sectionid">Section : </label><input type="number" name="section" id="sectionid" placeholder="Ex: 1" max="10" min="1" value=""></p>
					<p><label for="groupeid">Groupe : </label><input type="number" name="groupe" id="groupeid" placeholder="Ex: 1" max="10" min="1" value=""></p>
					<p><label for="moduleid">Module : </label><input type="text" name="module" id="moduleid" placeholder="Ex: Programmation Orienté Object ou (POO)" value=""></p>
					<p><label>Description : </label><textarea name="description" id="description" placeholder="Ex : consultation sera faite 12/12/2018 dans la salle..." maxlength="255"></textarea></p>

					<p><label for="date_expid">Date d'expiration : </label>
						<select name="date_exp" id="date_expid">
							<option value="3 MONTH">3 Mois</option>
							<option value="6 MONTH">6 Mois</option>
							<option value="1 YEAR">1 an</option>
						</select>
					</p>
					<!-- For setting a limit to the download size -->
					<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />

					<p><label for="fileid">Fichier (JPG/PNG) : </label><input type="file" name="file" id="fileid" required></p>
					<button type="submit">Envoyer</button>
			</form>
			<form action="model/addProf.php" method="post">
				<div class="admin-form-header">
					<p>Ajoute des enseignants</p>
				</div>
					<p><label for="nomid">Nom : </label><input type="text" name="nom" id="nomid" placeholder="Ex: John" required></p>
					<p><label for="prenomid">Prénom : </label><input type="text" name="prenom" id="prenomid" placeholder="Doe" required></p>
					<p><label for="gradeid">Grade : </label>
						<select name="grade" id="gradeid">
							<option value="PR">PR</option>
							<option value="MCA">MCA</option>
							<option value="MCB">MCB</option>
							<option value="MAA">MAA</option>
							<option value="MAB">MAB</option>
						</select>
					</p>
					<p><label for="emailid">E-Mail : </label><input type="email" name="email" id="emailid" placeholder="exemple@gmail.com" required></p>
				<button type="submit">Envoyer</button>
			</form>
		</div>

	</div>
</body>
</html>
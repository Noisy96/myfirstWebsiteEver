<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 700px)" href="../view/style/mobile.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 700px)" href="../view/style/desktop.css">
	<title>Licence</title>

	<!-- This part here is for indicating which page u r at-->
	<?php
		if($_GET['n'] == 'M1' OR $_GET['n'] == 'M2'){
			echo '
			<style type="text/css">
				@media screen and (min-width: 700px){
					#master, #master p a {
						background-color: black;
						color: gold;
						border-top-left-radius: 15%;
						border-top-right-radius: 15%;
					}
				}
			</style>';
		}
		else {
			echo '
			<style type="text/css">
				@media screen and (min-width: 700px){
					#licence, #licence p a{
						background-color: black;
						color: gold;
						border-top-left-radius: 15%;
						border-top-right-radius: 15%;
					}
				}
			</style>';
		}
	?>
	
</head>
<body>
	<div id="a-body">

		<?php
			include_once('../view/header.php');
		?>
		<div class="pinpost-key">
			<div class="actu-key">Actualité</div>
			<div class="note-key">Note</div>
			<div class="emp-key">Emploi du temps</div>
		</div>


		<?php
			include_once('../view/posts.php');
			include_once('../view/footer.php');
		?>

	</div>
</body>
</html>
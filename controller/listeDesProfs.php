<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 700px)" href="../view/style/mobile.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-width: 700px)" href="../view/style/desktop.css">
	<title>Liste des professeurs</title>

	<!-- This part here is for indicating which page u r at-->
	<style type="text/css">
		@media screen and (min-width: 700px){
			#liste, #liste a {
				background-color: black;
				color: gold;
				border-top-left-radius: 15%;
				border-top-right-radius: 15%;
			}
		}
	</style>

</head>
<body>
	<div id="a-body">

		<?php 
			include_once('../view/header.php');
			include_once('../view/listeTableProfs.php');
			include_once('../view/footer.php');
		?>

	</div>
</body>
</html>
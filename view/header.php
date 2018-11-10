<header>
	<div id="a-header">
		<a href="accueil.php" id="logo"><img src="../view/icons/logo.png"></a>
		<a id="nav-button"><img src="../view/icons/menu.png"></a>
	</div>
	<nav class="navbar">
		<ul class="sous-navbar1">
			<li id="accueil"><a href="accueil.php">Accueil</a></li>
			<li id="licence">
				<p><a href="licence.php">Licence</a><a id="licence-button">Ξ</a></p>
					<ul class="sous-navbar2 licence-nav">
						<li><a href="affichage.php?n=L1">1<sup>er</sup>  Année</a></li>
						<li><a href="affichage.php?n=L2">2<sup>éme</sup> Année</a></li>
						<li><a href="affichage.php?n=L3">3<sup>éme</sup> Année</a></li>
					</ul>
			</li>
			<li id="master">
				<p><a href="master.php">Master</a><a id="master-button">Ξ</a></p>
					<ul class="sous-navbar2 master-nav">
						<li><a href="affichage.php?n=M1">1<sup>er</sup>  Année</a></li>
						<li><a href="affichage.php?n=M2">2<sup>éme</sup> Année</a></li>
					</ul>
			</li>
			<li id="liste"><a href="listeDesProfs.php">Liste des enseignants</a></li>
			<li id="contact"><a href="contactez-nous.php">Contactez-nous</a></li>
		</ul>
	</nav>
	<script src="../view/JavaScript/menu-drop.js"></script>
	<script>
		$(document).ready(function(){
			$("#nav-button").on("click",function(){
				$(".navbar .sous-navbar1").toggleClass("open");
			});
			$("#licence-button").on("click",function(){
				$(".navbar .licence-nav").toggleClass("open");
			});
			$("#master-button").on("click",function(){
				$(".navbar .master-nav").toggleClass("open");
			});
		});
	</script>
</header>
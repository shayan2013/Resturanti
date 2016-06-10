
<?php 
	session_start();
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link rel="stylesheet" type="text/css"
 href="css/style.css">
	</head>
	<body>
		<section id="wrapper">
			<section id="menue-left">
				<nav id='cssmenu'>
					<ul>
						<li class='active'><a href='#'>Home</a></li>
						<?php
							if (isset($_SESSION['loggedIn'])){
								if ($_GET['auswahl']=="logout"){
									unset($_SESSION['username']);
								}
							}
							if (isset($_SESSION['username'])) {	
						?>
								<li><a href="index.php?auswahl=logout">Log out</a></li>
						<?php	
							$_SESSION['loggedIn'] = true;
							} else {
								if(isset($_SESSION['loggedIn'])){
									unset($_SESSION['loggedIn']);
								}
						?>
								<li><a href="anmeldeformular.php?auswahl=login">Log in</a></li>
						<?php 
							} 
						?>
						<li><a href='#'>Spielregeln</a></li>
						<li><a href='#'>AGB</a></li>
						<li><a href='#'>Kontakt</a></li>
					</ul>
				</nav>
				</br>
				</br>
				<?php
					if (isset($_SESSION['username'])) {
						echo "Herzlich Willkommen ".$_SESSION['username'];
					} else {
						echo "Bitte erst einloggen";
					}
				?>
				
			</section>
			<section id="Backgammon">
				<strong>Backgammon</strong>
			</section>
			<section id="Durak">
				<strong>Durak</strong>
			</section>
			<section id="footer">
				<strong> Copyright &copy; <a href="#" title="Copy right">2016</a></strong>
			</section>
		</section>
	</body>
</html>
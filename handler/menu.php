<!DOCTYPE html>
<html>
	<body>
		<h2>Menu :</h2>
			<ul>
				<li><a href="<?= route('/home') ?>">Tableau de bord</a></li>
				<li><a href="<?= route('/races') ?>">Présentation des races jouables</a></li>
				<li><a href="<?= route('/mondes') ?>"> Présentation des mondes jouables</a></li>
				<li><a href="<?= route('/des') ?>">Principe des dés en JDR</a></li>
				<li><a href="<?= route('/games') ?>">Voir les parties de JDR</a></li>
				<li><a href="<?= route('/logout') ?>">Déconnexion</a></li>
			</ul>
	</body>
</html>
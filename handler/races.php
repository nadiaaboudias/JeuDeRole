<?php
	// Initialiser la session
	require('../index.php');
?>

<!DOCTYPE html>
<html>
<body>
<head>
    <h1>Présentation des races</h1>
</head>
    <img src="images/nain.jpg" alt="Photo nain" width="250" height="290">
    <p> Les Nains sont petits, trapus et vigoureux, avec des membres courts et robustes. <br/>
        Loyaux et téméraires, ce sont de farouches guerriers qui se battront jusqu'à la mort, quel que soit l'ennemi en face.<br/>
        Caractéristiques : <br/>
        - (+2) en force <br/>
        - (-2) en agilité 
    </p>

    <img src="images/elfe.jpg" alt="Photo nain" width="250" height="350">
    <p> Les elfes ont tendance à considérer les autres races comme trop impulsives et irréfléchies et à les rejeter. <br/>
        Ils sont cependant très doués pour cerner les personnalités et les qualités. <br/>
        Ainsi, habituellement, il évite de prendre un nain pour voisin, mais il sera le premier à reconnaître son habileté à la forge.<br/>
        Caractéristiques : <br/>
        - (+2) en agilité <br/>
        - (-2) en force 
    </p>

    <img src="images/loup-garou.jpg" alt="Photo loup-garou" width="250" height="315">
    <p> Les loups-garous sont des humains pouvant se transformer en loup-garou sous certaines conditions. <br/>
        Il faut qu'ils aient accumulé assez de rage en eux afin de pouvoir libérer leur pouvoir de transformation. <br/>
        Lorsqu'ils sont sous cette forme, ils n'ont plus le contrôle d'eux-mêmes et dévastent tout sur leur passage. <br/>
        Caractéristiques : <br/>
        - (+5) en force sous leur forme de loup-garou <br/>
        - (-5) en intelligence sous leur forme de loup-garou 
    </p>

    <img src="images/vampire.png" alt="Photo vampire" width="250" height="300">
    <p> Doués en enchantement et en magie noire, les vampires vivent en dehors de toute société. <br/>
        Tout leur potentiel est révélé lorsque la nuit tombe. Leur caractéristiques physiques et mentales sont alors décuplées. <br/>
        Ils en profitent pour tuer les voyageurs égarés afin de se nourrir de leur sang. <br/>
        Caractéristiques : <br/>
        - (+10) en force et en intelligence pendant la nuit <br/>
        - (-5) en force et intelligence pendant le jour 
    </p>

    <img src="images/ogre.jpg" alt="Photo ogre" width="250" height="315">
    <p> Les ogres sont des créatures féroces prêtes à tout pour fracasser leur ennemi. <br/>
        De plus, certains ogres peuvent mesurer jusqu'à 4 mètres de hauteur. <br/>
        Fort heureusement pour nous, leur force est proportionnelle à leur stupidité. <br/>
        Caractéristiques : <br/>
        - (+10) en force <br/>
        - (-5) en mémoire et intelligence 
    </p>

   <?php require('menu.php'); ?>
</body>
</html>

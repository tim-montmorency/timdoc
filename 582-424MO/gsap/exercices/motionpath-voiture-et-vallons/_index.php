<?php
/**
 * @type     exercice
 * @title    GSAP motionPath - Voiture et vallons
 * @icon     images/thumb-voiture-et-vallons.jpg
 * @abstract Pour cet exercice, nous allons animer la voiture qui suivra le parcours des vallons du paysage.
 */
?>

<p>Pour cet exercice, nous allons animer la voiture qui suivra le parcours des vallons du paysage.</p>
   
<p>Aperçu du résultat 👇</p>
<clipasset src='images/voiture-et-vallons.mp4'></clipasset>

<grostitre>Matériel</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/mdzwqGG/26d8ea334def01b68a2ba4db13988b43">Pen de départ</doclink>

<warning>Vous n’avez qu’à ajouter JavaScript <em>(de pas modifier le&nbsp;HTML ou le CSS)</em>. Par contre, il est fortement conseillé de jeter un oeil au CSS et HTML pour comprendre la structure.</warning>  

<p>Les librairies GSAP et motionPath sont déjà inclues dans le Pen, vous laissant ainsi vous concentrer sur l'animation GSAP à réaliser.</p>

<grostitre>Requis</grostitre>

<checklist>
Explorez le HTML pour mieux comprendre comment le &lt;<code>svg</code>&gt; est construit. Remarquez qu'il contient plusieurs tracés &lt;<code>path</code>&gt; et 2 groupes de tracés &lt;<code>g</code>&gt;. Le premier correspond aux vallons (sol), le deuxième groupe correspont à tous les tracés de la voiture. Des <em>id</em> ont été ajoutés à certains éléments clés afin de les styliser en CSS et les manipuler en JavaScript.
Pour vous aider à visionner la "boîte" qui contient tous les éléments de la voiture, dans le HTML, changez la valeur de <code>fill-opacity</code> (ligne 5) pour 1. Vous verrez ainsi un arrière-plan rouge derrière la voiture. C'est simplement un rectangle que j'ai ajouté dernière la voiture lorsque j'ai créé le SVG dans Illustrator. Ça nous permet de mieux comprendre les limites externe de l'élément graphique.
Explorez maintenant le CSS, comment le SVG a été redimensionné et placé dans ton conteneur. Inspirez-vous en pour votre projet.
En JavaScript, à la ligne 1, ajoutez la ligne pour indiquer à GSAP que MotionPath est disponible.
Dans la variable <em>animation</em> déjà existante, animez la voiture afin qu'elle suive le tracé des vallons.
Assurez-vous que la voiture soit toujours alignée avec le tracé du parcours.
Décommentez la ligne du <code>eventListener</code> afin que l'animation s'active à chaque clique dans l'écran.
Assurez-vous que la tête de la voiture s'oriente toujours sur le parcours (la voiture doit s'incliner dans le sens de la montagne).
Démarrez le parcours au début du tracé et arrêtez le à 55% de celui-ci (on verra la voiture frêner tout à droite).
Changez la position du point de référence de la voiture de sorte que le point de rotation ne soit pas en haut à gauche de la voiture mais plutôt près du bas et du centre horizontal (combinez <code>xPercent</code>,<code>yPercent</code> et <code>alignOrigin</code>).
Dans le HTML, rechangez la valeur de <code>fill-opacity</code> du tracé <em>.st1</em> (ligne 5) à 0 pour éliminer l'arrière-plan rouge.
</checklist>


<grostitre>Notes de cours 📚</grostitre>
<?php intlink("../../parcours-mouvement/") ?>
<?php
/**
 * @type     article
 * @title    Cinemachine
 * @icon     images/icon.png
 * @abstract Mouvement de la caméra
 */
?>

<p class="spacer">Cinemachine est une composante qui vous permet de mieux contrôler la caméra 2D de votre jeu. Cinemachine ne vient pas par défaut, c'est un paquet qu'on doit importer dans Unity.</p>


<dots></dots>

<grostitre>Importer Cinemachine</grostitre>
<p>Si vous êtes familiers avec le Package Manager, cherchez Cinemachine dans le Unity Registry et Importez le dans votre projet. Sinon suivez cette procédure détaillée:</p>
<checklist>
    Ouvrez le Package Manager depuis la barre de menu Window. 
    En haut à gauche, appuyez sur le menu déroulant Packages et sélectionnez Unity Registry.
    Dans la liste qui s'affiche à gauche, recherchez Cinemachine et appuyez dessus. 
    Appuyez sur Install pour installer le paquet et sur Import dans la fenêtre qui s'ouvre. 
    Une fois que c'est installé, sortez du Package Manager. 
    Dans le menu GameObject, vous devriez maintenant voir un sous-menu Cinemachine. 
</checklist>

<dots></dots>

<grostitre>Configurer une caméra 2D</grostitre>
<checklist>
    La première étape pour créer une caméra Cinemachine est d'aller dans le menu GameObject, Cinemachine, 2D Camera. Une fois que c'est créé, vous pouvez nommer votre caméra. Vous verrez alors apparaître un icône rouge à côté de votre Main Camera, c'est parce que la caméra Cinemachine contrôle maintenant celle-ci.
    Si jamais vous souhaitez que votre caméra suive un objet, vous pouvez glissez cet objet dans le paramètre Follow de la caméra Cinemachine. Habituellement, on glisse le joueur ici, vous pouvez déjà appuyer sur Play pour tester. Normalement tout devrait fonctionner.
    Ensuite, nous pouvons modifier les paramètres de la section Body pour ajuster les mouvements de la caméra par rapport au personnage. 

</checklist>

<dots></dots>

<grostitre>Paramètres de la caméra virtuelle</grostitre>
<p>Voici une liste des paramètres avec lesquels on peut jouer dans la section Body de la composante CinemachineVirtualCamera:</p>
<p><b>Tracked Object Offset:</b> Ce paramètre permet de déterminer quel point de l'objet doit être suivi. Par défaut, on suit le centre de notre personnage, mais on pourrait changer le point au besoin en ajoutant un offset.</p>
<p><b>Lookahead:</b> Les paramètres Lookahead permettent à la caméra de prendre de l'avance sur le personnage, ainsi si on se tourne vers la droite, la caméra ne sera pas centrée, elle sera un peu plus à droite. Plus le lookahead time est grand, plus la caméra aura de l'avance sur nous. On peut utiliser le paramètre Smoothing pour s'assurer que la caméra reste fluide dans ses mouvements. Pour ce qui est de la case Ignore Y, on peut la cocher si on ne veut pas que la caméra aille plus haut que nous dans les sauts.</p>
<p><b>Damping:</b> Ce paramètre sert à rendre le mouvement de la caméra plus fluide. Si on le met à 0, la caméra suivra notre joueur sans déroger. Par contre, plus on met un chiffre élevé, plus la caméra sera fluide et prendra son temps pour rejoindre le joueur. Quand vous arrêterez de bouger, la caméra mettra quelques secondes pour vous rejoindre. Cocher Target movement permet de ne pas avoir de damping lorsque la caméra fait une rotation, il s'appliquera uniquement sur le mouvement.</p>
<p><b>Screen X ou Y:</b> Ce paramètre permet de modifier la position de la caméra par rapport au joueur, on peut la déplacer si on ne veut pas que le joueur soit parfaitement centré.</p>
<p><b>Dead Zone:</b> La dead zone délimite une zone à l'intérieur de laquelle la caméra ne bougera pas. Si on la laisse à 0, dès qu'on bouge notre personnage, la caméra suit. Si on agrandit la zone, cela nous permet de bouger un peu sans être suivi. Aussitôt qu'on atteint les limites de la dead zone, on recommencera à être suivi.</p>

<dots></dots>

<grostitre>Fond qui suit la caméra</grostitre>
<p>Pour le fond de votre jeu (Background), il se peut que vous n'ayez pas envie de dessiner l'univers au complet. Ainsi, ce que vous pourriez faire est de faire en sorte que votre fond suit la caméra en tout temps. Pour ce faire, vous pouvez écrire un script ou encore simplement mettre votre objet Background comme enfant de la Main Camera. L'avantage du script est que vous pourriez bouger sur un axe seulement, ainsi le ciel ne changerait pas de position quand on monte, seulement quand on se déplace de gauche à droite.</p>
<?php
/**
 * @type     exercice
 * @title    Bend it
 * @icon     images/thumb.jpg
 * @abstract Cet exercice vous permettra d'animer un arbre avec l'effet Bend it.  
 */
?>


<grostitre>Matériel</grostitre>

<p>Importez le fichier Illustrator suivant dans un nouveau projet After Effects:</p>
<doclink href="https://cmontmorency365-my.sharepoint.com/:u:/g/personal/lora_boisvert_cmontmorency_qc_ca/ESz1fLdIdnpOmwPS67Hp6tYBaEf4S9LIdNb1Y2zBKnWtNA?e=EvDAtL">Homme et plante</doclink>

<dots></dots>

<grostitre>Étapes arbre</grostitre>
<p>Le but de l’exercice est d'utiliser l’effet bend it pour animer un arbre qui plie à gauche et à droite. Il faudra également appliquer une rotation décalée par rapport au bend pour rendre le tout plus naturel.  </p>
<checklist>
Créer une composition à partir du fichier Illustrator Homme et plante.  
Pour éviter de couper la forme lorsqu’on l’anime, on fait une précomposition avec l’arbre jaune. Clic droit sur l’arbre, choisir précomposition.  
On double-clic sur le calque d’arbre. Une fois entré dans le calque, on fait clic droit, paramètres de composition. On élargit ensuite le canva de notre arbre pour ne pas le couper lorsqu’il va plier d’un côté et de l’autre.  
On sort de la précomposition.  
Sélectionner l’arbre jaune et lui appliquer l’effet Bend it.  
Placer le point de début (start) sur l’endroit stable, donc à la base du tronc de notre arbre.  
Placer le point de fin à l’endroit qui bouge, donc au sommet de l’arbre.  
Positionner le point d’ancrage de l’arbre à la base du tronc.  
Créer une première image clé du paramètre bend avec une petite inclinaison vers la gauche.  
Créer une deuxième image clé un peu plus loin avec un bend de l’arbre vers la droite.  
Enfoncer la touche alt, puis appuyer sur le chronomètre du paramètre Bend pour ouvrir la fenêtre expression.  
Inscrire loopOut(‘’pingpong’’) pour que l’animation joue en boucle.  
Ajouter une animation de rotation pour que l’arbre passe de 0 à 4 degrés en même temps que l’arbre bend à droite.   
Utiliser l’expression loopOut(‘’pingpong’’) pour que cette rotation soit en continu elle aussi.  
Sélectionner les keyframes de rotation et les décaler par rapport à ceux du bend.  </checklist>

<dots></dots>
<grostitre>Étapes copie sapin</grostitre>
<p>Une fois que l’animation de bend créée, la copier sur le sapin.  </p>
<checklist>
Créer une précomposition plus large pour le sapin.  
Aller sur l’arbre jaune et cliquer sur u pour afficher seulement les paramètres animés. Sélectionner ces paramètres et faire copier (cmd + c).  
Aller sur le sapin et faire coller (cmd + v).  
Ajuster les points de bend et d’ancrage pour que l’animation fonctionne.   </checklist>


<dots></dots>


<grostitre>Tutoriel 📚</grostitre>
<p><doclink href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/lora_boisvert_cmontmorency_qc_ca/EeKWTIm30fFEpMaDd6H-vYIBsEfqLN6LBg33ne71jRAvOQ?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=fBj915">Bend it</doclink></p>
<iframe src="https://cmontmorency365-my.sharepoint.com/personal/lora_boisvert_cmontmorency_qc_ca/_layouts/15/embed.aspx?UniqueId=894c96e2-d1b7-44f1-a4c6-8377a1febd82&embed=%7B%22ust%22%3Atrue%2C%22hv%22%3A%22CopyEmbedCode%22%7D&referrer=StreamWebApp&referrerScenario=EmbedDialog.Create" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen title="01_vent_dans_arbres_bend_it.mov"></iframe>
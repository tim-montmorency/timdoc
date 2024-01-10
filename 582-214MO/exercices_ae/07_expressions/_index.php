<?php
/**
 * @type     article
 * @title    Exercice 07_Expressions
 * @icon     images/icon.png
 * @abstract Wiggle et loop out
 */
?>



<p class="spacer"> Cet exercice comporte deux parties, le loop out et le wiggle. </p>
<dots></dots>

<grostitre>Le loop Out</grostitre>

<grostitre>Étapes</grostitre>
<p>Le but de l’exercice est d'expérimenter les expressions pour créer une animation en boucle d’un cercle qui monte et descend.  </p>
<checklist>
Créer une nouvelle composition 
Créer un cercle en bas à gauche de la composition.  
Créer une image clé avec la position du cercle. Placer votre curseur à trois seconde, déplacer le cercle en bas à droite de l’écran et créer une deuxième image clé.  
Sélectionner les deux images clés, faire un clic droit, puis sélectionner Interpolation d’images clés. Dans la boîte interpolation spatiale, choisir Bézier, puis faire ok.  
Bouger les poignées pour que le cercle monte, puis redescende dans un arc.  
Pour répéter l’animation plusieurs fois, enfoncer alt puis cliquer sur le chronomètre du paramètre position.  
Dans la zone expression, inscrire loopOut(). Regardez le résultat. 
Ensuite, changer le texte pour le suivant : loopOut(‘’pingpong’’). 
</checklist>


<dots></dots>


<grostitre>Notes de cours 📚</grostitre>
<p><a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/lora_boisvert_cmontmorency_qc_ca/Ed5kOzFSJEdJn9rUp9h5L7EBg0ddVSLLF2N9RinwAjRhlQ?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=NxTFYe">Loop Out</a></p>
<dots></dots>

<grostitre>Wiggle</grostitre>

<grostitre>Étapes dans les deux axes</grostitre>
<p>Le but de l’exercice est d'utiliser l’expression Wiggle pour faire bouger un cercle de façon aléatoire. </p>
<checklist>
Créer une nouvelle composition. 
Créer un cercle.  
Appuyer sur P pour ouvrir la position du cercle.  
Enfoncer la touche alt, puis appuyer sur le chronomètre du paramètre position pour ouvrir l’éditeur d’expression.  
Inscrire wiggle(). Entre les parenthèses, le premier chiffre sera la fréquence par seconde, donc le nombre de fois que l’élément se déplace par seconde. Le deuxième chiffre est l’amplitude, combien de pixel vers le haut et le bas notre élément se déplace. Essayer wiggle (2,300).  
Vous pouvez changer les chiffres pour voir ce que ça fait.  
Appliquer un flou de mouvement en cochant le paramètre sur votre calque. N’oubliez pas d’activer le flou dans votre timeline aussi.    </checklist>

<grostitre>Étapes dans les axes séparés</grostitre>
<p>Le but de l’exercice est de faire bouger un cercle de façon aléatoire aussi, mais seulement sur l’axe des X. </p>
<checklist>
Créer une copie du cercle. 
Faire un clic droit sur le paramètre position du cercle et choisir séparer les dimensions.  
Enfoncer la touche alt, puis appuyer sur le chronomètre du paramètre position pour ouvrir l’éditeur d’expression. 
Inscrire wiggle(4,300). 
Ce cercle bouge seulement à l’horizontale. On pourrait le faire sur Y pour qu’il bouge verticalement.      
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>
<p><a href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/lora_boisvert_cmontmorency_qc_ca/ET7XALE-9OxOkTgWVtxjKWwBF3jdqLzs_VvNU80lY869IA?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=QiQvDZ">Wiggle</a></p>
<dots></dots>


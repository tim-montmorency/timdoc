<?php

/**
 * @type     exercice
 * @title    Consignes - Roue de fortune
 * @icon     images/thumb.png
 * @abstract our cet exercice nous allons animer une scène basée sur le mythique jeu télévisé Roue de fortune (Wheel of fortune)!
 */
?>

<p>Pour cet exercice nous allons animer une scène basée sur le mythique jeu télévisé Roue de fortune (Wheel of fortune)!</p>

<dots></dots>

<p>Aperçu du résultat 👇</p>

<clipasset src='videos/roue-de-fortune-apercu.mp4'></clipasset>


<dots></dots>

<grostitre>Matériel</grostitre>
<doclink href="fichiers/">Dossier de départ 📁</doclink>



<warning>Vous n’avez qu’à écrire du HTML et du JavaScript <em>(nul besoin de modifier le CSS)</em>. La librairie Bootstrap est aussi déjà incorporée pour&nbsp;vous.</warning>



<dots></dots>

<grostitre>Mise en page</grostitre>

<checklist>
Créez une structure de mise en page Bootstrap standard et affichez les <em>instructions</em> et la <em>scène</em> en deux colonnes distinctes.<br>Le fond turquoise avec les coins arrondis et la ligne blanche devraient apparaitre si votre structure est complète.
</checklist>

<checklist>
Faites en sorte que les deux colonnes affichent l'une en dessous de l'autre par défaut.
</checklist>
<img src="images/roue-de-fortune-xs.png">

<checklist>
À partir du breakpoint MD, les deux colonnes doivent s'afficher côte à côte. La colonne des <em>instructions</em> doit prendre le quart de la largeur de la rangée, tandis que celle de la <em>scène</em> doit prendre l'espace restant.
</checklist>

<img src="images/roue-de-fortune-md.png">

<checklist>
À partir du breakpoint LG, la colonne des <em>instructions</em> doit prendre le tier de la largeur de la rangée alors que la colonne de la <em>scène</em> prend l'espace restant.
</checklist>
<img src="images/roue-de-fortune-lg.png">



<dots></dots>

<grostitre>Mise en place</grostitre>
<checklist>
Importez la librairie GSAP dans votre&nbsp;projet.
Captez le clic sur la scène.
Ajoutez un écouteur d'événement du clique sur la scène.
Lorsque la scène est cliquée (au même moment), créez une variable nommée <code>hasard</code> et logez en celle-ci l'appel à la fonction <code>pige</code> afin de tirer au hasard un nombre entre 0° et 360°.
N'hésitez pas à faire des <code>console.log</code> pour vérifier vos valeurs voir <em>si-ça-marche</em>.
</checklist>

<dots></dots>

<grostitre>Animations GSAP de la roue</grostitre>
<checklist>
Toujours lorsque la scène est cliquée (au même moment), créez une suite de plusieurs animations.
Le bras de l'animateur doit faire une légère rotation (voir l'aperçu) pour démarrer la roue.
Notez qu'au départ de l'animation, la roue devra toujours avoir une rotation équivalente à 0°, soit l'équivalent d'aucune rotation.
La roue devra ensuite attendre 200 millisecondes avant d'entamer une rotation équivalente à 720° + le chiffre logé dans la variable <code>hasard</code>.  Ainsi, la roue effectuera minimalement 2 tours sur elle-même avant de s'arrêter aléatoirement.
Cette rotation devra durer 3 secondes.
Cette animation devra dépasser sa cible légèrement avant d'y revenir et de terminer sa course, générant ainsi un dernier suspense. Vous pouvez utilisez un lissage de vitesse pour vous aider.
Lorsque la roue a terminé de tourner, ramenez le bras de l'animation dans sa position initiale.
Lorsque cette suite d'animation est terminée, appelez la fonction <code>affichagePrix</code> en lui passant la variable <code>hasard</code> en paramètre.
</checklist>
<dots></dots>


<grostitre>Panneau</grostitre>

<checklist>
Dans la fonction <code>affichagePrix</code>, créez une animation GSAP sur les lumières, en leur rendant leur taille et leur opacité. Vous devez animer toutes les lumières à partir du centre avec un léger décalage de 0.05 seconde entre chacune d'entre elles afin de donner l'impression que les lumières s'illuminent une à la suite de l'autre 💡.
</checklist>


<dots></dots>
<grostitre>Réinitialisation</grostitre>

<checklist>
Dans la fonction <code>reinitialiserPanneau</code>, ajoutez la méthode GSAP qui vous permet de changer les valeurs sans animer. Celle-ci vous permettra de réinitialiser les valeurs des lumières.
</checklist>


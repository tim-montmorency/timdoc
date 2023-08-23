<?php
/**
 * @type     article
 * @title    Sprite
 * @icon     images/icon.png
 * @abstract Création
 */
?>

<p class="spacer">Dans Unity, les sprites sont des éléments 2D qui se présentent sous forme d’images. On peut les animer ou les laisser statiques. On doit suivre quelques règles précises pour la création des Sprites. </p>


<dots></dots>

<grostitre>Logiciels</grostitre>
<p>Le logiciel que vous utilisez pour la création des Sprites est à votre choix. Je recommande l’utilisation de Photoshop ou Illustrator comme vous les connaissez bien. 
Ces tutoriels peuvent vous aider à débuter :  </p>

<doclink href="https://www.youtube.com/watch?v=rLdA4Amea7Y&t=188s">Dessiner un sprite</doclink>
<doclink href="https://www.youtube.com/watch?v=aaEEujLtsr8&t=0s ">Créer un environnement</doclink>



<dots></dots>

<grostitre>Format et résolution</grostitre>
<p>Lorsque vous créez des sprites, deux choses sont à prendre en compte. La taille de votre sprite et son format d’exportation. Au niveau du format, je recommande d’exporter votre image en .jpg si elle ne contient pas de transparence. Si elle en contient, vous devriez utiliser le format .png. </p>
<p>Au niveau de la résolution, produire des images carrées est essentiel dans Unity. En effet, cela permettra à vos projets d’être optimisés et donc d’avoir des build plus légers. En plus de respecter le format carré, vous devriez toujours prendre des valeurs POT (power of two). Cette règle permet à l’ordinateur de rendre l’image plus rapidement. Voici des exemples de valeurs POT :</p> 
<ul><li>-	16 x 16</li>
<li>-	32 x 32</li>
<li>-	64 x 64</li>
<li>-	128 x 128</li>
<li>-	256 x 256</li>
<li>-	512 x 512</li>
<li>-	1024 x 1024</li>
<li>-	2048 x 2048</li>
<li>-	4096 x 4096</li></ul>
<p>Habituellement, pour un sprite, on devrait prendre une valeur entre 64 et 512 selon la taille qu’il aura sur notre écran. </p>

<dots></dots>

<grostitre>Sprite Sheet</grostitre>
<p>Lorsque l’on souhaite créer l’animation d’un sprite, c’est un sprite sheet que nous devrons utiliser. Il s’agit d’une image plus grosse qui contient tous les sprites dont nous aurons besoin pour faire l’animation de l’élément. Idéalement, ces images sont placées dans une grille. </p>

<p>Voici un tutoriel qui peut vous aider : </p>
<doclink href="https://amphibistudio.sg/sprite-sheets/ ">Tutoriel écrit</doclink>

<p>Pour créer votre Sprite Sheet, vous pourriez créer toutes les images de votre animation dans le même projet Photoshop à l'aide du menu animation. Voici un tutoriel qui vous rappellera comment faire:</p>
<doclink href="https://cmontmorency365-my.sharepoint.com/:v:/g/personal/lora_boisvert_cmontmorency_qc_ca/Eb-57UwRP_RJn36pQkO1eZsBTFMuocHt5VNGgZ8L1ind3w?e=hvM6Uj">Tutoriel vidéo</doclink>

<p>Une fois vos images créées, plutôt que d'exporter le tout en gif, vous pourriez copier chaque frame dans le même projet Photoshop pour créer une grille contenant toutes vos animations. Si vous avez 16 images ou moins et que leur taille est de 128 x 128, vous pouvez utiliser le modèle suivant:</p>

<doclink href="https://cmontmorency365-my.sharepoint.com/:i:/g/personal/lora_boisvert_cmontmorency_qc_ca/EWDNEYJez2BFgiIzLZXo3MsBqnHle1knqJ9c5xrXLo5vgg?e=lDnowT">Modèle Photoshop</doclink>

<p>Si vous préférez utiliser Procreate, ce tutoriel vous aidera. Cependant, une fois vos dessins créés, n'oubliez pas de les mettre dans une grille pour les exporter.</p>
<doclink href="https://www.youtube.com/watch?v=vwgacGe-ei0&ab_channel=IttaiManero">Exemple avec Procreate</doclink>
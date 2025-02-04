<?php
/**
 * @type     exercice
 * @title    Jeu Uno avec @function
 * @icon     images/uno.jpg
 * @abstract Pour cet exercice, vous devez styler plusieurs cartes Uno.
 */
?>

<p>Pour cet exercice, vous devez styler plusieurs cartes Uno.</p>


<p>Il vous est interdit de modifier le HTML. Puisque vous n’avez guère envie d’écrire le style des 48 cartes à la main, une-à-une, vous devrez tirer profit vos connaissances Scss.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="images/scss-uno-resultat.mp4"></clipasset>

<grostitre>Matériel</grostitre>
 
<doclink href="https://codepen.io/tim-momo/pen/ZEVOLpX">Pen de départ</doclink>

<h3 class="heading heading--h3" id="Couleurs 🎨">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>red</td>
        <td>
            <color>#F55556</color>
        </td>
    </tr>
    <tr>
        <td>yellow</td>
        <td>
            <color>#F8AA03</color>
        </td>
    </tr>
    <tr>
        <td>green</td>
        <td>
            <color>#55AA55</color>
        </td>
    </tr>
    <tr>
        <td>blue</td>
        <td>
            <color>#3AA6FF</color>
        </td>
    </tr>
</table>


<grostitre>Requis</grostitre>
<checklist>Créez-vous un <a href="../../sass/extend/#placeholder" target="_blank" onclick="event.stopPropagation()" >placeholder</a> contenant les styles de bases d'une carte générique. Ces styles doivent faire en sorte que les cartes s'affichent une à côté de l'autre, aillent une dimension de 132x200px, aillent des coins ronds de 8px, une bordure blanche de 8px sur tous les côtés et un espace vide de 8px entre elles.<br><br>Pour valider cette étape, vous pouvez appliquez ce placeholder à l'élément avec la classe <incode>.uno-0</incode>, vous devriez alors voir le contour d'une carte apparaitre.
Créez une boucle de 0 à 11 inclusivement. À l'intérieur de celle-ci, créez un sélecteur css visant les éléments qui contiennent la classe <em>.uno-X</em> ou X correspond à l'index de la boucle. Appliquez-lui votre placeholder et ajoutez en arrière-plan l'image correspondant à l'index de la boucle afin d'obtenir des URLs similaires à ceci:<br><incode>https://ex.smnarnold.com/scss/uno/0.png</incode>, <incode>https://ex.smnarnold.com/scss/uno/1.png</incode>, etc.<br><br>Vous devriez alors voir plusieurs cartes apparaître, mais sans couleur de fond (ce n'est pas grave si vous ne voyez pas 11 cartes à cette étape).
Entourez votre plus récente boucle d'une autre boucle, mais cette fois celle-ci devra être capable de supporter une <a href="../../sass/boucle/index.html#map" target="_blank" rel="noopener noreferrer" onclick="event.stopPropagation()" >map</a> afin de passer le nom et le code des quatre couleurs présentées en haut de cette page. Ainsi plutôt que de ne cibler que les cartes rouges <em>(red)</em>, vous pourrez maintenant cibler toutes les cartes existantes.<br><br>Le nombre de cartes avec un fond transparent devrait maintenant avoir quadruplé.
Ajoutez la couleur de fond appropriée pour chaque carte à l'intérieur de votre boucle.
Les cartes 10 et 11 n'affichent pas comme souhaité, car elles sont appelées via un numéro alors que leur nom est <incode>skip.png</incode> et <incode>reverse.png</incode>. Afin de remédier à ce problème, créez une condition dans votre boucle. Lorsque l'index correspond à 11, afficher l'image <incode>https://ex.smnarnold.com/scss/uno/skip.png</incode>. Lorsque l'index correspond à 10, afficher l'image <incode>https://ex.smnarnold.com/scss/uno/reverse.png</incode>.  Dans tous les autres cas, afficher l'image correspondant à l'index de la boucle.
Afin d'améliorer la lisibilité de votre code, créez-vous une fonction Scss acceptant un paramètre. Déplacez ensuite votre condition à l'intérieur de cette fonction et à partir du paramètre passé <em>(nombre entre 0 et 11)</em>, déterminez quelle image d'arrière-plan doit être retournée.<br><br>Ensuite dans votre boucle, déclarer la propriété CSS <incode>background-image</incode> et donner lui comme valeur le résultat de votre fonction.
</checklist>   

</p></li></ol>

      


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../sass/extend/"></intlink>
<intlink href="../../sass/boucle/"></intlink>
<intlink href="../../sass/conditions/"></intlink>
<intlink href="../../sass/fonctions/"></intlink>


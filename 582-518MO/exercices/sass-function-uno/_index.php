<?php
/**
 * @type     exercice
 * @title    @function - Uno
 * @icon     images/uno.jpg
 * @abstract Pour cet exercice, vous devez styler plusieurs cartes Uno.
 */
?>

<p>Dans le cadre de cet exercice, nous allons lever le voile sur l’usage que fait <a href="https://getbootstrap.com/">Bootstrap</a> de SCSS afin de générer sa fameuse grille ayant fait sa renommée&nbsp;mondiale.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src='images/scss-uno-resultat.mp4'></clipasset>

<grostitre>Matériel</grostitre>
 
<doclink href='https://codepen.io/smnarnold/pen/WNOwMGw'>Pen de départ</doclink>



<h3 class="heading heading--h3" id="Couleurs 🎨">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Rouge</td>
        <td>
            <color>#F55556</color>
        </td>
    </tr>
    <tr>
        <td>Jaune</td>
        <td>
            <color>#F8AA03</color>
        </td>
    </tr>
    <tr>
        <td>Vert</td>
        <td>
            <color>#55AA55</color>
        </td>
    </tr>
    <tr>
        <td>Bleu</td>
        <td>
            <color>#3AA6FF</color>
        </td>
    </tr>
</table>


<grostitre>Requis</grostitre>
<checklist>Créez-vous un <a href="../../sass/extend/#placeholder" target="_blank">placeholder</a> contenant les styles de bases d'une carte générique. Ces styles doivent faire en sorte que les cartes s'affichent une à côté de l'autre, aillent une dimension de 132x200px, aillent des coins ronds de 8px, une bordure blanche de 8px sur tous les côtés et un espace vide de 8px entre elles.<br><br>Pour valider cette étape, vous pouvez appliquez ce placeholder à l'élément avec la classe <code>.uno-red-0</code>, vous devriez alors voir le contour d'une carte apparaitre.
Créez une boucle de 0 à 11 inclusivement. À l'intérieur de celle-ci, appliquez votre placeholder et ajoutez en arrière-plan l'image correspondant à l'index de la boucle afin d'obtenir des URLs similaires à ceci:<br><code>https://ex.smnarnold.com/scss/uno/0.png</code>, <code>https://ex.smnarnold.com/scss/uno/1.png</code>, etc.<br><br>Vous devriez alors voir des cartes apparaître, mais sans couleur de fond.
Entourez votre plus récente boucle d'une autre boucle, mais cette fois celle-ci devra être capable de supporter une <a href="../../sass/boucle/index.html#map" target="_blank" rel="noopener noreferrer">map</a> afin de passer le nom et le code des quatre couleurs en pièce jointe. Ainsi plutôt que de ne cibler que les cartes rouges <em>(red)</em>, vous pourrez maintenant cibler toutes les cartes existantes.<br><br>Le nombre de cartes avec un fond transparent devrait maintenant avoir quadruplé.
Ajoutez la couleur de fond appropriée pour chaque carte à l'intérieur de votre boucle.
Les cartes 10 et 11 n'affichent pas comme souhaité, car elles sont appelées via un numéro alors que leur nom est <code>skip.png</code> et <code>reverse.png</code>. Afin de remédier à ce problème, créez une condition dans votre boucle. Lorsque l'index correspond à 11, afficher l'image <code>https://ex.smnarnold.com/scss/uno/skip.png</code>. Lorsque l'index correspond à 10, afficher l'image <code>https://ex.smnarnold.com/scss/uno/reverse.png</code>.  Dans tous les autres cas, afficher l'image correspondant à l'index de la boucle.
Afin d'améliorer la lisibilité de votre code, créez-vous une fonction Scss acceptant un paramètre. Déplacez ensuite votre condition à l'intérieur de cette fonction et à partir du paramètre passé <em>(nombre entre 0 et 11)</em>, déterminez quelle image d'arrière-plan doit être retournée.<br><br>Ensuite dans votre boucle, déclarer la propriété CSS <code>background-image</code> et donner lui comme valeur le résultat de votre fonction.
</checklist>   

</p></li></ol>

      


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../sass/extend/") ?>
<?php intlink("../../sass/boucle/") ?>
<?php intlink("../../sass/conditions/") ?>
<?php intlink("../../sass/fonctions/") ?>


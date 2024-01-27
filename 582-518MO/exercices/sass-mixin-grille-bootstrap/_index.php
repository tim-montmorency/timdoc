<?php
/**
 * @type     exercice
 * @title    @mixin - Grille Bootstrap
 * @icon     images/thumb-mixin.jpg
 * @abstract Comment Bootstrap utilise les mixin de CSS pour générer leur système de grille
 */
?>

<p>Dans le cadre de cet exercice, nous allons lever le voile sur l’usage que fait <a href="https://getbootstrap.com/">Bootstrap</a> de SCSS afin de générer sa fameuse grille ayant fait sa renommée&nbsp;mondiale.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="images/scss-grille-bootstrap.mp4"></clipasset>

<grostitre>Matériel</grostitre>
 
<doclink href="https://codepen.io/smnarnold/pen/rNwxGqQ">Pen de départ</doclink>



<h3 class="heading heading--h3" id="Couleurs 🎨">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td>Rose alpha</td>
        <td>
            <color>rgba(235,225,223,0.65)</color>
        </td>
    </tr>
    <tr>
        <td>Noir</td>
        <td>
            <color>#000000</color>
        </td>
    </tr>
</table>

<grostitre>Requis</grostitre>
<checklist>En CSS, faites en sorte que l'élément <incode>.container</incode> prennent toute la largeur jusqu'à un maximum de 540px et ajuster sa marge afin que celui-ci soit toujours centré horizontalement dans la page. Afin de mieux le voir, ajoutez-lui un fond rose alpha, une taille de texte de 20px et une bordure noire de 2px.
Toujours en CSS, créez 3 média queries faisant en sorte qu'à partir de 768px l'élément <incode>.container</incode> aille une largeur maximale de 720px, à partir de 992px = 960px et finalement 1200px = 1140px.
Utilisez le nesting SCSS afin d'ajouter les styles suivants aux éléments avec la classe <incode>.row</incode> enfants de <incode>.container</incode>. Ces éléments doivent être en flex et permettre aux éléments à l'intérieur de lui de s'afficher sur plusieurs lignes.
Créez-vous une mixin SCSS dont l'utilitée sera de gérer les colonnes de notre grille. Par défaut, cette mixin devrait attribuer une largeur de 100% à son élément ainsi qu'une bordure noire de 2px. Afin de le tester, créez la classe <incode>.col-12</incode> et appelez votre nouvelle mixin à l'intérieur de celui-ci.<br><br>Vous devriez alors voir la phrase<em> "Petit love à tous les students qui font pas d'erreurs"</em> s'afficher dans un encadré.
Rendons la mixin plus polyvalente! Pour ce faire, elle doit accepter un argument (paramètre) correspondant au nombre de colonnes désirées comme largeur. <br><br>Par exemple, l'élément <incode>.col-12</incode> devrait passer le chiffre 12 en argument. 
Donnez une valeur de 1 par défaut à l'argument  au cas ou la mixin serait appelée sans qu'il soit spécifié.
Plutôt que de donner une largeur de 100%, prenez le nombre de colonnes passé en argument et divisez le par 12 <em>(nombre total de colonnes dans une grille Bootstrap)</em>. Multipliez le ensuite par 100%. 
Votre colonne encadrée devrait maintenant avoir une largeur de 1 douzième, car aucun argument ne lui est actuellement passé. Corriger le tout en lui passant le nombre 12.
Créez une boucle allant de 1 à 12. Faites en sorte de créer les classes <incode>.col-1</incode>, <incode>.col-2</incode>, <incode>.col-3</incode> … jusqu'à <incode>.col-12</incode> et appelez votre mixin gérant les colonnes de votre grille avec le nombre correspondant à l'index de la boucle comme paramètre.<br><br>Vos colonnes devraient maintenant ressembler à celles de Bootstrap. Vous pouvez en profiter pour effacer votre code <incode>.col-12</incode> se trouvant à l'extérieur de votre boucle.
Créez une variable qui correspondra à l'espace désiré entre chaque colonne et donnez-lui une valeur de 30px. Dans votre mixin, faites en sorte qu'une marge intérieure horizontale correspondant à la moitié de votre variable soit ajoutée. Ainsi lorsque deux colonnes seront affichées une à côté de l'autre l'addition de leurs deux moitiés correspondra à l'espacement total désiré.
Le dernier point permet au contenu des colonnes de mieux respirer. Cependant, cette marge intérieure fait en sorte que le contenu a été décalé à l'intérieur du <incode>.container</incode>. Ce subtil, mais important point, cause des enjeux de mise en page. Afin de contourner ce problème, Bootstrap est arrivé avec une solution astucieuse: mettre une marge horizontale négative à ses <incode>.row</incode>. Ajoutez donc une marge négative correspondant à une demi-largeur de votre variable à vos <incode>.row</incode> et remarquez comment votre contenu texte redevient aligné avec votre <incode>.container</incode>.
Retirez la bordure noire de votre <incode>.container</incode> et voilà ✨ Vous avez recréé le coeur de la grille de Bootstrap!</checklist>   


      


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../sass/imbrication/"></intlink>
<intlink href="../../sass/variables/"></intlink>
<intlink href="../../sass/mixins/"></intlink>
<doclink href="https://smnarnold.com/cours/css/flexbox-avance">Flexbox avancé</doclink>

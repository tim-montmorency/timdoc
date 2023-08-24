<?php
/**
 * @type     exercice
 * @title    Palette Pink Paradise
 * @icon     images/thumb.png
 * @abstract Utiliser @for du langage Sass pour recréer la palette de couleur Pink Paradise.
 */
?>

<p>Dans le cadre de cet exercice, vous devez recréer la palette de couleur Pink Paradise afin de présenter les 20 tons de rose disponibles chez un fabricant de peinture. Pour ce faire vous aurez besoin d’une boucle&nbsp;Scss.</p>

<p>Aperçu du résultat 👇</p>
<img src="images/pink-palette-resultat.png" alt="Palette de différentes teintes rose">
<grostitre>Matériel</grostitre>

<doclink href='https://codepen.io/tim-momo/pen/bGOVpdE'>Pen de départ</doclink>

<h3 class="heading heading--h3" id="Couleurs 🎨">Couleurs 🎨</h3>
<table class="table-couleurs">
    <tr>
        <td style="width:28%">Pink Paradise</td>
        <td>
            <color>rgba(239,71,111,1)</color>
        </td>
    </tr>
</table>

<dots></dots>
<grostitre>Requis</grostitre>

<checklist>À l'intérieur de l'élément <code>.sample</code>, créez-vous une boucle permettant de cibler chacun des 20 <code>.sample</code> de la palette.
À l'intérieur de cette boucle, remplacez la couleur de fond noire par Pink Paradise.
Réfléchissez à la façon de construire votre sélecteur CSS pour cibler dans la boucle chacun des div un par un (voir les notes de cours ci-bas pour vous aider).
Remplacez ensuite son alpha de sorte qu'il s'incrémente de 5% par itération de boucle. Autrement dit, les premiers <code>.sample</code> devraient avoir une opacité de <code>0.05</code>, <code>0.10</code>,  <code>0.15</code> … jusqu'à <code>1.00</code>.
</checklist>
   

<dots></dots>
<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../sass/boucle/"); ?>
<?php intlink("../../sass/imbrication/"); ?>
<?php intlink("../../../582-215MO/css/pseudo-classes-intermediaires/"); ?>


    

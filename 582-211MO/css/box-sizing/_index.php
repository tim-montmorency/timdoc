<?php
/**
 * @type     article
 * @title    Box-sizing
 * @icon     images/icon.webp
 * @abstract border-box, content-box
 */
?>

<p class="spacer">La propriété <incode>box-sizing</incode> permet de spécifier si la marge intérieure <em>(padding)</em> et la bordure <em>(border)</em> d'un élément doivent compter dans sa dimension réelle.</p>

<p>Afin d'illustrer l'impact de cette propriété, une boite de 200x200px contenant 5 lettres sera utilisée avec les différentes valeurs de box-sizing.</p>

<dots></dots>


<grostitre>content-box</grostitre>

<p><strong>Est la valeur par défaut</strong> attribué à la propriété <incode>box-sizing</incode>. Par défaut, tous les éléments d'une page utilisent ce <a href="../box-model/">box-model</a>. Ce mode donne priorité au contenu. Évitant ainsi que l'espace alloué au contenu change de dimension lorsqu'une marge intérieure <em>(padding)</em> ou une bordure <em>(border)</em> lui est ajoutée.</p>

<p>Par exemple, la boite ayant le contenu <em>(A - B - C - D - E)</em> ne change pas la disposition de son contenu même si un padding de 40px lui est ajouté. En contrepartie, la boite mesure maintenant réellement 280px <em>(40px + 200px + 40px)</em>.</p>


<img src="images/content-box.png">
<span class="remark">À gauche, sans padding.<br>À droite, avec un padding de 40px.</span>

<dots></dots>


<grostitre>border-box</grostitre>

<p>Ce mode sert à donner priorité à la dimension réelle de la boite. Évitant ainsi qu'elle change de dimension lorsqu'une marge intérieure <em>(padding)</em> ou une bordure <em>(border)</em> lui est ajoutée.</p>

<p>Par exemple, la boite ayant le contenu <em>(A - B - C - D - E)</em> ne change jamais de dimension <em>(200x200px)</em>. En contrepartie, Le contenu <em>(A - B - C - D - E)</em> doit ajuster sa disposition lorsqu'un padding de 40px est ajouté à la boite, puisque l'espace alloué au contenu se trouve réduit afin de ne pas modifier la dimension réelle de la boite.</p>

<img src="images/border-box.png">

<span class="remark">À gauche, sans padding.<br>À droite, avec un padding de 40px.</span>

<p><incode>border-box</incode> est particulièrement utile lorsque des éléments ont une dimension en %.</p>

<p>Par exemple, une boite prenant toute la largeur de la fenêtre et ayant une marge intérieure de 20px:</p>

<highlight lang="css">.box {
  width: 100%;
  padding: 20px;
}</highlight>

<p>En <incode>box-sizing: content-box</incode>, la taille réelle de cette boite dépasserait celle de la fenêtre. Créant ainsi une barre de défilement horizontale et une mise en page quelque peu étrange.</p>

<p>Tandis qu'en <incode>box-sizing: border-box</incode>, puisque les marges intérieures <em>(padding)</em> sont comptées à même la largeur totale, la boite est en mesure de prendre toute la largeur de la fenêtre, d'avoir ses marges intérieures sans pour autant dépasser de ladite fenêtre.</p>

<codepen id="mdjKKaQ" tab="result" height="340"></codepen>

<p>De nos jours, la majorité des développeurs convertissent toutes les boites de leurs pages en <incode>border-box</incode> via le code suivant placé en début de feuille CSS:</p>

<highlight lang="css">* { box-sizing: border-box; }</highlight>

<p>Ceci permet de simplifier la réalisation de mises en page.</p>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/box-sizing">box-sizing</doclink>
<doclink href="https://www.w3schools.com/css/css3_box-sizing.asp">box-sizing</doclink>

<dots></dots>

<exercice href="exercices/illustrator/"></exercice>

<dots></dots>
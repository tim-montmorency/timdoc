<?php
/**
 * @type     article
 * @title    Pseudo-éléments
 * @icon     images/icon.webp
 * @abstract ::before, ::after
 * @ref      web/css
 */
?>

<p class="spacer">Les pseudo-éléments sont utilisés pour ajouter du contenu ou des styles à un sélecteur de façon uniforme.</p>

<p>Par exemple, un client pourrait demander d'ajouter l'emoji 🔗 à tous les liens sur son site. Bien qu'il serait possible de manuellement copier/coller l'émoji partout, ceci consommerait du temps, comporterait un risque d'erreur et si de nouveaux liens étaient ajoutés par la suite, rien ne garantirait que la personne penserait à copier ledit émoji.</p>

<p>Heureusement, les pseudo-éléments peuvent aider!</p>

<dots></dots>


<grostitre>Before & After</grostitre>

<p>Les pseudo-éléments <incode>::before</incode> et <incode>::after</incode> permettent d'ajouter du contenu à l'intérieur d'un élément via la propriété <incode>content</incode>.</p>

<p>Comme leurs noms l'indiquent:</p>

<ul>
    <li><incode>::before</incode> ajoute un contenu au début ⬅️</li>
    <li><incode>::after</incode> ajoute un contenu à la fin ➡️</li>
</ul>

<codepen id="BaPvvPX" tab="result" height="340"></codepen>

<span class="remark">À gauche, ::before.<br>À droite, ::after.</span>

<p>Remarquez comment le double deux points <incode>::</incode> sert à séparer le sélecteur de base de son pseudo‑élément.</p>

<p>Anciennement, il était possible d'écrire ses pseudo-éléments avec un seul <incode>:</incode>, comme les <a href="../pseudo-classes/">pseudo-classes</a>. Cependant, depuis l'arrivée de CSS3, cette pratique est désuète.</p>

<p><incode>::before</incode> et <incode>::after</incode> acceptent les mêmes propriétés CSS qu'un sélecteur normal. Il est donc courant de les voir utilisés pour jouer un rôle similaire à celui d'un tag HTML normal.</p>

<p>Par exemple, il est possible d'afficher une image personnalisée via la propriété background-image plutôt qu'un texte/emoji.</p>

<codepen id="jOpXXeq" tab="css,result" height="340"></codepen>

<alert>
    <h5>ERREUR FRÉQUENTE</h5>
    Lorsqu’un pseudo-element <em>(<incode>::before</incode> ou <incode>::after</incode>)</em> n’apparait pas, il s’agit généralement de la propriété <incode>content</incode> qui a été omise. Même si elle ne contient rien, sa présence est obligatoire pour qu’un pseudo-element affiche.
</alert>

<p>Ils sont aussi souvent utilisés en combinaisons avec les <a href="../pseudo-classes/">pseudo-classes</a> et les <a href="#">transitions</a> afin de créer des effets de survole.</p>

<codepen id="bGjOOON" tab="css,result" height="340"></codepen>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/::before">::before</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_before.asp">::before</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/::after">::after</doclink>
<doclink href="https://www.w3schools.com/cssref/sel_after.asp">::after</doclink>

<dots></dots>


<grostitre>Autres pseudo-éléments</grostitre>

<p>Il existe évidemment d'autres pseudo-éléments. Cependant puisque leur usage est moins répandu. Nous ne nous attarderons pas.</p>

<knowmore href="https://developer.mozilla.org/fr/docs/Web/CSS/Pseudo-elements#Liste_des_pseudo-%C3%A9l%C3%A9ments">Article MDN à propos des pseudo-elements.</knowmore>

<bravo>Tous les icônes/émojis dans les boites de texte de ce site, comme la tête de dragon de MDN dans le bloc précédent, sont ajoutés avec des <incode>::before</incode>.</bravo>

<dots></dots>


<grostitre>Résumé vidéo</grostitre>

<clip src="videos/css-pseudo-elements-in-100-seconds.mp4"></clip>

<dots></dots>

<exercice href="exercices/zab-cafe/"></exercice>

<dots></dots>

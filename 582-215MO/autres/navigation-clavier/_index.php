<?php
/**
 * @type     article
 * @title    Navigation clavier
 * @icon     images/icon.png
 * @abstract tabindex, focus
 */
?>

<p class="spacer">Plusieurs raisons peuvent empêcher une personne de naviguer à l'aide d'une souris:</p>

<h3>Temporaire</h3>

<ul>
    <li>Une tendinite.</li>
    <li>Un bras dans le plâtre suite à un accident.</li>
    <li>Etc.</li>
</ul>

<h3>Permanent</h3>

<ul>
    <li>Une difficulté à faire des mouvements fins en raison d'une maladie <em>(Parkinson, sclérose en plaque, AVC, etc.)</em></li>
    <li>Impossibilité d'utiliser son bras <em>(problème de développement, amputation, etc.)</em>.</li>
    <li>Un problème de vision créant une difficulté à distinguer le curseur sur l'écran.</li>
    <li>Etc.</li>
</ul>

<p>Heureusement, le navigateur offre une alternative native aux personnes aux prises avec ces difficultés via la navigation par clavier.</p>

<p>Plutôt que de déplacer son curseur et de cliquer sur un bouton avec sa souris, un utilisateur peut déplacer le focus de son navigateur d'un élément à l'autre <em>(effet de surbrillance autour d'un élément)</em> et déclencher son action via le clavier avec les touches suivantes:</p>

<ul>
    <li><incode>Tab</incode> pour focuser sur le prochain élément interactif.</li>
    <li><incode>Shift</incode> + <incode>Tab</incode> pour revenir à l'élément précédent.</li>
    <li><incode>⏎</incode> ou <incode>Espace</incode> pour interagir avec l'élément focusé.</li>
</ul>

<p>Par défaut, les éléments reçoivent le focus en fonction de leur ordre dans le code.</p>

<p>Par exemple, remarquez sur Chrome l'effet de surbrillance bleu 🔵 entourant le bouton ayant le focus et comment cet effet se déplace lorsque la navigation clavier est utilisée. On remarque aussi que le <em>bouton 3</em> devient légèrement plus pâle lorsqu'il a le focus et que la touche Espace est utilisée afin de le déclencher.</p>

<br>

<clipasset src="videos/accessibility-keyboard-focus.mp4"></clipasset>

<warning>L’effet de surbrillance peut varier d’un navigateur à l’autre.</warning>

<p>À priori, seules les balises prévues pour l'interaction peuvent recevoir le focus du navigateur. Par exemple, les balises: <incode>&lt;button&gt;</incode>, <incode>&lt;a&gt;</incode>, <incode>&lt;input&gt;</incode>, <incode>&lt;details&gt;</incode>, etc. D'où l'importance d'utiliser les bonnes balises, aux bons endroits.</p>

<p>Par exemple, dans le cas où un alert est déclenché en JavaScript lorsqu'un élément est cliqué. Si cet élément est un <incode>&lt;span&gt;</incode>, qui est une balise prévue à des fins de mise en page et non d'interaction, cette interactivité ne sera pas accessible aux individus navigants avec leur clavier, puisque cette balise ne recevra jamais le focus du navigateur.</p>

<p>👌</p>

<highlight lang="html">&lt;button&gt;Afficher un alert&lt;/button&gt;</highlight>

<p>🚫</p>

<highlight lang="html">&lt;span&gt;Afficher un alert&lt;/span&gt;</highlight>

<info>L’apparence d’une balise peut être modifiée en CSS. Ainsi, le choix d’une balise ne devrait pas être effectué en fonction de son apparence de base, mais en fonction de sa valeur sémantique.</info>

<dots></dots>


<grostitre>Tabindex</grostitre>

<p>Il est parfois impossible d'utiliser la balise appropriée pour diverses raisons. Heureusement, il est quand même possible d'indiquer au navigateur qu'un élément devrait être en mesure de recevoir le focus, autrement dit d'être <em>"tabé"</em>, en lui donnant l'attribut <incode>tabindex</incode>.</p>

<p>Par exemple:</p>

<highlight lang="html">&lt;span tabindex=&quot;0&quot;&gt;Afficher un alert&lt;/span&gt;</highlight>

<p>Ainsi, la balise <incode>&lt;span&gt;</incode> est à même de recevoir le focus, comme dans l'exemple ci-dessous:</p>

<clipasset src="videos/accessibilite-tabindex.mp4"></clipasset>

<h3>Pourquoi 0 ?</h3>

<p>0 correspond à la priorité de focus par défaut de tous les éléments interactif. Puisqu'ils sont tous à 0, le navigateur les considères égaux et donc leur attribut le focus l'un après l'autre selon leur ordre d'apparition dans le code.</p>

<p>Attribuer <incode>tabindex="0"</incode> à un élément lui permet de recevoir le focus, mais le place au même niveau d'importance que les autres éléments interactif. Bref, l'élément recevra le focus en fonction de son ordre d'apparition dans le code, comme tout autre élément et son ordre de sélection sera intuitif/prévisible pour l'utilisateur.</p>

<p>Le concept initial de <incode>tabindex</incode> était de modifier la priorité de focus des éléments afin de contrôler leur ordre de sélection. Ainsi, un élément pouvait apparaitre au milieu du code et quand même recevoir le focus en premier s'il était doté d'un attribut <incode>tabindex</incode> avec une valeur supérieure à 0. Cependant, cette approche est maintenant fortement déconseillée, puisqu'elle engendre beaucoup de confusion. Le navigateur saute directement à l'élément avec le tabindex le plus élevé, ignorant souvent plusieurs éléments interactifs au passage, et ensuite reprend son ordre de sélection normal. Ainsi, plusieurs éléments peuvent sembler inaccessibles à l'utilisateur.</p>

<p>Par exemple:</p>

<clipasset src="videos/accessibility-keyboard-focus-2.mp4"></clipasset>

<doclink href="https://developer.mozilla.org/fr/docs/Web/HTML/Global_attributes/tabindex">tabindex</doclink>
<doclink href="https://www.w3schools.com/tags/att_global_tabindex.asp">tabindex</doclink>

<dots></dots>


<grostitre>Focus</grostitre>

<p>Par défaut, la majorité des navigateurs vont utiliser la <a href="../../css/outline/">propriété CSS outline</a> afin de créer l'effet de surbrillance de l'élément ayant le focus. Si pour des raisons esthétiques le outline cause un problème il est conseillé de simplement le modifier en CSS plutôt que de le retirer complètement.</p>

<p>Par exemple:</p>

<clipasset src="videos/accessibilite-tab-outline.mp4"></clipasset>

<quote author="David Gilbertson" title="Auteur conscientisé" photo="images/david-gilbertson.jpg">Enlever le outline indiquant le focus est l’équivalent d’enlever une rampe d’accès pour personne à mobilité réduite dans une école, parce que ça ne “fit pas” avec le design.</quote>

<dots></dots>
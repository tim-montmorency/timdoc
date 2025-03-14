<?php
/**
 * @type     article
 * @title    Inspecteur - Éléments
 * @icon     images/icon.png
 * @abstract  Un précieux outil pour explorer l'arrière plan d'une interface web (HTML et CSS).
 */
?>

<grostitre>Outil d'inspection</grostitre>

<p>Remarquez en haut à gauche de l'inspecteur l'icône de l'outil d'inspection <em>(carré avec une flèche)</em>.</p>

<img src="images/inspecteur-inspection-icone.png">

<p>En cliquant sur cette icône, elle deviendra bleue et vous permettra de cibler un élément en particulier sur la page. Elle mettra en évidence tous les éléments survolés en les surlignant, afin que vous puissiez sélectionner l'élément de votre choix.</p>

<ul>
    <li>L'élément est surligné en bleu 🟦</li>
    <li>Son <incode>padding</incode> en vert 🟩</li>
    <li>Son <incode>margin</incode> en orange 🟧</li>
</ul>

<p>Lorsque l'élément souhaité est surligné, il suffit de cliquer sur celui-ci pour le sélectionner.</p>

<p>Par exemple, inspecter la boite suivante:</p>

<span class="demo-inspecteur">Inspectez moi</span><br><br>

<p>Vous devriez voir dans la partie gauche de l'inspecteur la structure HTML de la page. Cette structure est communément appelée le <em>DOM tree</em>. Si vous portez attention, vous remarquerez qu'une balise dans cette structure est surlignée. Cette balise correspond à l'élément inspecté.</p>

<img src="images/dom-tree-inspecteur.jpg">

<dots></dots>


<grostitre>DOM Tree</grostitre>

<info>Le <em>DOM</em> signifie <em>Document Object Model</em>. Il représente la structure du document HTML et donc la structure des balises HTML de la page.</info>

<p>Lorsque vous êtes dans le <em>DOM Tree</em> de l'inspecteur, vous pouvez utiliser les flèches sur votre clavier ⬇️ ⬆️ pour inspecter l'élément précédent ou suivant ou tout simplement votre souris pour cliquer sur un élément en particulier. Vous remarquerez que dès que vous sélectionnez un nouvel élément, celui-ci se surligne dans le <em>DOM Tree</em> <strong>ET</strong> dans la page simultanément.</p>

<video controls src="videos/dom-tree-sync.mp4" autoplay loop class="video-tag"></video>


<p>Au bas de la fenêtre du <em>DOM Tree</em>, toutes les balises englobant l'élément sélectionné sont listées. Allant de l'élément lui-même jusqu'à la balise <incode>html</incode>. Il est possible de cliquer sur chacune de ces balises pour les inspecter directement si désirées.</p>

<img src="images/dom-tree-breadcrumb.jpg">

<h3>Recherche dans le DOM</h3>

<p>Lorsque le focus est dans le <em>DOM Tree</em>, il est possible de rechercher un élément en utilisant un raccourci clavier ⌨️</p>

<ul>
    <li><strong>Windows</strong> <incode>ctrl</incode>+<incode>f</incode></li>
    <li><strong>Mac</strong> <incode>command</incode>+<incode>f</incode></li>
</ul>

<p>L'élément recherché peut être du texte, une balise, une classe, un sélecteur CSS, etc.</p>
<video controls src="videos/dom-tree-search.mp4" autoplay loop class="video-tag"></video>

<h3>Modification du DOM</h3>

<p>Vous pouvez modifier le DOM directement dans l'inspecteur afin de prévisualiser l'impact d'une modification. Pour ce faire, il suffit de faire un double-clic sur l'élément que vous désirez modifier <em>(texte, balise, classe, ID, style, attribut, etc.)</em> ou de faire un clic droit sur l'élément en question et sélectionner l'option <em>Edit text</em> pour du texte ou <em>Edit as HTML</em> pour les autres.</p>

<p>L'élément devrait alors se surligner pour indiquer que vous pouvez le modifier. Lorsque vous avez terminé votre modification, vous pouvez appuyer sur la touche ↵ pour confirmer votre changement ou simplement cliquer à l'extérieur du dit élément.</p>

<p>Par exemple, pour modifier un texte:</p>
<video controls src="videos/dom-tree-modification.mp4" autoplay loop class="video-tag"></video>


<p>Ou encore, modifiez une classe:</p>
<video controls src="videos/dom-tree-modification-class.mp4" autoplay loop class="video-tag"></video>


<p>Vous pouvez aussi déplacer un élément dans le dom. Pour ce faire, il suffit de faire un glisser-déposer de votre élément <em>(Drag and drop)</em> ↕️</p>
<video controls src="videos/dom-tree-move-element.mp4" autoplay loop class="video-tag"></video>


<p>Vous pouvez même supprimer un élément en cliquant simplement sur la touche <incode>delete</incode></p>
<video controls src="videos/dom-tree-delete.mp4" autoplay loop class="video-tag"></video>


<info>Tout comme dans un éditeur, il est possible de revenir en arrière si une modification ne donne pas les résultats escomptés en utilisant le raccourci clavier <incode>ctrl</incode>+<incode>z</incode> sur Windows ou <incode>command</incode>+<incode>z</incode> sur Mac.</info>

<dots></dots>


<grostitre>Styles</grostitre>

<p>L'onglet <em>Styles</em> permet de voir les règles CSS ayant un impact sur l'apparence de l'élément sélectionner.</p>

<h3>Ordre d'affichage des règles</h3>

<p>L'ordre d'affichage des règles dépend de la priorité (<a href="../../css/specificite/" target="_blank" rel="noopener noreferrer">spécificité selon le pointage</a>) de chacune d'entre elles. Plus une règle est <a href="../../css/specificite/" target="_blank" rel="noopener noreferrer">spécifique</a>, plus elle apparaitra tôt dans cette liste. Moins elle l'est, par exemple les règles de bases définies par le navigateur <em>(user agent stylesheet)</em>, plus elle sera basse.</p>

<p>Par exemple:</p>

<img src="images/inspecteur-style-priority.jpg">

<ol>
    <li>On peut voir que le 1er élément affiché dans la liste est la classe <incode>.demo-inspecteur</incode> présent sur l'élément lui-même. On voit que cette classe contrôle trois propriétés.</li>
    <li>Ensuite vient une règle moins prioritaire <incode>*, :after, :before</incode>. Cette règle dicte que tous les éléments <a href="../../css/selecteurs-avances/#universel"><em>(Sélecteur *)</em></a> et tous les pseudo-éléments <a href="../../css/pseudo-elements/#before-after">:before et :after</a> doivent avoir un <incode>box-sizing: inherit;</incode>.</li>
    <li>Finalement, la règle <incode>@media (min-width: 768px) .page-article</incode> indique que la taille de la fonte de notre élément est affectée par sont parent <incode>.page-article</incode> et qu'à partir de 768px et plus, cette taille doit-être de <incode>22px</incode>.</li>
</ol>

<h3>Priorité des styles</h3>

<p>Une propriété d'un élément ne peut avoir qu'une valeur à la fois. Ainsi, lorsque deux règles définissent une même propriété sur un même élément, le navigateur détermine quelle règle est prioritaire et favorise sa valeur. Celle de la règle moins prioritaire continue d'exister, mais n'est simplement pas prise en compte.</p>

<p>Dans notre exemple précédent, nous avons vu que la règle <incode>.demo-inspecteur</incode> a priorité sur la règle <incode>*, :after, :before</incode>. Donc si cette dernière définit une propriété aussi définit dans <incode>.demo-inspecteur</incode>, cette propriété apparaitra raturée pour nous indiquer que bien qu'elle n'est pas appliquée.</p>

<img src="images/inspecteur-styles-override.jpg">

<p>Une propriété peut aussi être raturée et avoir une icône ⚠️ à sa gauche lorsqu'elle n'est pas reconnue par le navigateur. Généralement, ceci est signe que la propriété ou sa valeur n'est pas écrite correctement.</p>

<p>Un exemple classique pourrait être <incode>height</incode> qui est régulièrement mal orthographié <incode>heigth</incode>.</p>

<img src="images/styles-invalid.jpg">

<h3>Filtrer les propriétés / rechercher une propriété CSS</h3>

<p>Il arrive parfois que plusieurs règles affectent un élément ou que plusieurs propriétés soient définies, rendant ainsi la recherche d'une propriété en particulier ardue.</p>

<p>Heureusement, il est possible d'utiliser le champ Filter afin de <em>filtrer</em> les propriétés affichées, c'est à dire rechercher une ou des propriétés selon leur nom.</p>

<p>Par exemple, si je ne désire voir que les propriétés affectant le <incode>font-size</incode>:</p>
<video controls src="videos/styles-filter.mp4" autoplay loop class="video-tag"></video>


<h3>Voir les pseudo-classes (:hover, :focus, etc.)</h3>

<p>Il est parfois nécessaire d'examiner les styles d'un élément lorsqu'il est survolé <em>(hover)</em>, focusé <em>(focus)</em>, actif <em>(active)</em>, visité <em>(visited)</em>,  etc.</p>

<p>Pour ce faire, il est possible de cliquer sur le bouton <incode>:hov</incode> dans l'onglet <em>Styles</em> de l'inspecteur afin de forcer leur affichage.</p>

<p>Par exemple, si j'examine un lien sur cette page, je remarquerai qu'il a un <incode>background-size: 100% 40%;</incode> par défaut, mais qu'il est remplacé par un <incode>background-size: 100% 100%;</incode> lorsque survolé.</p>

<video controls src="videos/styles-hov.mp4" autoplay loop class="video-tag"></video>


<info>Remarquez comment la règle de style <incode>.wysiwyg a:hover</incode> est prioritaire sur la règle <incode>.wysiwyg a</incode>. La propriété <incode>background-size</incode> et sa valeur par défaut sont donc raturés puisqu’ils sont remplacés par une nouvelle définition dans <incode>.wysiwyg a:hover</incode>.</info>

<h3>Ajout de propriétés</h3>

<p>Il est possible de tester rapidement des styles sur un élément en lui ajoutant des propriétés. Pour ce faire, il suffit de cliquer dans la zone <incode>element.style</incode> situé dans le haut de l'onglet Styles et de définir notre propriété.</p>

<video controls src="videos/styles-add.mp4" autoplay loop class="video-tag"></video>


<thumbsup>Lorsqu’une propriété ou valeur apparait en suggestion semi-transparente, vous pouvez appuyer sur la touche <incode>tab</incode> pour qu’elle se complète automatiquement.</thumbsup>

<h3>Désactivation/réactivation d'une propriété</h3>

<p>Lorsqu'une règle de style est survolée, les boites à cochée de chacune des propriétés deviennent visibles vous permettant de désactiver/réactiver chaque propriété à votre guise.</p>

<video controls src="videos/styles-toggle.mp4" autoplay loop class="video-tag"></video>


<h3>Modification d'une valeur</h3>

<p>Il est possible de modifier une valeur simplement en cliquant sur celle-ci.</p>

<p>Par exemple, si je désire voir comment réagirait mon élément en <incode>display: block;</incode> plutôt qu'en <incode>inline-block</incode>:</p>

<video controls src="videos/styles-modification.mp4" autoplay loop class="video-tag"></video>


<p>Dans le cadre d'une valeur numérique, il est même possible d'augmenter/diminuer une valeur simplement positionnant le curseur sur la valeur en question et en utilisant les flèches ⬆️ et ⬇️ du clavier.</p>

<video controls src="videos/styles-modify-number.mp4" autoplay loop class="video-tag"></video>


<p>Lors de la modification d'une valeur numérique avec les flèches du clavier, la valeur fluctue de 1 unité par défaut. Cependant, il est possible en tenant la touche alt enfoncée de modifier la valeur de 0.1 pour plus de précision ou encore de 10 avec la touche de shift ↑ pour aller plus rapidement à une valeur éloignée.</p>

<warning>Tous les changements effectués sont temporaires.<br>Recharger la page restaure les styles originaux.</warning>

<dots></dots>

<p>Pour en savoir plus: </p>
<doclink href='https://developer.chrome.com/docs/devtools/css?hl=fr'>Documentation de la partie CSS de l'inspecteur de Chrome</doclink> <br>
<doclink href='https://developer.chrome.com/docs/devtools#panneaux'>Tous les autres onglets de l'inspecteur de Chrome</doclink>

<dots></dots>
<exercice href="exercices/urbania/"></exercice>
<exercice href="exercices/unlock/"></exercice>
<!-- video win https://i.giphy.com/media/xncwX5CAXArucuH85E/giphy.mp4  --> 


<dots></dots>
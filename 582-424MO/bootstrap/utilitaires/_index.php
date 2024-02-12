<?php

/**
 * @type     article
 * @title    Utilitaires
 * @icon     ../images/icon.webp
 * @abstract Classes pour styliser rapidement sans utiliser de CSS
 * @index 760
 * @ref      web/cadriciels/bootstrap
 */
?>



<p>Bootstrap est truffés de classes utilitaires permettant de simplifier/accélérer le développement. Afin de vous familiariser avec ce concept, nous allons examiner quelques-unes d'entre elles.</p>

<grostitre>Image responsive</grostitre>

<p>Comme son nom le laisse sous-entendre, la classe&nbsp;<incode>.img-fluid</incode>&nbsp;sert à rendre une image fluid/responsive en lui appliquant les propriétés CSS&nbsp;suivantes:</p>

<highlight lang="css">max-width: 100%;
height: auto;</highlight>

<p>La propriété&nbsp;<incode>max-width</incode>&nbsp;fait en sorte que l'image affichera selon sa taille normale, à moins que l'espace soit insuffisant. Dans ce cas, elle sera limitée à la largeur disponible. De son côté,&nbsp;<incode>height: auto;</incode>&nbsp;s'assure que l'image ne soit jamais&nbsp;déformée.</p>

<p>Pour activer cette classe, il suffit de l'ajouter à une image ainsi:</p>

<highlight lang="html">&lt;img src=&quot;image.jpg&quot; class=&quot;img-fluid&quot;&gt;</highlight>

<doclink href="https://getbootstrap.com/docs/5.2/content/images/">.img-fluid</doclink>

<dots></dots>

<grostitre>Alignements de texte</grostitre>


<p>Pour aligner un texte à gauche, au centre ou à droite, il est possible d'utiliser les classes utilitaires&nbsp;suivantes:</p>

<ul>
    <li><incode>text-start</incode>&nbsp;à gauche</li>
    <li><incode>text-center</incode>&nbsp;au centre</li>
    <li><incode>text-end</incode>&nbsp;à droite</li>
</ul>

<p>Toutes ces options d'alignements sont compatibles avec l'ajout d'un breakpoint afin d'indiquer quand leur comportement devrait devenir&nbsp;actif.</p>

<p>Par exemple, pour centrer un texte lorsque le breakpoint&nbsp;<incode>lg</incode>&nbsp;est atteint, il serait possible de&nbsp;faire:</p>

<highlight lang="html">&lt;p class=&quot;text-lg-center&quot;&gt;Texte centré en lg&lt;/p&gt;</highlight>

<doclink href="https://getbootstrap.com/docs/5.2/utilities/text/">.text-...</doclink>

<dots></dots>
<grostitre>Display</grostitre>


<p>Pour donner une valeur de&nbsp;<incode>display</incode>&nbsp;particulière à un élément, il est possible d'utiliser les classes utilitaires&nbsp;suivantes:</p>

<ul>
    <li>
        <incode>d-block</incode>&nbsp;pour display block.
    </li>
    <li>
        <incode>d-inline</incode>&nbsp;pour display inline.
    </li>
    <li>
        <incode>d-inline-block</incode>&nbsp;pour display inline-block.
    </li>
    <li>
        <incode>d-flex</incode>&nbsp;pour display flex.
    </li>
    <li>
        <incode>d-none</incode>&nbsp;pour display none.
    </li>
    <li>
       etc.
    </li>
</ul>

<p>Toutes ces options de display sont compatibles avec l'ajout d'un breakpoint afin d'indiquer le moment où l'affichage un affichage devrait&nbsp;changer.</p>

<p>Par exemple, pour qu'un élément soit invisible par défaut, mais devienne en&nbsp;<incode>display: block</incode>&nbsp;lorsque le breakpoint&nbsp;<incode>lg</incode>&nbsp;est atteint, il serait possible de&nbsp;faire:</p>


<highlight lang="html">&lt;div class=&quot;d-none d-lg-block&quot;&gt;...&lt;/div&gt;</highlight>

<doclink href="https://getbootstrap.com/docs/5.2/utilities/display/">.d-...</doclink>

<dots></dots>

<grostitre>Display: Flex</grostitre>
<p>Comme on a vu avec le <a href="../grille/#rangees" target="_blank">système de grille</a>, les rangées pouvaient accueillir des classes utilitaires référent au système de flexbox afin de permettre d'aligner leur balises enfants, les columns. Vous vous rappelez certainement de cette formulation pour centrer toutes les colonnes dans leurs rangée en ajoutant la classe<incode>.justify-content-center</incode> à la balise contantnt la classe <incode>.row</incode>?</p>
<highlight lang="html">&lt;div class=&quot;container&quot;&gt;
    &lt;div class=&quot;row justify-content-center&quot;&gt;
        &lt;div class=&quot;col-2&quot;&gt;&lt;/div&gt;
        &lt;div class=&quot;col-2&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</highlight>

<p>Et bien, Bootstrap nous offre une panoplie de classes utilitaires pour nous permettre de placer de nos éléments suivant le système Flexbox.</p>

<p>Tel qu'expliqué précédemment, vous devez ajouter la classe d-flex sur la balise parent des éléments à positionner. </p>


<h3>Balise parent</h3>
<p>Liste non-exhaustive des classes que vous pouvez utiliser sur la <strong>balise parent</strong> qui contient des balises enfants à positionner:</p>
<ul>
    <li><incode>.d-flex</incode></li>
    <li><incode>.flex-row</incode> : référence à la propriété css flex-direction</li>
    <li><incode>.flex-column</incode> : référence à la propriété css flex-direction</li>
    <li><incode>.justify-content-center</incode></li>
    <li><incode>.justify-content-end</incode></li>
    <li><incode>.justify-content-between</incode></li>
    <li><incode>.align-items-start</incode></li>
    <li><incode>.align-items-center</incode></li>
    <li><incode>.align-items-stretch</incode></li>

    <li><incode>flex-wrap</incode></li>
    <li><incode>flex-nowrap</incode></li>
    
</ul>

<h3>Balise enfant</h3>
<p>Liste non-exhaustive des classes que vous pouvez utiliser sur la <strong>balises enfants</strong> à positionner dans l'espace:</p>
<ul>
    <li><incode>.align-self-start</incode></li>
    <li><incode>.align-self-center</incode></li>
    <li><incode>.flex-grow-1</incode></li>
    <li><incode>.flex-grow-2</incode></li>
    <li><incode>.flex-shrink-1</incode></li>
    
</ul>

<p>Sachez que vous pouvez toujours ajouter les breakpoints à ces classes afiin de faire des exception de positionnement dépendant de la largeur de l'écran. L'exemple suivant permettra d'afficher par défaut, sur petit écran, A, B et C un en dessous de l'autre grace à <incode>.flex-column</incode>, et à partir du breakpoint <em>>md</em>, ils s'afficheront un à côté de l'autre sur une même rangée, grâce à <incode>.flex-md-row</incode>.</p>

<highlight lang="html">
&lt;div class=&quot;d-flex flex-column flex-md-row&quot;&gt;
    &lt;div class=&quot;w-25&quot;&gt;A&lt;/div&gt;
    &lt;div class=&quot;w-25&quot;&gt;B&lt;/div&gt;
    &lt;div class=&quot;w-25&quot;&gt;C&lt;/div&gt;
&lt;/div&gt;
</highlight>

<doclink href="https://getbootstrap.com/docs/5.2/utilities/flex/">flex</doclink>


<dots></dots>

<grostitre>Espacement (spacing)</grostitre>

<p>Bootstrap comprend un large éventail de classes utilitaires de marge (margin), de remplissage (padding) pour modifier l'apparence d'un élément.</p>

<h3>Où la <em>propriété</em> est l'une des :</h3>

<ul>
    <li><incode>m</incode> - pour les classes qui modifient la marge <incode>margin</incode></li>
    <li><incode>p</incode> - pour les classes qui modifient le remplissage <incode>padding</incode></li>
</ul>

<h3>Où le <em>côté</em> est l'une des :</h3>

<ul>
    <li><incode>t</incode> - pour les classes qui modifient  <incode>margin-top</incode> ou <incode>padding-top</incode></li>
    <li><incode>b</incode>- pour les classes qui modifient <incode>margin-bottom</incode> ou <incode>padding-bottom</incode></li>
    <li><incode>s</incode> - (start) - pour les classes qui modifient <incode>margin-left</incode> ou <incode>padding-left</incode> in LTR, <incode>margin-right</incode> or <incode>padding-right</incode> in RTL</li>
    <li><incode>e</incode> - (end) - pour les classes qui modifient <incode>margin-right</incode> ou <incode>padding-right</incode> in LTR, <incode>margin-left</incode> or <incode>padding-left</incode> in RTL</li>
    <li><incode>x</incode> - pour les classes qui modifient à la fois <incode>*-left</incode> ET <incode>*-right</incode></li>
    <li><incode>y</incode> - pour les classes qui modifient à la fois <incode>*-top</incode> ET <incode>*-bottom</incode></li>
    <li>blank - pour les classes qui modifient <incode>margin</incode> ou <incode>padding</incode> sur tous les 4 côté de l'élément.</li>
</ul>

<h3>Où la <em>dimension</em> est l'une des :</h3>



<ul>
    <li><incode>0</incode> - pour les classes qui éliminent <incode>margin</incode> ou <incode>padding</incode> en le fixant à <incode>0</incode></li>
    <li><incode>1</incode> - pour les classes qui modifient <incode>margin</incode> ou <incode>padding</incode> à <incode>$spacer * .25</incode></li>
    <li><incode>2</incode>  - pour les classes qui modifient code>margin</code> ou <incode>padding</incode> à <incode>$spacer * .5</incode></li>

    <li><incode>3</incode> - pour les classes qui modifient <incode>margin</incode> ou <incode>padding</incode> à <incode>$spacer</incode></li>
    <li><incode>4</incode> - pour les classes qui modifient <incode>margin</incode> ou <incode>padding</incode> à <incode>$spacer * 1.5</incode></li>
    <li><incode>5</incode> - pour les classes qui modifient <incode>margin</incode> ou <incode>padding</incode> à <incode>$spacer * 3</incode></li>
    <li><incode>auto</incode>  - pour les classes qui modifient <incode>margin</incode> ou <incode>padding</incode> à auto</li>
</ul>

<h3>Exemples</h3>
<highlight lang="html">&lt;h1 class=&quot;mt-0&quot;&gt;Abc&lt;/h1&gt;</highlight>
<p>Équivaut à appliquer le css <incode>margin-top: 0;</incode></p>

<highlight lang="html">&lt;div class=&quot;px-3&quot;&gt;Abc&lt;/div&gt;</highlight>
<p>Équivaut à appliquer le css <incode>padding-left: 1rem; padding-right: 1rem;</incode></p>


<br>
<doclink href="https://getbootstrap.com/docs/5.2/utilities/spacing/">Spacing</doclink>
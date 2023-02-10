<?php

/**
 * @type     article
 * @title    Utilitaires
 * @icon     images/icon.png
 * @abstract Bootstrap dispose de nombreuses classes utilitaires/d'aide permettant de styliser rapidement les éléments sans utiliser de code CSS.
 */
?>



<p>Bootstrap est truffés de classes utilitaires permettant de simplifier/accélérer le développement. Afin de vous familiariser avec ce concept, nous allons examiner quelques-unes d'entre elles.</p>

<grostitre>Image responsive</grostitre>

<p>Comme son nom le laisse sous-entendre, la classe&nbsp;<code>.img-fluid</code>&nbsp;sert à rendre une image fluid/responsive en lui appliquant les propriétés CSS&nbsp;suivantes:</p>

<highlight lang='css'>max-width: 100%;
height: auto;</highlight>

<p>La propriété&nbsp;<code>max-width</code>&nbsp;fait en sorte que l'image affichera selon sa taille normale, à moins que l'espace soit insuffisant. Dans ce cas, elle sera limitée à la largeur disponible. De son côté,&nbsp;<code>height: auto;</code>&nbsp;s'assure que l'image ne soit jamais&nbsp;déformée.</p>

<p>Pour activer cette classe, il suffit de l'ajouter à une image ainsi:</p>

<highlight lang='html'>&lt;img src=&quot;image.jpg&quot; class=&quot;img-fluid&quot;&gt;</highlight>

<doclink href='https://getbootstrap.com/docs/5.2/content/images/'>.img-fluid</doclink>

<dots></dots>

<grostitre>Alignements de texte</grostitre>


<p>Pour aligner un texte à gauche, au centre ou à droite, il est possible d'utiliser les classes utilitaires&nbsp;suivantes:</p>

<ul>
    <li><code>text-start</code>&nbsp;à gauche</li>
    <li><code>text-center</code>&nbsp;au centre</li>
    <li><code>text-end</code>&nbsp;à droite</li>
</ul>

<p>Toutes ces options d'alignements sont compatibles avec l'ajout d'un breakpoint afin d'indiquer quand leur comportement devrait devenir&nbsp;actif.</p>

<p>Par exemple, pour centrer un texte lorsque le breakpoint&nbsp;<code>lg</code>&nbsp;est atteint, il serait possible de&nbsp;faire:</p>

<highlight lang='html'>&lt;p class=&quot;text-lg-center&quot;&gt;Texte centré en lg&lt;/p&gt;</highlight>

<doclink href='https://getbootstrap.com/docs/5.2/utilities/text/'>.text-...</doclink>

<dots></dots>
<grostitre>Display</grostitre>


<p>Pour donner une valeur de&nbsp;<code>display</code>&nbsp;particulière à un élément, il est possible d'utiliser les classes utilitaires&nbsp;suivantes:</p>

<ul>
    <li>
        <code>d-block</code>&nbsp;pour display block.
    </li>
    <li>
        code>d-inline</code>&nbsp;pour display inline.
    </li>
    <li>
        <code>d-inline-block</code>&nbsp;pour display inline-block.
    </li>
    <li>
        <code>d-flex</code>&nbsp;pour display flex.
    </li>
    <li>
        <code>d-none</code>&nbsp;pour display none.
    </li>
    <li>
       etc.
    </li>
</ul>

<p>Toutes ces options de display sont compatibles avec l'ajout d'un breakpoint afin d'indiquer le moment où l'affichage un affichage devrait&nbsp;changer.</p>

<p>Par exemple, pour qu'un élément soit invisible par défaut, mais devienne en&nbsp;<code>display: block</code>&nbsp;lorsque le breakpoint&nbsp;<code>lg</code>&nbsp;est atteint, il serait possible de&nbsp;faire:</p>


<highlight lang='html'>&lt;div class=&quot;d-none d-lg-block&quot;&gt;...&lt;/div&gt;</highlight>

<doclink href='https://getbootstrap.com/docs/5.2/utilities/display/'>.d-...</doclink>

<dots></dots>

<grostitre>Display: Flex</grostitre>
<p>Comme on a vu avec le <a href="../grille/#rangees" target="_blank">système de grille</a>, les rangées pouvaient accueillir des classes utilitaires référent au système de flexbox afin de permettre d'aligner leur balises enfants, les columns. Vous vous rappelez certainement de cette formulation pour centrer toutes les colonnes dans leurs rangée en ajoutant la classe<code>.justify-content-center</code> à la balise contantnt la classe <code>.row</code>?</p>
<highlight lang='html'>&lt;div class=&quot;container&quot;&gt;
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
    <li><code>.d-flex</code></li>
    <li><code>.flex-row</code> : référence à la propriété css flex-direction</li>
    <li><code>.flex-column</code> : référence à la propriété css flex-direction</li>
    <li><code>.justify-content-center</code></li>
    <li><code>.justify-content-end</code></li>
    <li><code>.justify-content-between</code></li>
    <li><code>.align-items-start</code></li>
    <li><code>.align-items-center</code></li>
    <li><code>.align-items-stretch</code></li>

    <li><code>flex-wrap</code></li>
    <li><code>flex-nowrap</code></li>
    
</ul>

<h3>Balise enfant</h3>
<p>Liste non-exhaustive des classes que vous pouvez utiliser sur la <strong>balises enfants</strong> à positionner dans l'espace:</p>
<ul>
    <li><code>.align-self-start</code></li>
    <li><code>.align-self-center</code></li>
    <li><code>.flex-grow-1</code></li>
    <li><code>.flex-grow-2</code></li>
    <li><code>.flex-shrink-1</code></li>
    <li><code>.justify-content-between</code></li>
    <li><code>.align-items-start</code></li>
    <li><code>.align-items-center</code></li>
    <li><code>.align-items-stretch</code></li>
</ul>

<p>Sachez que vous pouvez toujours ajouter les breakpoints à ces classes afiin de faire des exception de positionnement dépendant de la largeur de l'écran. L'exemple suivant permettra d'afficher par défaut, sur petit écran, A, B et C un en dessous de l'autre grace à <code>.flex-column</code>, et à partir du breakpoint <em>>md</em>, ils s'afficheront un à côté de l'autre sur une même rangée, grâce à <code>.flex-md-row</code>.</p>

<highlight lang='html'>
&lt;div class=&quot;d-flex flex-column flex-md-row&quot;&gt;
    &lt;div class=&quot;w-25&quot;&gt;A&lt;/div&gt;
    &lt;div class=&quot;w-25&quot;&gt;B&lt;/div&gt;
    &lt;div class=&quot;w-25&quot;&gt;C&lt;/div&gt;
&lt;/div&gt;
</highlight>

<doclink href='https://getbootstrap.com/docs/5.2/utilities/flex/'>flex</doclink>


<dots></dots>

<grostitre>Espacement (spacing)</grostitre>

<p>Bootstrap comprend un large éventail de classes utilitaires de marge (margin), de remplissage (padding) pour modifier l'apparence d'un élément.</p>

<h3>Où la <em>propriété</em> est l'une des :</h3>

<ul>
    <li><code>m</code> - pour les classes qui modifient la marge <code>margin</code></li>
    <li><code>p</code> - pour les classes qui modifient le remplissage <code>padding</code></li>
</ul>

<h3>Où le <em>côté</em> est l'une des :</h3>

<ul>
    <li><code>t</code> - pour les classes qui modifient  <code>margin-top</code> ou <code>padding-top</code></li>
    <li><code>b</code>- pour les classes qui modifient <code>margin-bottom</code> ou <code>padding-bottom</code></li>
    <li><code>s</code> - (start) - pour les classes qui modifient <code>margin-left</code> ou <code>padding-left</code> in LTR, <code>margin-right</code> or <code>padding-right</code> in RTL</li>
    <li><code>e</code> - (end) - pour les classes qui modifient <code>margin-right</code> ou <code>padding-right</code> in LTR, <code>margin-left</code> or <code>padding-left</code> in RTL</li>
    <li><code>x</code> - pour les classes qui modifient à la fois <code>*-left</code> ET <code>*-right</code></li>
    <li><code>y</code> - pour les classes qui modifient à la fois <code>*-top</code> ET <code>*-bottom</code></li>
    <li>blank - pour les classes qui modifient <code>margin</code> ou <code>padding</code> sur tous les 4 côté de l'élément.</li>
</ul>

<h3>Où la <em>dimension</em> est l'une des :</h3>



<ul>
    <li><code>0</code> - pour les classes qui éliminent <code>margin</code> ou <code>padding</code> en le fixant à <code>0</code></li>
    <li><code>1</code> - pour les classes qui modifient <code>margin</code> ou <code>padding</code> à <code>$spacer * .25</code></li>
    <li><code>2</code>  - pour les classes qui modifient code>margin</code> ou <code>padding</code> à <code>$spacer * .5</code></li>

    <li><code>3</code> - pour les classes qui modifient <code>margin</code> ou <code>padding</code> à <code>$spacer</code></li>
    <li><code>4</code> - pour les classes qui modifient <code>margin</code> ou <code>padding</code> à <code>$spacer * 1.5</code></li>
    <li><code>5</code> - pour les classes qui modifient <code>margin</code> ou <code>padding</code> à <code>$spacer * 3</code></li>
    <li><code>auto</code>  - pour les classes qui modifient <code>margin</code> ou <code>padding</code> à auto</li>
</ul>

<h3>Exemples</h3>
<highlight lang='html'>&lt;h1 class=&quot;mt-0&quot;&gt;Abc&lt;/h1&gt;</highlight>
<p>Équivaut à appliquer le css <code>margin-top: 0;</code></p>

<highlight lang='html'>&lt;div class=&quot;px-3&quot;&gt;Abc&lt;/div&gt;</highlight>
<p>Équivaut à appliquer le css <code>padding-left: 1rem; padding-right: 1rem;</code></p>


<br>
<doclink href='https://getbootstrap.com/docs/5.2/utilities/spacing/'>Spacing</doclink>
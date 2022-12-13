<?php
/**
 * @type     article
 * @title    Linear-gradient
 * @icon     images/icon.png
 * @abstract background-image: linear-gradient(#00c774, #3c38ba);
 */
?>

<p>La propriété <span class="inline-code">background-image</span> accepte la fonction <span class="inline-code">linear-gradient()</span>. Comme son nom l'indique, celle-ci permet de définir un dégradé. Pour générer un dégradé, il faut minimalement attribuer deux couleurs en paramètre à la fonction.<br><br>Par exemple, pour définir un dégradé de vert à bleu:</p>

<highlight lang="css">background-image: linear-gradient(#00c774, #3c38ba);</highlight>

<codepen id="VwdJaKw" tab="result"></codepen>

<dots></dots>

<grostitre>Orientation</grostitre>

<p>
    Par défaut, les dégradés sont verticaux. Cependant, il est possible de spécifier une direction particulière en le spécifiant dans le premier paramètre de la fonction <span class="inline-code">linear-gradient()</span>.
    <br><br>
    Le plus simple est d'utiliser en début de fonction des mots-clés indiquant la direction.
    <br><br>
    Par exemple:
</p>

<ul>
    <li><span class="inline-code">to top</span></li>
    <li><span class="inline-code">to right</span></li>
    <li><span class="inline-code">to bottom</span> <em>(défaut)</em></li>
    <li><span class="inline-code">to left</span></li>
</ul>

<codepen id="XWYLdVG" tab="result"></codepen>

<p>Pour créer des dégradés diagonaux, il est possible de spécifier une deuxième direction dans le mot-clé.<br><br>Par exemple:</p>

<ul>
    <li><span class="inline-code">to top left</span></li>
    <li><span class="inline-code">to top right</span></li>
    <li><span class="inline-code">to bottom left</span></li>
    <li><span class="inline-code">to bottom right</span></li>
</ul>

<codepen id="RwJzaEK" tab="result"></codepen>

<dots></dots>

<grostitre>Degrés</grostitre>

<p>Il est aussi possible de spécifier une rotation en termes de degrés pour plus de précision.<br><br>Par exemple:</p>

<highlight lang="css">background-image: linear-gradient(90deg, #00c774, #3c38ba);</highlight>

<p>Serait l'équivalent de to right. Donc il serait possible de spécifier au degré prêt l'axe du dégradé souhaité.</p>

<dots></dots>

<grostitre>Points d'arrêt</grostitre>

<p>Par défaut, lorsqu'aucun point d'arrêt n'est spécifié, les couleurs sont distribuées de façon égale.</p>

<p>Par exemple un dégradé à trois couleurs, sans point d'arrêt, donc égales, génère de 0 à 50% une fusion du vert vers le bleu et de 50% à 100% une fusion de bleu vert le rouge.</p>

<highlight lang="css">background: linear-gradient(to right, #00c774, #3c38ba, #ff8487);</highlight>

<codepen id="PoarzJB" tab="result"></codepen>

<p>Il est cependant possible de définir un point d'arrêt après une couleur afin de spécifier à partir de quel point cette couleur doit commencer à fusionner avec la suivante.<br><br>Par exemple, pour contrôler la distribution du vert:</p>

<codepen id="qBKzNxm" tab="result"></codepen>

<doclink href="https://www.w3schools.com/cssref/func_linear-gradient.php">linear-gradient()</doclink>
<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/gradient/linear-gradient">linear-gradient()</doclink>

<dots></dots>

<grostitre>Compléments</grostitre>

<tool href="tools/uigradients"></tool>
<tool href="tools/css-gradient"></tool>

<knowmore href="https://www.joshwcomeau.com/css/make-beautiful-gradients/">Make Beautiful Gradients est un excellent billet de Josh W Comeau expliquant comme créer de superbes dégradés CSS.</knowmore>

<exercice href="exercices/background-igloofest"></exercice>

<dots></dots>
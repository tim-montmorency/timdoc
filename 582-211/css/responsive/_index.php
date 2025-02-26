<?php
/**
 * @type     article
 * @title    Responsive
 * @icon     images/icon.webp
 * @abstract Adaptation aux différents écrans
 * @ref      web/css
 */
?>

<p class="spacer">Les appareils mobiles prennent de plus en plus de place dans nos vies. En conséquence, il est impossible lors de la conception d'un site web de faire fi des multiples dimensions d'écrans qu'ils engendrent. D'où l'importance d'adopter une approche responsive.</p>

<p>Pour ce faire, il faut abandonner nos idées rigides:</p>

<ul>
    <li>🚫 Canvas prédéterminé</li>
    <li>🚫 Unités de mesure absolues</li>
    <li>🚫 Positionnement en absolu et en <incode>px</incode> toujours par rapport au <incode>body</incode></li>
</ul>

<p>Ça peut paraître compliqué à première vue, mais si on prend le temps d'analyser le tout calmement, nous verrons que ce n'est pas sorcier!</p>

<clipasset src="videos/css-responsive.mp4"></clipasset>

<dots></dots>


<grostitre>Adaptive</grostitre>

<p>L'approche adaptive utilise plusieurs mises en page prédéfinies <em>(ex: mobile, tablette, grand écran, etc.)</em>. En fonction de la dimension du navigateur, la mise en page la mieux adaptée est affichée.</p>

<dots></dots>


<grostitre>Responsive</grostitre>
<p>Le contenu est fluide et donc s'ajuste parfaitement à la dimension de l'écran, peu importe cette dernière.</p>

<quote author="Bruce Lee" title="Brute des arts martiaux" photo="images/bruce-lee.jpg">
    You put water in a cup, it becomes the cup;<br>
    You put water into a bottle, it becomes the bottle;<br>
    You put it in a teapot, it becomes the teapot.
</quote>

<dots></dots>


<grostitre>Responsive vs Adaptive</grostitre>

<p>Les sites <a href="#responsive">responsives</a> et <a href="#adaptive">adaptives</a> sont similaires, en ce sens où ils s'ajustent à leur environnement <em>(généralement la largeur du navigateur)</em>, mais divergent dans leur façon de faire.</p>

<clipasset src="videos/responsive-vs-adaptive.mp4"></clipasset>
<br>
<span class="remark">À gauche, responsive. À droite, adaptive.</span>

<knowmore href="https://blog.froont.com/9-basic-principles-of-responsive-web-design/">9 basic principles of responsive web design</knowmore>



<dots></dots>
<grostitre>Développement mobile-first</grostitre>

<quote author="Go-Globe" title="Screen Time Wars Mobile vs Desktop Usage Trends Across the Globe" photo="images/goglobe-logo.png">
    À l’heure actuelle, le plus gros du trafic du Web est réalisé via des appareils mobiles ! Plus de 60 % du volume de visites est effectué en surfant sur la toile via un téléphone mobile ou une tablette.
</quote>
<dots></dots>

<figure>
    <img src="images/Responsive-design-1.jpg" alt="">
    <figcaption>Source: <a href="https://webalia.fr/mobile-first-et-responsive-design/" target="_blank" rel="noopener noreferrer">webalia</a></figcaption>
</figure>

<dots></dots>
<p>La définition de l’approche <em>mobile-first</em> : stratégie de conception pour la réalisation des sites web en commençant par les versions mobiles afin d’optimiser au mieux le développement.</p>

<p>L’idée fondamentale dans cette conception de site web est de se focaliser sur l’essentiel pour la version mobile, puis tendre vers une version tablette et desktop plus avancée, en ajoutant des interactions, des effets plus complexes, etc. </p>

<figure>
    <img src="images/Responsive-design-2.jpg" alt="">
    <figcaption>Source: <a href="https://webalia.fr/mobile-first-et-responsive-design/" target="_blank" rel="noopener noreferrer">webalia</a></figcaption>
</figure>

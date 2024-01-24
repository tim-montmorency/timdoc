<?php 
/**
 * @type     article
 * @title    8-Parallaxe
 * @icon     ../images/icon.webp
 * @abstract Effet parallaxe à l'aide de GSAP et ScrollTrigger
 * @index    650
 * @ref      web/quadriciels/gsap
 */
?>
<grostitre>Parallaxe avec scrollTrigger</grostitre>

<p>D'abord, voici un rappel, qu'est-ce que le parallaxe, nous l'avons vu un session antérieure.</p>

<doclink href='https://smnarnold.com/cours/css/parallax'>Qu'est-ce que le parallaxe</doclink>

<dots></dots>
<p>Le moyen le plus simple de créer un effet de parallaxe avec ScrollTrigger est de modifier la position de l'image de fond (<em>background-image</em>). Ainsi, on pourra déplacer sa position du haut (<em>top</em>) de l'image d'arrire-plan, vers sa position du bas (<em>bottom</em>). </p>

<grostitre>Mouvement vertical</grostitre>


<info>Pour une section d'un site qui est, plus souvent qu'autrement, en mode paysage (plus large que haute), il serait mieux de sélectionner une image en mode portrait (plus haute que large).</info>


<h3>Pour les réglages CSS</h3>

<p>On place la position verticale à 0% ou 0px.
<br><small>Et si on souhaite la centrer à l'horizontal, on place la position horizontale à 50%, à vous de décider.</small></p>

<highlight lang='css'>#section-parallax{
    background-image: url(chemin/acces/image.jpg);
    background-size: cover;  /* ou 200% pour augmenter l'effet, si l'image originale est assez grande */
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: 50% 0%;
}</highlight>
<doclink href='https://developer.mozilla.org/fr/docs/Web/CSS/background-attachment'>Background-attachment</doclink>




<h3>Et pour le code JavaScript :</h3>
<highlight lang='JavaScript'>gsap.to("#section-parallax", {
    backgroundPosition: "50% 100%",
    ease: "none",
    scrollTrigger: {
        trigger: "#section-parallax",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        markers: true
    }
});</highlight>

<p>Tout d'abord, nous sélectionnons l'élément que nous voulons animer : <em>#section-parallax</em> . Il peut s'agir d'un ID ou d'une classe.</p>

<info>Avec GSAP, je vous le rappelle, il possible d'animer la majorité des propriétés CSS. Cependant, il est nécessaire de remplacer les traits d’union "-" par une nomenclature camelCase 🐫. Comme dans ce cas-ci, <incode>background-position</incode> devient <incode> backgroundPosition</incode> .</info>



<p>Nous souhaitons que la position de son arrière-plan <incode>background-position</incode> se déplace de "50% 0%" à "50% 100%". Il ira donc du haut vers le bas.</p>
<p>Pour l'effet de lissage de vitesse (<incode>ease</incode>), nous le réglons sur <incode>none</incode> , afin qu'il soit linéaire.</p>
<p>C'est tout pour l'animation.</p>



<h3>Nous devons ensuite définir les propriétés du ScrollTrigger.</h3>
<p>Le déclencheur est le même élément, nous pouvons donc entrer le même ID ici.</p>

<p>L'animation commencera lorsque le haut de la section <em>#section-parallax</em> atteindra le bas de la page, et se terminera lorsque le bas de la section atteindra le haut de la page. <a href="../scrolltrigger/#start-et-end" target="_blank">Comme vous le savez déjà, il s'agit des paramètres par défaut</a>, mais il est important de comprendre comment ils fonctionnent.</p>

<p>L'option <incode>scrub</incode> est réglée sur true, ce qui signifie que l'animation sera liée à la barre de défilement.</p>

<p>On affiche les marqueurs (<incode>markers</incode>) afin de voir le comportement, nous pourrons les enlever une fois satisfait du résultat.</p>


<h3>Résultat</h3>

<p class="codepen" data-height="600" data-theme-id="44431" data-default-tab="result" data-slug-hash="MWPbqQx" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/MWPbqQx">
  gsap parallax - tim - bg-img vertical</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<p>Bien sur vous pouvez aussi faire le contraire, c'est à dire styliser la position vertical à 100% par défaut (css) et changer la position avec GSAP à 0%. Le mouvement de l'image sera inversé.</p>

<dots></dots>

<grostitre>Mouvement horizontal</grostitre>

<p>Et si nous le déplacions de droite à gauche&nbsp;?</p>

<p>Nous fixons donc la position horizontale à 0%, et nous la déplacerons à 100 % :</p>

<highlight lang='css'>#section-parallax{
    background-image: url(chemin/acces/image.jpg);
    background-size: cover; /* ou 300% pour augmenter l'effet, si l'image originale est assez grande */
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: 0% 50%;
}</highlight>

<highlight lang='JavaScript'>gsap.to("#section-parallax", {
    backgroundPosition: "100% 50%",
    ease: "none",
    scrollTrigger: {
        trigger: "#section-parallax",
        start: "top bottom",
        end: "bottom top",
        scrub: true,
        markers: true
    }
});</highlight>


<p class="codepen" data-height="600" data-theme-id="44431" data-default-tab="result" data-slug-hash="RweoYOj" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/RweoYOj">
  gsap parallax - bg-img horizontal</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>

<dots></dots>

<grostitre>Taille et autres paramètres animables à explorer</grostitre>

<p>Nous pouvons tout déplacer. Cette fois, nous ne changeons pas la position de l'image d'arrière-plan mais la taille. <br>
Et nous ajoutons un texte parce que, pourquoi pas?</p>

<p>Et pour ce texte, nous allons initialement le cache en dehors du cadre à gauche avec <incode>transform: translateX(-100%);</incode>:</p>

<p class="codepen" data-height="600" data-theme-id="44431" data-default-tab="result" data-slug-hash="jOeVeOo" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/jOeVeOo">
  gsap parallax - bg-img horizontal</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>




<script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>




<!-- https://oxygen4fun.supadezign.com/tutorials/how-to-create-some-parallax-effects-with-gsap/ -->


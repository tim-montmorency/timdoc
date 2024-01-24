<?php 
/**
 * @type     article
 * @title    Conditions
 * @icon     ../images/icon.webp
 * @abstract if, else, else if
 * @index    24
 * @ref      web/sass
 */
?>

<p>SASS permet d'inclure des conditions <a rel="noopener noreferrer" href="#if">@if</a>, <a rel="noopener noreferrer" href="#else">@else</a> et <a target="_blank" rel="noopener noreferrer" href="#else-if">@else if</a> similaire aux conditions en JavaScript. Cette fonctionnalité permet d'écrire du code plus complexe plus facilement.</p>


<dots></dots>
<grostitre>@if</grostitre>
<p>La règle <incode>@if</incode> permet de contrôler l'exécution d'un bloc de style en fonction d'une condition.</p>

<p>Par exemple, une mixin qui permettrait de générer un avatar carré ou circulaire en fonction de la valeur du paramètre <incode>rounded</incode> <em>(true ou false)</em>:</p>
<highlight lang='css'>@mixin avatar($size: 100px, $rounded: false) {
  width: $size;
  height: $size;
  background-size: cover;
  background-position: 50% 50%;
  
  @if $rounded {
    border-radius: 50%;
  }
}</highlight>

<br>
<p>Pour obtenir un avatar carré de 100px, il serait possible d'écrire:</p>
<highlight lang='css'>.avatar-facebook {
  @include avatar; // Aucun paramètre. Tout par défaut
  background-image: url('facebook-logo.png');
}</highlight>

<br>
<p>Tandis que pour obtenir un avatar rond de 200px:</p>
<highlight lang='css'>.avatar-twitter {
  @include avatar(200px, true);
  background-image: url('twitter-logo.png');
}</highlight>




<br>
<p>Ce qui produirait les codes suivant:</p>

<highlight lang='css'>.avatar-facebook {
  width: 100px;
  height: 100px;
  background-size: cover;
  background-position: 50% 50%;
  background-image: url('facebook-logo.png');
}

.avatar-twitter {
  width: 200px;
  height: 200px;
  background-size: cover;
  background-position: 50% 50%;
  border-radius: 50%;
  background-image: url('twitter-logo.png');
}</highlight>

<doclink href='https://sass-lang.com/documentation/at-rules/control/if'>@if</doclink>


<dots></dots>
<grostitre>@else</grostitre>

<p>La règle <incode>@else</incode> permet de déclencher l'exécution d'un bloc de style lorsqu'une condition <a rel="noopener noreferrer" href="#if">@if</a> n'est pas respectée.</p>

<p>Par exemple, une mixin de choix de thème de couleur:</p>

<highlight lang='css'>@mixin dark-theme($dark: true) {
  @if $dark {
    background: black;
    color: white;
  } @else {
    background: white;
    color: black;
  }
}</highlight>

<br><br>
<p>Pour obtenir un menu blanc ⚪️ avec texte noir ⚫️ , il serait possible d'écrire:</p>

<highlight lang='css'>.menu {
  @include dark-theme(false);
}</highlight>

<br><br>



<p>Ce qui générerait le code suivant:</p>

<highlight lang='css'>.menu {
  background: white;
  color: black;
}</highlight>


<doclink href='https://sass-lang.com/documentation/at-rules/control/if#else'>@else</doclink>







<dots></dots>
<grostitre>@else if</grostitre>
<p>Par exemple, si pour créer une mixin permettant de gérer les breakpoints CSS d'un site à partir de mots-clés plutôt que de chiffres qui sont parfois difficiles à retenir, il serait possible de faire:</p>


<highlight lang='css'>@mixin breakpoint($size: sm) {
  @if $size == sm {
    @media (min-width: 576px) { @content; }
  } @else if $size == md {
    @media (min-width: 768px) { @content; }
  } @else if $size == lg {
    @media (min-width: 992px) { @content; }
  } @else if $size == xl {
    @media (min-width: 1200px) { @content; }
  }
}</highlight>
<br><br>

<p>Remarquez <incode>@content</incode> qui permet de récupérer tout ce qui se trouve à l'intérieur du <incode>@include</incode> de la mixin. </p><p>Par exemple:</p>


<highlight lang='css'>@include breakpoint(md) {
  body { font-size: 18px; }
}</highlight>

<br><br>



<p>Générera le code suivant:</p>
<highlight lang='css'>@media (min-width: 768px) {
  body { font-size: 18px; }
}</highlight>

<p>Cependant, vous n'avez pas à retenir le chiffre 768px. Mieux, si votre équipe décide de changer la valeur de <em>md</em> à 780px, elle peut simplement la changer dans la mixin et la valeur ce mettra à jours partout sans que personne n'aille à appliquer de modification à son code.</p>

<doclink href='https://sass-lang.com/documentation/at-rules/control/if#else-if'>@else-if</doclink>


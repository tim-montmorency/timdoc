<?php
/**
 * @type     article
 * @title    Position
 * @icon     images/icon.png
 * @abstract static, relative, absolute, fixed, sticky
 */
?>

<p class="spacer">Le flux normal, ou ce que les anglophones appellent le <em>“flow”</em>, est la façon dont les éléments sont affichés dans une page web lorsqu’aucun style ne leur est appliqué.</p>

<p>Dans le flux normal, les éléments block <em>(div, p, section, etc.)</em> sont positionnés un à la suite de l’autre, tandis que les éléments inline <em>(span, strong, em, etc.)</em>, sont positionnés un à côté de l’autre en fonction de leur ordre d’apparition dans le code HTML.</p>

<p>À titre de base comparative, chaque exemple sur cette page utilise le gabarit suivant 👇 composé d'éléments en <span class="inline-code">display: block;</span> placés un en dessous de l’autre. Seule la propriété <span class="inline-code">position</span> de ces boites fluctue d'un exemple à l'autre afin d'illustrer la différence engendrée par cette propriété. Un <span class="inline-code">top: 15vmin</span>; a aussi été attribué à la boite afin de mettre en évidence l'impact de <span class="inline-code">position</span>.</p>

<codepen id="PoBRxKb" height="340" tab="result"></codepen>

<dots></dots>

<grostitre>static</grostitre>

<p>Par défaut, le navigateur attribue la position <span class="inline-code">static</span> à tous les éléments. La particularité principale de cette position est que les propriétés <span class="inline-code">top</span>, <span class="inline-code">right</span>, <span class="inline-code">bottom</span>, <span class="inline-code">left</span> ou encore <span class="inline-code">z-index</span> n’ont <u>aucun impact</u> sur ces éléments 🚫.</p>

<p>Cette valeur de position à pour objectif de positionner les éléments comme le ferait le code HTML sans l’intervention du CSS. On remarque donc que la propriété <span class="inline-code">top</span> n'affecte aucunement la boite</p>

<codepen id="abjYQLx" height="340" tab="result"></codepen>

<dots></dots>


<grostitre>relative</grostitre>

<p>Les éléments en <span class="inline-code">position: relative;</span> se positionnent d'abord en fonction du flux normal de la page. Ils sont ensuite déplacés relativement à cet emplacement, d'où leur nom <span class="inline-code">position: relative;</span>.</p>

<p>On remarque donc dans l'exemple ci-dessous que la boite est décalée d'une demi-hauteur de boite par rapport à sa position normale dans le flux.</p>

<codepen id="qByoQVe" height="340" tab="result"></codepen>

<dots></dots>


<grostitre>absolute</grostitre>

<p>Les éléments en <span class="inline-code">position: absolute;</span> ignorent complètement le flux de la page et se positionnent en fonction du parent le plus près aillant une position autre que static.</p>

<p>On remarque dans l'exemple ci-dessous que les éléments respectant le flux se positionnent exactement comme si la boite 2 n'existait pas <em>(aucun espace vide entre la boite 1 et la 3)</em>. La boite 2 quant à elle se positionne par rapport au <span class="inline-code">&lt;body&gt;</span> qui en l'absence de parent avec une position devient sont point de référence.</p>

<codepen id="wvxmQye" height="340" tab="result"></codepen>

<dots></dots>


<grostitre>fixed</grostitre>

<p>Les éléments en <span class="inline-code">position: fixed;</span> ressemblent aux éléments en <a href="#absolute">position absolute</a>. Tout comme eux, ils ignorent le flux de la page. Cependant, plutôt que de se positionner en fonction d'un parent, ils se positionnent en fonction de la fenêtre <em>(viewport)</em>.</p>

<p>On remarque dans l'exemple ci-dessous que les éléments respectant le flux se positionnent exactement comme si la boite 2 n'existait pas <em>(aucun espace vide entre la boite 1 et la 3)</em>. La boite 2 quant à elle se positionne par rapport à la fenêtre, donc même si la page défile, la boite reste fixe.</p>

<codepen id="JjBLeLg" height="340" tab="result"></codepen>

<dots></dots>


<grostitre>sticky</grostitre>

<p>Les éléments en <span class="inline-code">position: sticky;</span> ressemblent aux éléments en <a href="#static">position static</a>. Tout comme eux, ils se positionnent d'abord en fonction du flux normal de la page. Cependant, lorsqu'une de leurs propriétés <span class="inline-code">top</span>, <span class="inline-code">right</span>, <span class="inline-code">bottom</span> ou <span class="inline-code">left</span> correspond au défilement de la page, l'élément devient fixe.</p>

<p>Dans l'exemple ci-dessous, la boite 2 n'est à priori pas affectée par la propriété <span class="inline-code">top</span>. Cependant, lorsque la page défile et que la boite se trouve à une distance du sommet équivalente à la valeur de sa propriété <span class="inline-code">top</span>, celle-ci devient fixe et arrête de défiler avec le reste de la page.</p>

<codepen id="xxJWQzv" height="340" tab="result"></codepen>

<dots></dots>


<exercice href="exercices/cat-in-the-box"></exercice>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/position">position</doclink>
<doclink href="https://www.w3schools.com/css/css_positioning.asp">position</doclink>

<dots></dots>



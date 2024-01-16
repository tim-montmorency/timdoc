<?php 
/**
 * @type     exercice
 * @title    Tool - Ænema
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez écrire du HTML et du CSS afin de recréer la pochette lenticulaire de l’album "Ænema" du groupe Tool.
 */
?>

<p class="spacer">Pour cet exercice, vous devez écrire du HTML et du CSS afin de recréer l’album <a target="_blank" href="https://open.spotify.com/album/6yWMN087PgSimbcVmHLEwG">"Ænema"</a> du groupe <a target="_blank" href="https://fr.wikipedia.org/wiki/Tool">Tool</a>.</p>

<p>Cet album a été nommé aux <a target="_blank" href="https://en.wikipedia.org/wiki/Grammy_Awards"><em>Grammy Awards</em></a> dans la catégorie <a target="_blank" href="https://en.wikipedia.org/wiki/Grammy_Award_for_Best_Recording_Package"><em>"Best Recording Package"</em></a> pour sa pochette <a target="_blank" href="https://en.wikipedia.org/wiki/Lenticular_printing">lenticulaire</a> qui donne un effet d'animation multi-images.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="./tool-aenima.zip">Dossier de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#2a3b3b</color>
<color>#000000</color>

<h3>Filtre SVG ⧩</h3>

<highlight lang="html">&lt;svg width=&quot;500&quot; height=&quot;500&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot;&gt;
    &lt;filter id=&quot;aenima&quot;&gt;
        &lt;feTurbulence id=&quot;turb&quot; type=&quot;fractalNoise&quot; baseFrequency=&quot;0 0&quot; numOctaves=&quot;8&quot; result=&quot;warp&quot; /&gt;
        &lt;animate xlink:href=&quot;#turb&quot; attributeName=&quot;baseFrequency&quot; values=&quot;0 0;0 0.026;0 0.0&quot; repeatCount=&quot;indefinite&quot; dur=&quot;30s&quot; /&gt;
        &lt;feDisplacementMap in=&quot;SourceGraphic&quot; in2=&quot;warp&quot; xChannelSelector=&quot;G&quot; yChannelSelector=&quot;B&quot; scale=&quot;100&quot; result=&quot;disp&quot;/&gt;
        &lt;feGaussianBlur in=&quot;disp&quot; stdDeviation=&quot;1&quot; result=&quot;blur&quot; /&gt;
        &lt;feColorMatrix in=&quot;blur&quot; mode=&quot;matrix&quot; values=&quot;1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 12 -3&quot; /&gt;
    &lt;/filter&gt;
&lt;/svg&gt;</highlight>

<h3>Médias</h3>

<mediafile src="images/eye-1.png">Œil 1</mediafile>
<mediafile src="images/eye-2.png">Œil 2</mediafile>
<mediafile src="images/logo.png">Logo</mediafile>
<mediafile src="images/sprite.png">Void Sprite</mediafile>

<dots></dots>


<grostitre>Requis de base</grostitre>

<checklist>
  Téléchargez une copie des images. Placez-les dans un dossier intitulé <span class="inline-code">images</span> dans votre projet et utilisez ces images plutôt que celles en ligne.
  Le fond de la page doit être un dégradé de <em>120 degrés</em> partant de noir à bleu gris avec un point d'arrêt à <em>10%</em>.
  L'album doit être de couleur <em>noire</em>, avoir une dimension de <em>500x500px</em> et être parfaitement centré horizontalement. <em>(Attention, votre page ne doit pas avoir de barre de défilement visible.)</em>
</checklist>

<grostitre>Yeux</grostitre>

<checklist>
  Le layer de yeux doit prendre toute l'espace horizontale et verticale.
  L'arrière plan doit avoir une dimension de <em>70px</em> par <em>80px</em> et ne se répéter que verticalement.
  À l'aide des sous-propriétés de <span class="inline-code">background</span>, disposez les yeux en 4 colones. Les deux premières colones doivent utiliser l'<em>oeil 1</em> et les deux suivantes l'<em>oeil 2</em>.
  Chaque colone doit être disposée à <em>10px</em> du haut. Pour déterminer la position horizontale, utilisez la fonction <span class="inline-code">calc((100% / 4 * n) + 52px)</span> où <em>n</em> est l'index de la colone partant à <em>0</em>.
  Copiez le filtre SVG et placez le dans le <span class="inline-code">body</span> sous l'album.
  Appliquez le filtre au layer de yeux avec la propriété <span class="inline-code">filter: url("#aenima");</span>.
</checklist>

<grostitre>Void</grostitre>

<checklist>
  Le layer de void doit avoir une dimension de <em>500x405px</em> et être positionné horizontalement et verticalement au centre de l'album.
  Appliquez lui l'image d'arrière-plan <span class="inline-code">sprite.png</span>
  Utilisez la propriété <span class="inline-code">filter</span> afin de lui appliquer un filtre <em>sepia</em> de <em>0.8</em>.
  Avec la règle CSS <span class="inline-code">@keyframes</span>, créez une animation nommée <span class="inline-code">void</span> qui fait bouger l'arrière-plan de <span class="inline-code">0 0</span> à <span class="inline-code">0 -29160px</span>;
  Appliquez cette animation au frame <em>void</em>. L'animation doit avoir une durée de <em>3s</em>, se répéter indéfiniement et avoir <em>72 steps</em> étant donné qu'il y a 72 images <em>(24fps)</em> à l'intérieur du sprite.
</checklist>

<grostitre>Tool</grostitre>

<checklist>
  Finalement, utilisez une balise <span class="inline-code">img</span> pour placer le logo horizontalement et verticalement au centre de l'album.
  Pour rafiner son emplacement, donnez-lui une marge intérieure top de <em>20px</em>.
</checklist>

<dots></dots>


<grostitre>Ambiance</grostitre>

<youtube src="6zpvlMp04D0"></youtube>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href="../../background/"></intlink>
<intlink href="../../filtres/"></intlink>
<intlink href="../../../html/svg/"></intlink>
<intlink href="../../animation/"></intlink>
<intlink href="../../animation-sprite-sheet/"></intlink>

<dots></dots>
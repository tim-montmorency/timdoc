<?php
/**
 * @type     article
 * @title    Typographie avancée
 * @icon     images/icon.webp
 * @abstract hiérarchie des textes, ...
 */
?>

<grostitre>1. Hiérarchie visuelle et choix des polices</grostitre>
<h3><strong>Hiérarchie visuelle</strong></h3>
<p>La hiérarchie visuelle est essentielle pour guider l'utilisateur à travers une page web et améliorer la lisibilité. Elle repose sur plusieurs éléments :</p>
<h3><strong>a) La taille des polices</strong></h3>
<ul>
    <li>Utiliser des tailles de texte différentes pour distinguer les titres, sous-titres et paragraphes.</li>
    <li>Exemples de tailles courantes (approximatives) :
        <highlight lang='css'>h1 { font-size: 2.5rem; }
h2 { font-size: 2rem; }
h3 { font-size: 1.5rem; }
p { font-size: 1rem; }</highlight>
    </li>
</ul>

<h3><strong>b) Le poids de la police (<incode>font-weight</incode>)</strong></h3>
<ul>
    <li>Mettre en valeur certains éléments avec une police plus épaisse.</li>
    <li>Valeurs possibles : <incode>100</incode> (extra light) → <incode>900</incode> (extra bold).
        <highlight lang='css'>h1 { font-weight: 700; }
p { font-weight: 400; }</highlight>
    </li>
</ul>

<h3><strong>c) La couleur et le contraste</strong></h3>
<ul>
    <li>Une couleur trop faible nuit à la lisibilité. Utiliser des contrastes suffisants.</li>
    <li>Exemples de bonnes pratiques :
        <highlight lang='css'>p { color: #333; } /* Gris foncé pour un bon contraste */
a { color: #007bff; text-decoration: none; } /* Lien en bleu, bien visible */</highlight>
    </li>
</ul>

<h3><strong>Choix des polices</strong></h3>
<p>Il existe trois grandes catégories de polices :</p>
<ul>
    <li><strong>Serif</strong> (ex. : Times New Roman, Georgia) → utilisées pour des styles plus classiques.</li>
    <li><strong>Sans-serif</strong> (ex. : Arial, Helvetica, Roboto) → plus modernes et lisibles à l’écran.</li>
    <li><strong>Monospace</strong> (ex. : Courier, Consolas) → utilisées pour du code ou des styles particuliers.</li>
</ul>

<h3><strong>Bonnes pratiques pour intégrer des polices</strong></h3>
<ul>
    <li>Utilisation de <code>font-family</code> en cascade pour assurer une alternative si une police n’est pas disponible.
        <highlight lang='css'>body { font-family: 'Roboto', Arial, sans-serif; }</highlight>
    </li>
    <li>Utilisation de <strong>Google Fonts</strong> :
        <highlight lang='html'>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        </highlight>
        Puis dans le CSS :
        <highlight lang='css'>h1 { font-family: 'Roboto', sans-serif; font-weight: 700; }</highlight>
    </li>
</ul>

<dots></dots>

<grostitre>2. Utilisation des unités fluides <incode>clamp()</incode>, <incode>em</incode>, <incode>rem</incode>, <incode>vw</incode>, <incode>vh</incode></grostitre>

<h3>a) Différences entre <incode>px</incode>, <incode>em</incode>, <incode>rem</incode></h3>
<ul>
    <li><strong><code>px</code> (pixels fixes)</strong> : taille absolue, ne s’adapte pas au zoom ou aux préférences de l’utilisateur.</li>
    <li><strong><code>em</code> (relative au parent)</strong> :
        <ul>
            <li><code>1em</code> = taille de la police du parent.</li>
            <li>Exemple :
                <highlight lang='css'>div { font-size: 20px; }  
p { font-size: 1.5em; } /* 1.5 × 20px = 30px */</highlight>
            </li>
        </ul>
    </li>
    <li><strong><code>rem</code> (relative à <code>html</code>)</strong> :
        <ul>
            <li><code>1rem</code> = taille de la police définie dans <code>&lt;html&gt;</code> (souvent 16px par défaut).</li>
            <li>Exemple :
                <highlight lang='css'>html { font-size: 16px; }
h1 { font-size: 2rem; } /* 2 × 16px = 32px */</highlight>
            </li>
        </ul>
    </li>
</ul>

<h3>b) <incode>vw</incode> et <incode>vh</incode> : Tailles relatives à la fenêtre</h3>
<p><strong><incode>vw</incode> (Viewport Width)</strong> : 1vw = 1% de la largeur de l’écran.</p>
Exemple:
<highlight lang='css'>h1 {
  font-size: 10vw; /* La taille du texte sera 10% de la largeur de la fenêtre */
}</highlight>
<small>➡ <strong>Effet visuel :</strong> Le texte grandit si on agrandit la fenêtre et rétrécit si on la réduit.</small>

<p><strong><incode>vh</incode> (Viewport Height)</strong> : 1vh = 1% de la hauteur de l’écran.</p>
Exemple:
<highlight lang='css'>div {
  height: 50vh; /* Hauteur équivalente à 50% de la hauteur de la fenêtre */
}</highlight>
<small>➡ <strong>Effet visuel :</strong> L’élément occupera toujours la moitié de l’écran en hauteur.</small>

<br>
<h3>c) Utilisation de <incode>clamp()</incode> pour des tailles fluides</h3>
<p>La fonction <code>clamp(min, val, max)</code> permet de définir une taille de texte qui s’ajuste automatiquement entre une valeur minimale et maximale.</p>
<highlight lang='css'>h1 {
  font-size: clamp(1.5rem, 5vw, 3rem);
}</highlight>

<p>➡ Ici, la taille du <code>h1</code> :</p>
<ul>
    <li>Ne descendra pas en dessous de <strong>1.5rem</strong>.</li>
    <li>S’adaptera à la largeur de l’écran (<strong>5vw</strong> = 5% de la largeur de l’écran).</li>
    <li>Ne dépassera pas <strong>3rem</strong>.</li>
</ul>

<dots></dots>

<grostitre>3. Effets stylisés <incode>text-shadow</incode>, <incode>gradient text</incode>, transitions au survol</grostitre>
<h3><strong>a) <incode>text-shadow</incode> : Ombres sur le texte</strong></h3>
<p>Ajoute une ombre au texte pour lui donner du relief.</p>
<highlight lang='css'>h1 {
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}</highlight>

<p>Explication des valeurs :</p>
<ul>
    <li><code>2px</code> → Déplacement horizontal.</li>
    <li><code>2px</code> → Déplacement vertical.</li>
    <li><code>5px</code> → Flou.</li>
    <li><code>rgba(0, 0, 0, 0.3)</code> → Couleur de l’ombre (noir transparent).</li>
</ul>
<h3>b) Texte en dégradé (<incode>background-clip: text</incode>)</h3>
<p>Applique un dégradé au texte.</p>
<highlight lang='css'>h1 {
  background: linear-gradient(to right, #ff7e5f, #feb47b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}</highlight>
<small>➡ <strong>Effet visuel :</strong> Un texte avec un dégradé de couleurs.</small>

<h3>c) Effets au survol avec <incode>transition</incode></h3>
<p>Permet d’animer des changements de couleur ou de taille au survol.</p>
<highlight lang='css'>a {
color: #007bff;
  transition: color 0.3s ease-in-out;
}
a:hover {
  color: #ff4500;
}</highlight>
<small>➡ <strong>Effet visuel :</strong> Lorsque l’utilisateur passe la souris sur un lien, la couleur change avec une transition fluide.</small>


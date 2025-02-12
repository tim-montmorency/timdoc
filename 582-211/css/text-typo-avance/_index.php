<?php
/**
 * @type     article
 * @title    Typographie avancée
 * @icon     images/icon.webp
 * @abstract hiérarchie des textes, ...
 */
?>


<grostitre>1.
    Hiérarchie visuelle et choix des polices</grostitre>
<h3 data-start="160" data-end="189"><strong data-start="164" data-end="187">Hiérarchie
        visuelle</strong></h3>
<p data-start="190" data-end="344">La hiérarchie visuelle est essentielle pour
    guider l'utilisateur à travers une page web et améliorer la lisibilité. Elle
    repose sur plusieurs éléments :</p>
<h3 data-start="346" data-end="380"><strong data-start="350" data-end="378">a) La
        taille des polices</strong></h3>
<ul data-start="381" data-end="657">
    <li data-start="381" data-end="482">Utiliser des tailles de texte différentes
        pour distinguer les titres, sous-titres et paragraphes.</li>
    <li data-start="483" data-end="657">Exemples de tailles courantes
        (approximatives) :

        <highlight lang='css'>h1 { font-size: 2.5rem; }
h2 { font-size: 2rem; }
h3 { font-size: 1.5rem; }
p { font-size: 1rem; }</highlight>

    </li>
</ul>


<h3 data-start="659" data-end="709"><strong data-start="663" data-end="707">b) Le
        poids de la police (<incode>font-weight</incode>)</strong></h3>
<ul data-start="710" data-end="912">
    <li data-start="710" data-end="778">Mettre en valeur certains éléments avec une
        police plus épaisse.</li>
    <li data-start="779" data-end="912">Valeurs possibles : <incode>100</incode> (extra
        light) → <incode>900</incode> (extra bold).


        <highlight lang='css'>h1 { font-weight: 700; }
p { font-weight: 400; }</highlight>

    </li>
</ul>


<h3 data-start="914" data-end="953"><strong data-start="918" data-end="951">c) La
        couleur et le contraste</strong></h3>
<ul data-start="954" data-end="1229">
    <li data-start="954" data-end="1039">Une couleur trop faible nuit à la
        lisibilité. Utiliser des contrastes suffisants.</li>
    <li data-start="1040" data-end="1229">Exemples de bonnes pratiques :
        <highlight lang='css'>p { color: #333; } /* Gris foncé pour un bon contraste */
a { color: #007bff; text-decoration: none; } /* Lien en bleu, bien visible */</highlight>

    </li>
</ul>


<h3 data-start="1231" data-end="1258"><strong data-start="1235" data-end="1256">Choix
        des polices</strong></h3>
<p data-start="1259" data-end="1308">Il existe trois grandes catégories de polices :
</p>
<ul data-start="1309" data-end="1588">
    <li data-start="1309" data-end="1400"><strong data-start="1311" data-end="1320">Serif</strong> (ex. : Times New
        Roman, Georgia) →
        utilisées pour des styles plus classiques.</li>
    <li data-start="1401" data-end="1491"><strong data-start="1403" data-end="1417">Sans-serif</strong> (ex. : Arial,
        Helvetica, Roboto) →
        plus modernes et lisibles à l’écran.</li>
    <li data-start="1492" data-end="1588"><strong data-start="1494" data-end="1507">Monospace</strong> (ex. : Courier,
        Consolas) → utilisées pour du code ou des styles particuliers.</li>
</ul>






<h3 data-start="1590" data-end="1642"><strong data-start="1594" data-end="1640">Bonnes
        pratiques pour intégrer des polices</strong></h3>

<ul data-start="1643" data-end="2084">
    <li data-start="1643" data-end="1819">Utilisation de <code data-start="1660" data-end="1673">font-family</code> en
        cascade pour assurer une alternative si une police n’est pas disponible.


        <highlight lang='css'>body { font-family: 'Roboto', Arial, sans-serif; }</highlight>

    </li>
    <li data-start="1820" data-end="2084">Utilisation de <strong data-start="1837" data-end="1853">Google Fonts</strong>
        :
        <highlight lang='html'>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        </highlight>

        Puis dans le CSS :
        <highlight lang='css'>h1 { font-family: 'Roboto', sans-serif; font-weight: 700; }</highlight>

    </li>
</ul>




<dots></dots>

<grostitre>2. Utilisation des unités fluides <incode>clamp()</incode>, <incode>em</incode>, <incode>rem</incode>, <incode>vw</incode>, <incode>vh</incode></grostitre>


<h3>a)
        Différences entre <incode>px</incode>, <incode>em</incode>, <incode>rem</incode></h3>

<ul data-start="2211" data-end="2751">
    <li data-start="2211" data-end="2317"><strong data-start="2213" data-end="2236"><code data-start="2215"
                data-end="2219">px</code>
            (pixels fixes)</strong> : taille absolue, ne s’adapte pas au zoom ou aux
        préférences de l’utilisateur.</li>
    <li data-start="2318" data-end="2516"><strong data-start="2320" data-end="2349"><code data-start="2322"
                data-end="2326">em</code>
            (relative au parent)</strong> :<ul data-start="2356" data-end="2516">
            <li data-start="2356" data-end="2398"><code data-start="2358" data-end="2363">1em</code> = taille de la
                police du parent.</li>
            <li data-start="2401" data-end="2516">Exemple :
                
<highlight lang='css'>div { font-size: 20px; }  
p { font-size: 1.5em; } /* 1.5 × 20px = 30px */</highlight>

             
            </li>
        </ul>
    </li>
    <li data-start="2517" data-end="2751"><strong data-start="2519" data-end="2548"><code data-start="2521"
                data-end="2526">rem</code>
            (relative à <code data-start="2539" data-end="2545">html</code>)</strong> :
        <ul data-start="2555" data-end="2751">
            <li data-start="2555" data-end="2636"><code data-start="2557" data-end="2563">1rem</code> = taille de la
                police définie dans
                <code data-start="2599" data-end="2607">&lt;html&gt;</code> (souvent
                16px par défaut).
            </li>
            <li data-start="2639" data-end="2751">Exemple :
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
<small>➡ <strong>Effet
visuel :</strong> Le texte grandit si on agrandit la fenêtre et rétrécit si on la réduit.</small>


<p><strong><incode>vw</incode> (Viewport Height)</strong> : 1vh = 1% de la hauteur de l’écran.</p>
Exemple:
<highlight lang='css'>div {
  height: 50vh; /* Hauteur équivalente à 50% de la hauteur de la fenêtre */
}</highlight>
<small>➡ <strong>Effet
visuel :</strong> L’élément occupera toujours la moitié de l’écran en hauteur.</small>





<br>
<h3>c) Utilisation de <incode>clamp()</incode> pour des tailles fluides</h3>

<p data-start="2816" data-end="2958">La fonction <code data-start="2828" data-end="2850">clamp(min, val, max)</code>
    permet de définir une taille de
    texte qui s’ajuste automatiquement entre une valeur minimale et maximale.</p>
<highlight lang='css'>h1 {
  font-size: clamp(1.5rem, 5vw, 3rem);
}</highlight>

<p data-start="3016" data-end="3044">➡ Ici, la taille du <code data-start="3036" data-end="3040">h1</code> :</p>
<ul data-start="3045" data-end="3202">
    <li data-start="3045" data-end="3091">Ne descendra pas en dessous de <strong data-start="3078"
            data-end="3088">1.5rem</strong>.</li>
    <li data-start="3092" data-end="3171">S’adaptera à la largeur de l’écran
        (<strong data-start="3130" data-end="3137">5vw</strong> = 5% de la largeur
        de l’écran).</li>
    <li data-start="3172" data-end="3202">Ne dépassera pas <strong data-start="3191" data-end="3199">3rem</strong>.</li>
</ul>



<dots></dots>

<grostitre>3.
        Effets stylisés <incode>text-shadow</incode>,
        <incode>gradient text</incode>, transitions au
        survol
</grostitre>
<h3 data-start="3294" data-end="3342"><strong data-start="3298" data-end="3340">a)
        <incode>text-shadow</incode> : Ombres sur le
        texte</strong></h3>
<p data-start="3343" data-end="3397">Ajoute une ombre au texte pour lui donner du
    relief.</p>
<highlight lang='css'>h1 {
  text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
}</highlight>

<p data-start="3463" data-end="3490">Explication des valeurs :</p>
<ul data-start="3491" data-end="3644">
    <li data-start="3491" data-end="3526"><code data-start="3493" data-end="3498">2px</code> → Déplacement horizontal.
    </li>
    <li data-start="3527" data-end="3560"><code data-start="3529" data-end="3534">2px</code> → Déplacement vertical.
    </li>
    <li data-start="3561" data-end="3578"><code data-start="3563" data-end="3568">5px</code> → Flou.</li>
    <li data-start="3579" data-end="3644"><code data-start="3581" data-end="3601">rgba(0, 0, 0, 0.3)</code> → Couleur de
        l’ombre (noir
        transparent).</li>
</ul>
<h3>b)
        Texte en dégradé (<incode>background-clip: text</incode>)</h3>
<p data-start="3702" data-end="3733">Applique un dégradé au texte.</p>
<highlight lang='css'>h1 {
  background: linear-gradient(to right, #ff7e5f, #feb47b);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}</highlight>

<small>➡ <strong data-start="3886" data-end="3904">Effet
        visuel :</strong> Un texte avec un dégradé de
    couleurs.</small>
<h3>c)
        Effets au survol avec <incode>transition</incode></h3>
<p data-start="3994" data-end="4062">Permet d’animer des changements de couleur ou
    de taille au survol.</p>
<highlight lang='css'>a {
  color: #007bff;
  transition: color 0.3s ease-in-out;
}
a:hover {
  color: #ff4500;
}</highlight>

<small>➡ <strong>Effet
        visuel :</strong> Lorsque l’utilisateur passe la
    souris sur un lien, la couleur change avec une transition fluide.</small>


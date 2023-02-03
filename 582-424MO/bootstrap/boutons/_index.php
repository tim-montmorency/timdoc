<?php

/**
 * @type     article
 * @title    Boutons
 * @icon     images/icon.png
 * @abstract Classes de boutons stylisés par Bootstrap
 */
?>

<p>Vous pouvez utiliser les classes de boutons stylisés par Bootstrap pour les actions de formulaires tel que « soumettre », pour ouvrir une boite de dialogue, pour des appels à l’action et même pour des liens vers d’autres pages.​</p>
<p>Bootstrap comprend plusieurs styles de boutons prédéfinis, chacun servant son propre objectif sémantique, avec quelques extras ajoutés pour plus de contrôle.</p>

<dots></dots>

<grostitre>La base: .btn</grostitre>
<p>À la base, les classes <code>.btn</code> sont conçues pour être utilisées avec l'élément <code>&lt;button&gt;</code>. ​</p>
<img src="images/buttons_all_types.png" alt="Exemples de plusieurs type de boutons Bootstrap">
<highlight lang="HTML">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;
</highlight>

<dots></dots>

<grostitre>Balises qui peuvent accueillir .btn</grostitre>
<p>À la base, les classes <code>.btn</code> sont conçues pour être utilisées avec l'élément <code>&lt;button&gt;</code>. Cependant, vous pouvez également utiliser ces classes sur des éléments <code>&lt;a&gt;</code> ou <code>&lt;input&gt;</code>.</p>
<img src="images/html_tag_with_btn.png" alt="Exemples de plusieurs balise HTML qui peuvent utiliser la classe .btn">
<highlight lang="HTML">&lt;a class=&quot;btn btn-primary&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Link&lt;/a&gt; 
&lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt; 
&lt;input class=&quot;btn btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;&gt; 
&lt;input class=&quot;btn btn-primary&quot; type=&quot;submit&quot; value=&quot;Submit&quot;&gt; 
&lt;input class=&quot;btn btn-primary&quot; type=&quot;reset&quot; value=&quot;Reset&quot;&gt;
</highlight>

<dots></dots>

<grostitre>Style avec contour</grostitre>
<p>Vous avez besoin d'un bouton, mais pas des couleurs d'arrière-plan pleines? Remplacez les classes de modificateur par défaut par <code>.btn-outline-…</code></p> 
<img src="images/outlined_buttons.png" alt="Exemples de plusieurs boutons avec le styles outline.">
<highlight lang="HTML">&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Success&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt; 
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;
</highlight>

<dots></dots>

<grostitre>Taille des boutons</grostitre>
<p>Envie de boutons plus grands ou plus petits ? Ajoutez <code>.btn-lg</code> ou <code>.btn-sm</code> pour des tailles supplémentaires.​</p>

<img src="images/btn_large.png" alt="Boutons plus grands.">

<highlight lang="HTML">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-lg&quot;&gt;Large button&lt;/button&gt;
</highlight>
<br><br>
<img src="images/btn_small.png" alt="Boutons plus petits.">
<highlight lang="HTML">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot;&gt;Small button&lt;/button&gt;
</highlight>

<doclink href="https://getbootstrap.com/docs/5.3/components/buttons/">Boutons Bootstrap</doclink>
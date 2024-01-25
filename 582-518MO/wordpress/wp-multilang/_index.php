<?php 
/**
 * @type     article
 * @title    WP-multilang
 * @icon     ../medias/icon.webp
 * @abstract Extentions de gestion multilanguages
 * @index    80
 * @ref      web/wordpress
 */
?>
<p>Wordpress possède plusieurs extensions permettant de traduire du&nbsp;contenu.</p><p>Pour sa gratuité, sa compatibilité avec&nbsp;<a href="../advanced-custom-fields" target="_blank">ACF</a>&nbsp;et sa facilité d'utilisation, nous regarderons&nbsp;WP&nbsp;Multilang.</p>

<dots></dots>
<grostitre>Installation</grostitre>
<p>Si votre installation a été faite en Canadien français&nbsp;🇨🇦, le simple fait d'activer l'extension donnera l'option d'entrer du contenu soit en français ou en&nbsp;anglais&nbsp;🇺🇸.</p>

<p>Si l'option n'est pas immédiatement disponible après l'activation de l'extension ou si vous désirez ajouter une autre langue, il suffit d'accéder&nbsp;à:</p>

<p><em>Réglages</em>&nbsp;➡️&nbsp;<em>WP Multilang</em>&nbsp;➡️&nbsp;<em>Langages</em></p><p>Pour contrôler les langages&nbsp;disponibles.</p>

<h3 id="Gestion du contenu">Gestion du contenu</h3>
<p>Dans le tableau de bord, sur la page listant les articles et/ou pages un libellé sera ajouté indiquant la disponibilité du post dans les différents langages supportés. Par exemple, la page d'exemple par défaut n'existe à priori qu'en Canadien&nbsp;français.</p>

<img src="images/wp-post-lang-flag.jpg" alt="On ne voit que le drapeau du Canada à côté du contenu Page d'exemple, cela signifie qu'il n'est disponible qu'en français canadien.">

<p>Simplement en activant l'onglet &nbsp;<em>English US</em>&nbsp;en haut de page, il est possible de changer de contexte&nbsp;d'édition.</p>

<img src="images/wpm-tabs.jpg" alt="Onglets disponibles pour naviguer d'une langue à une autre parmi les contenus.">
    
<p>Dès lors, si la page en question est modifiée, par exemple si son titre est traduit&nbsp;<em>"Example page"</em>, elle sera dorénavant listée du côté anglophone sous ce titre et un drapeau américain 🇺🇸s'ajoutera pour indiquer sa disponibilité dans cette&nbsp;langue.</p>

<img src="images/wpm-us-flag.jpg" alt="On voit le drapeau canadien et le drapeau américain, ce qui signifie qu'on une version canadienne française et une version en anglais américain.">





<dots></dots>
<grostitre>Posts personnalisés</grostitre>
 <p>Si un site offre l'option de traduire ses publications de base, il est généralement souhaitable que les posts personnalisés offrent la même option. Cependant, il est possible que WordPress n'affiche pas l'option par&nbsp;défaut.</p>
 
 
 <p>Pour remédier à ce problème, il suffit de créer un fichier&nbsp;<em>wpm-config.json</em>&nbsp;à la racine de son thème. Ce fichier devra contenir un objet JavaScript indiquant les posts personnalisés qui devraient-êtres&nbsp;traduit.</p>
 
 
 <p>Par exemple, si un seul type de posts personnalisés intitulé&nbsp;<em>produit</em>&nbsp;devait-être traduit, le contenu de ce fichier ressemblerait à&nbsp;ceci:</p>

<highlight lang='json'>{
  "post_types": {
    "produit": {}
  }
}</highlight>




<p>Si vous avez plusieurs types de posts personnalisés, par exemple:&nbsp;<em>produit</em>&nbsp;et&nbsp;<em>personne</em>, le fichier aurait alors l'air de&nbsp;ceci:</p>

<highlight lang='json'>{
  "post_types": {
    "produit": {},
    "personne": {}
  }
}</highlight>

<warning>Attention de ne pas faire d’erreur dans votre JSON, sinon il ne sera pas pris en compte. Pour vous assurer qu’il est bien formaté, vous pouvez le valider avec un&nbsp;<a href="https://jsonlint.com/" target="_blank">JSON Lint</a>.</warning>
<br>
<doclink href='https://wordpress.org/plugins/wp-multilang/'>WP Multilang</doclink>





<dots></dots>
<grostitre>Alternatives</grostitre>
<ul>
<li style="margin:0;"><a href="https://translatepress.com/" target="_blank">TranslatePress</a>&nbsp;<em>(Payant $$$)</em></li>
<li style="margin:0;"><a href="https://wpml.org/" target="_blank">WPML</a>&nbsp;<em>(Payant $$$)</em></li>
<li style="margin:0;"><a href="https://wordpress.org/plugins/polylang/" target="_blank">Polylang</a></li>

<li style="margin:0;">Etc.</p></li></ul>
    

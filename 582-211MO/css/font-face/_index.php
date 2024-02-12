<?php
/**
 * @type     article
 * @title    @font-face
 * @icon     images/icon.webp
 * @abstract Importer des polices d'écritures
 * @ref      web/css
 */
?>

<p class="spacer">Par défaut, le choix de <a target="_blank" href="https://www.cssfontstack.com/">polices natives compatibles sur tous les appareils est relativement limité</a>. Heureusement, il est possible d'importer des polices externes afin de contourner cette limitation via <incode>@font-face</incode>.</p>

<p>La règle <incode>@font-face</incode> permet d'importer une police sur une page en spécifiant où la police est située et sous quel nom y faire référence.</p>

<highlight lang="css">@font-face {
  src: url("/polices/bebas.woff2") format("woff2");
  font-family: "Bebas";
}</highlight>

<info>Placer ses règles <incode>@font-face</incode> en début de fichier CSS permet de s’assurer que la police soit importée avant qu’un style y fasse référence.</info>

<dots></dots>


<grostitre>src</grostitre>

<p>La propriété <incode>src</incode> dans cet exemple indique au navigateur que la police se nomme <incode>bebas.woff2</incode> et se trouve dans un dossier intitulé <incode>polices</incode>.</p>

<warning>Si votre nom contient des espaces, il faudra obligatoirement utiliser des guillemets autour de celui-ci. Les guillemets entourent le nom de la police pour assurer une interprétation correcte par le navigateur.</warning>

<dots></dots>


<grostitre>format</grostitre>

<p><incode>format</incode> est un complément à <incode>src</incode>. Il permet au navigateur de connaître le format de la police et de savoir s'il est en mesure de le supporter.</p>

<p>Voici une liste des extensions de polices les plus fréquentes et leur format associés:</p>

<table>
	<tr>
		<th>FICHIER</th>
		<th>FORMAT</th>
	</tr>
	<tr>
		<td>bebas.woff2</td>
		<td>format('woff2')</td>
	</tr>
	<tr>
		<td>bebas.woff</td>
		<td>format('woff')</td>
	</tr>
	<tr>
		<td>bebas.ttf</td>
		<td>format('truetype')</td>
	</tr>
	<tr>
		<td>bebas.otf</td>
		<td>format('opentype')</td>
	</tr>
	<tr>
		<td>bebas.eot</td>
		<td>format('eot')</td>
	</tr>
	<tr>
		<td>bebas.svg</td>
		<td>format('svg')</td>
	</tr>
</table>

<tool href="tools/online-font-converter/"></tool>

<dots></dots>


<grostitre>font-family</grostitre>

<p>La propriété <incode>font-family</incode>, à l'intérieur d'une règle @font-face, permet de spécifier le nom attribué à la police importée. Ce nom sera ensuite utilisé afin de faire référence à la police.</p>

<p>Il est conseillé d'utiliser le nom de la police afin d'éviter toute confusion, comme dans l'exemple précédent, la police est simplement nommée <em>"Bebas"</em> comme son fichier <em>(bebas.woff2)</em>. Néanmoins, ce nom pourrait théoriquement être n'importe quoi.</p>

<p>Par exemple <em>"Super police"</em>:</p>

<highlight lang="css">@font-face {
  src: url("/polices/bebas.woff2") format("woff2");
  font-family: "Super Police";
}</highlight>

<dots></dots>


<grostitre>Utilisation</grostitre>

<p>Une fois importée, la police peut être utilisée sur différents éléments.</p>

<p>Par exemple:</p>

<highlight lang="css">@font-face {
  src: url("/polices/bebas.woff2") format("woff2");
  font-family: "Bebas";
}

...

.title {
  font-family: "Bebas";
}</highlight>

<p>Dans cet exemple, les éléments avec la classe <incode>.title</incode> utilisent la police <em>Bebas</em>.</p>

<dots></dots>


<grostitre>Substitution</grostitre>

<p>Puisque les navigateurs ne supportent pas tous les mêmes formats de police, il est courant que plusieurs sources soient fournies. Dans ce cas, le navigateur utilisera le premier format de police compatible rencontré.</p>

<p>Par exemple:</p>

<highlight lang="css">@font-face {
  font-family: "Ma police";
  src: url("/polices/bebas.woff2") format("woff2"),
       url("/polices/bebas.otf") format("opentype");
}</highlight>

<dots></dots>


<grostitre>Variations</grostitre>

<p>Si une police contient plusieurs fichiers, chacun de ces fichiers correspond à une variation de la police. Par exemple, normal, italique, gras <em>(bold)</em>, etc. Dans ce cas, il est nécessaire de définir une règle <incode>@font-face</incode> pour chacun des fichiers.</p>

<p>Pour chacune de ces règles, la propriété <incode>font-family</incode> doit être la même puisqu'il s'agit de la même police. Cependant, une propriété supplémentaire, telle que: <incode>font-style</incode> ou <incode>font-weight</incode> doit être ajoutée afin d'indiquer la variation en question. Si aucune propriété supplémentaire n'est spécifiée, le navigateur conclura qu'il s'agit du style par défaut <em>(normal)</em>, de la police.</p>

<p>Par exemple:</p>

<highlight lang="css">@font-face {
  src: url("/polices/bebas-400.woff2") format("woff2");
  font-family: "Bebas";
}

@font-face {
  src: url("/polices/bebas-700.woff2") format("woff2");
  font-family: "Bebas";
  font-weight: bold; /* 👈 Variation spécifiée */
}</highlight>

<info>Une police importée via <incode>@font-face</incode> devrait être fonctionnelle même si elle n’est pas installée sur votre ordinateur. Le but premier est de rendre la police disponible aux utilisateurs visitant la page même s’ils n’ont pas la police d’installer sur leur ordinateur.</info>

<doclink href="https://developer.mozilla.org/fr/docs/Web/CSS/@font-face">@font-face</doclink>
<doclink href="https://www.w3schools.com/cssref/css3_pr_font-face_rule.asp">@font-face</doclink>

<dots></dots>

<tool href="tools/dafont/"></tool>
<exercice href="exercices/la-guerre-la-guerre/"></exercice>

<dots></dots>



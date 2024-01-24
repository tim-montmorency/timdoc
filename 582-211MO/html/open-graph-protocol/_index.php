<?php
/**
 * @type     article
 * @title    Open Graph Protocol
 * @icon     images/icon.png
 * @abstract type, title, description, image, url, etc.
 */
?>

<p class="spacer">Lorsque vous partagez une page sur les réseaux sociaux, un aperçu est généré. Vous, vous êtes peut-être déjà demandé pourquoi certains sites ont un aperçu de qualité, donnant le goût de cliquer sur leur lien alors que d'autres ont un aperçu décevant avec une image, un texte et une description quelconque.</p>

<p>Par défaut, ces informations sont déterminées par le réseau social les affichant. Cependant, il est possible de spécifier les informations à utiliser afin de contrôler le résultat obtenu grâce à l'<a target="_blank" href="https://ogp.me/">Open Graph Protocol</a>.</p>

<p>Ce protocole est notamment utilisé par:</p>

<ul>
    <li>Facebook <em>(Créateurs du protocole)</em></li>
    <li>Twitter</li>
    <li>LinkedIn</li>
    <li>Pinterest</li>
    <li>Et la majorité des applications de discussions <em>(Messenger, Slack, etc.)</em></li>
</ul>

<p>Il est important de remplir certaines métadonnées de base afin d'éviter un affichage disgracieux.</p>

<p>Voici par exemple le même site, à gauche sans métadonnées et à droite avec des métadonnées de base.</p>

<img src="images/og-vs.png">

<dots></dots>


<grostitre>og:title</grostitre>

<p>Définis le titre du site. Si la balise n'est pas renseignée, la valeur de la balise <incode>&lt;title&gt;</incode> sera utilisée.</p>

<p>Idéalement, le titre devrait être attrayant et avoir une longueur variant entre 60 et 90 caractères.</p>

<highlight lang="html">&lt;meta property=&quot;og:title&quot; content=&quot;TIM - Collège Montmorency&quot;&gt;</highlight>

<warning>Facebook tronque les titres lorsqu’ils excèdent 88 caractères.</warning>

<dots></dots>


<grostitre>og:type</grostitre>

<p>Définis le type de contenu partagé, notamment:</p>

<ul>
    <li>Website <em>(par défaut)</em></li>
    <li>Music</li>
    <li>Video</li>
    <li>Article</li>
    <li>Book</li>
    <li>Profile</li>
    <li>Etc.</li>
</ul>

<p>Pour voir la <a target="_blank" href="https://ogp.me/#types">liste complète des options</a>.</p>

<highlight lang="html">&lt;meta property=&quot;og:type&quot; content=&quot;website&quot;&gt;</highlight>

<dots></dots>


<grostitre>og:description</grostitre>

<p>Courte description du site devant tenir en une ou deux phrases. Contrairement à la balise <incode>&lt;meta name=&quot;description&quot;&gt;</incode> la balise <incode>&lt;meta property=&quot;og:description&quot;&gt;</incode> n'affecte pas le référence du site. Néanmoins, faites attention à son contenu puisqu'il sera affiché sous le titre de l'aperçu dans la majorité des réseaux sociaux.</p>

<highlight lang="html">&lt;meta property=&quot;og:description&quot; content=&quot;Programme de Technique d&#39;Intégration Multimédias du Collège Montmorency situé à Laval, Québec.&quot;&gt;</highlight>

<warning>La longueur maximale ne devrait pas excéder 200 caractères afin d’éviter de voir son texte tronqué.</warning>

<dots></dots>


<grostitre>og:image</grostitre>

<p>Définis l'url de l'image 🖼️ à utiliser pour l'aperçu du site. Cette balise est importante afin d'éviter qu'un carré noir ⬛ ou pire une image aléatoire sur la page soit promue l'image d'aperçu officielle. Par exemple, le cas inopportun où une publicité devient l'aperçu d'une page 😱.</p>

<p>Au minimum, l'image doit avoir 600px de large, mais idéalement une largeur de 1080px ou plus est désirée afin d'afficher convenablement sur les appareils munis d'un écran de type haute définition et un ratio 16:9 est encouragé.</p>

<highlight lang="html">&lt;meta property=&quot;og:image&quot; content=&quot;https://tim-montmorency.com/public/img/tim-og.jpg&quot;&gt;</highlight>

<warning>Le contenu important de l’image devrait se trouver au centre, car Facebook tend à couper les extrémités.</warning>

<p>Idéalement, cette balise est complétée par les balises <incode>og:image:width</incode> et <incode>og:image:height</incode> afin de spécifier la dimension de l'image d'aperçu.</p>

<highlight lang="html">&lt;meta property=&quot;og:image:width&quot; content=&quot;1920&quot;&gt;
&lt;meta property=&quot;og:image:height&quot; content=&quot;1008&quot;&gt;</highlight>

<dots></dots>


<grostitre>og:url</grostitre>

<p>Définis l'url devant être utilisée pour les partages.</p>

<p>Ainsi, si une page répond à plus d'une adresse, par exemple:</p>

<ul>
    <li><a target="blank" href="https://www.tim-montmorency.com/">https://www.tim-montmorency.com</a></li>
    <li><a target="blank" href="https://tim-montmorency.com/">https://tim-montmorency.com</a></li>
</ul>

<p>Il est possible de spécifier que lors d'un partage l'adresse utilisée devrait être <a target="_blank" href="https://tim-montmorency.com">https://tim-montmorency.com</a></p>

<dots></dots>


<grostitre>Extras</grostitre>

<ul>
    <li><incode>og:audio</incode> L'URL d'un fichier audio accompagnant la  publication.</li>
    <li><incode>og:locale</incode> La langue et la culture de la publication <em>(Par défaut: en_US)</em>.</li>
    <li><incode>og:site_name</incode> Le nom du site web.</li>
    <li><incode>og:video</incode> L'URL d'un fichier vidéo accompagnant la  publication.</li>
</ul>

<dots></dots>


<tool href="tools/facebook-debugger/"></tool>
<tool href="tools/twitter-card-validator/"></tool>

<doclink href="https://ogp.me/">Open Graph protocol</doclink>
<doclink href="https://developers.facebook.com/docs/sharing/webmasters">Guide de partage</doclink>

<dots></dots>















<?php 
/**
 * @type     article
 * @title    Chargement différé
 * @icon     images/perf-icon.jpg
 * @abstract Lazy loading des images lorsqu'elle entrent dans la zone visible.
 * @index 200
 */
?>

<p>Le chargement différé (<em>lazy loading</em> en anglais) est une stratégie d'identification des ressources non bloquantes (non critiques) afin de ne les charger qu'au moment où elles sont utiles. C'est une façon réduire le  temps de chargement de la page et d'éviter des téléchargements inutiles.</p>

<p>Le chargement différé peut se dérouler à plusieurs moments du chargement d'une page, mais il se déroule le plus souvent lorsque l'internaute interagit avec le site, surtout avec le défilement, au moment où le contenu arrive dans le cadre visible de la page.</p>

<p>Les images constituent le type d'élément le plus demandé pour la plupart des sites Web et consomment généralement plus de bande passante que toute autre ressource. 90% des sites envoient plus de 5 Mo d'images sur ordinateur et sur mobile. Cela fait beaucoup de photos de chats!</p>
<img src="images/chat.gif" alt="Chat">

<grostitre>Attribut loading</grostitre> 

<p>Avec les versions récentes des navigateurs, un attribut est maintenant supporté sur les balises images: <incode>loading</incode>. Vous pouvez utiliser cet attribut pour différer complètement le chargement des images hors écran accessibles par défilement:</p>
<p>Elles ne seront donc chargées que si l'utilisateur défile jusqu'à cette image. Sinon, aucune image n'est chargée pour rien.</p>

<highlight lang='html'>&lt;img src=&quot;image.png&quot; loading=&quot;lazy&quot; alt=&quot;…&quot; width=&quot;200&quot; height=&quot;200&quot;&gt;</highlight>

<h3>Attributs de dimension</h3>
<p>Les images doivent idéalement inclure des attributs de dimension.</p>
<p>Lorsque le navigateur charge une image, il n'en connaît pas immédiatement les dimensions, sauf si elles sont explicitement spécifiées. Afin de permettre au navigateur de réserver suffisamment d'espace pour les images sur une page, nous vous recommandons d'inclure les attributs width et height dans toutes les balises <incode>&lt;img&gt;</incode>. Si les dimensions ne sont pas spécifiées, des décalages de mise en page peuvent se produire. Ces décalages sont plus visibles sur les pages qui mettent un certain temps à se charger.</p>

<highlight lang='html'>&lt;img src=&quot;image.png&quot; loading=&quot;lazy&quot; alt=&quot;…&quot; width=&quot;200&quot; height=&quot;200&quot;&gt;</highlight>
<p>ou</p>
<highlight lang='html'>&lt;img src=&quot;image.png&quot; loading=&quot;lazy&quot; alt=&quot;…&quot; style=&quot;height:200px; width:200px;&quot;&gt;</highlight>

<doclink href='https://developer.mozilla.org/fr/docs/Web/Performance/Lazy_loading'>Le chargement différé</doclink>
<doclink href='https://web.dev/articles/browser-level-image-lazy-loading?hl=fr'>Chargement différé des images</doclink>

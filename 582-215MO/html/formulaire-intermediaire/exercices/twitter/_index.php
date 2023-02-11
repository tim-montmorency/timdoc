<?php 
/**
 * @type     exercice
 * @title    Select - Twitter
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devrez compléter le formulaire de Twitter demandant la date de naissance de son nouveau membre.
 */
?>

<p class="spacer">Pour cet exercice, vous devrez compléter le formulaire de <a target="_blank" href="https://twitter.com/">Twitter</a> demandant la date de naissance de son nouveau membre.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/select-twitter-apercu.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/gOjVByK?editors=1100">Pen de départ</doclink>

<dots></dots>


<grostitre>Requis fonctionnels</grostitre>

<checklist>
    Créez un menu déroulant permettant de choisir sa date de naissance. Attribuez-y les attributs <span class="inline-code">name</span> et <span class="inline-code">id</span> et donnez leur la valeur <span class="inline-code">day</span> afin de permettre au back-end de récupérer sa valeur.<br><br>N'oubliez pas d'ajouter un libellé intitulé <em>"jour"</em> à votre menu déroulant.
    Puisqu'un mois peut contenir 31 jours, offrez 31 options dans ce menu déroulant. Chacune de ces options doit avoir comme valeur et comme texte affiché un nombre de 1 à 31.<br><br>Plutôt que d'écrire ces 31 options à la main, essayez la commande Emmet suivante: <span class="inline-code">option[value="$"]{$}*31</span> suivit de la touche tab.
    De façon similaire au précédent menu déroulant, créez-en un nouveau, mais cette fois-ci pour le mois de naissance de l'usager et configurez ses attributs <span class="inline-code">name</span> et <span class="inline-code">id</span> à <span class="inline-code">month</span>, afin de pouvoir y faire référence en back-end.<br><br>Attribuez cette fois à chaque option une valeur allant de 1 à 12, mais affichez les noms complets de chaque mois afin de simplifier la vie à l'utilisateur. <em>(Malheureusement, il n'y a pas de raccourcis Emmet cette fois)</em>
    Créez un dernier menu déroulant permettant à l'usager de choisir son année de naissance. Ses attributs <span class="inline-code">name</span> et <span class="inline-code">id</span> doivent avoir la valeur <span class="inline-code">year</span> et ses options doivent allez de 2007 jusqu'à 1980. <em>(La valeur et le texte affiché sont les mêmes)</em>
</checklist>




























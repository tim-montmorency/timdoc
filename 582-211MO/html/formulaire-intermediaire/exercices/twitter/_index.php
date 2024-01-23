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
    Les données du formulaire doivent-êtres envoyées avec la méthode <span class="inline-code">get</span> à la page suivante <span class="inline-code">https://tim-montmorency.com/timdoc/582-215MO/html/formulaire-intermediaire/exercices/twitter/submit/</span> lorsque le formulaire est soumis.
    Afin de soumettre le formulaire, ajoutez un champ de type submit affichant le texte <em>"Suivant"</em>.
</checklist>

<info>Si votre formulaire fonctionne bien, vous devriez obtenir un message vous donnant l’âge de l’usager.</info>

<dots></dots>


<grostitre>Requis visuel</grostitre>

<checklist>
    Positionnez le formulaire au centre de la page, ajoutez-lui une ombre noire ⚫️ d'une opacité de 25% et une dimension de 20px afin de donner l'impression que le formulaire flotte légèrement au-dessus de la page.
    Faites en sorte que tous les textes à l'intérieur du formulaire soient centrés et profitez-en pour attribuer une taille de police de 18px au titre.
    Les libellés et le bouton <em>"Suivant"</em> doivent avoir une taille de texte de 12px.
    Les menus déroulants doivent avoir une largeur minimale de 100px, une marge intérieure d'une demi-lettre, des coins arrondis de 3px et une bordure de 2px utilisant la couleur contenue dans la variable <span class="inline-code">--secondary</span>.
    Le bouton <em>"Suivant"</em> doit prendre toute la largeur du formulaire, avoir une hauteur de 40px, des coins arrondis de 20px, une marge vers le haut de 10px, ainsi que la couleur de fond contenu dans la variable <span class="inline-code">--primary</span> par défaut et celle de <span class="inline-code">--primary-alt</span> lorsqu'il est survolé.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<img src="../../../formulaire-intermediaire/" alt="">

<intlink href="../../../formulaire/"></intlink>
<intlink href="../../../formulaire-intermediaire/"></intlink>

<dots></dots>
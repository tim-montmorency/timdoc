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

<doclink href="https://codepen.io/pen?template=mdaqyOm">Pen de départ</doclink>

<h2>Action</h2>

<highlight lang="html">https://tim-montmorency.com/timdoc/582-215MO/html/formulaire-intermediaire/exercices/twitter/submit/</highlight>

<dots></dots>


<grostitre>Requis fonctionnels</grostitre>

<checklist>
    Premièrement, créer une forme avec la classe "<em>birthday</em>" ainsi que l'action écrite ci-dessus.
    Ensuite, ajoutez un titre <em>h1</em> avec une classe : <em>title</em>.
    Le texte du titre est : <em>Quelle est votre date d'anniversaire</em>.
    Maintenant, ajoutez une <em>div</em>.
    Dans cette <em>div</em>, créez un menu déroulant permettant de choisir sa date de naissance. Attribuez-y les attributs <span class="inline-code">name</span>= "day", <span class="inline-code">id</span>="day" et <span class="inline-code">class</span>="jour" afin de permettre au back-end de récupérer sa valeur.<br><br>N'oubliez pas d'ajouter un libellé intitulé <em>"jour"</em> à votre menu déroulant.
    Puisqu'un mois peut contenir 31 jours, offrez 31 options dans ce menu déroulant. Chacune de ces options doit avoir comme valeur et comme texte affiché un nombre de 1 à 31.<br>
    Plutôt que d'écrire ces 31 options à la main, essayez la commande Emmet suivante: <span class="inline-code">option[value="$"]{$}*31</span> suivit de la touche tab.
    De façon similaire au précédent menu déroulant, créez-en une nouvelle <em>div</em>, mais cette fois-ci pour le mois de naissance de l'usager et configurer ses attributs <span class="inline-code">name</span>="month", <span class="inline-code">id</span>="month" et <span class="inline-code">class</span>="mois", afin de pouvoir y faire référence en back-end.<br><br>Attribuez cette fois à chaque option une valeur allant de 1 à 12, mais affichez les noms complets de chaque mois afin de simplifier la vie à l'utilisateur. (Malheureusement, il n'y a pas de raccourcis Emmet cette fois)
    Créez une dernière <em>div</em> avec un menu déroulant permettant à l'usager de choisir son année de naissance. Les attributs <span class="inline-code">name</span>="year", <span class="inline-code">id</span>="year" et <span class="inline-code">class</span>="annee"  et les options doivent aller de 2007 jusqu'à 1980. <em>(Les valeurs et les textes affichés sont les mêmes)</em>(il n'y a pas de raccourcis Emmet!)
    Afin de soumettre le formulaire, ajoutez un champ de type submit affichant le texte <em>"Suivant"</em>.
</checklist>

<info>Si votre formulaire fonctionne bien, vous devriez obtenir un message vous donnant l’âge de l’usager.</info>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<img src="../../../formulaire-intermediaire/" alt="">

<?php intlink("../../../formulaire/"); ?>
<?php intlink("../../../formulaire-intermediaire/"); ?>

<dots></dots>
<?php

/**
 * @type     exercice
 * @title    Consignes - Jeu du 27
 * @icon     medias/thumb.jpg
 * @abstract Créer un jeu de cartes en CSS et JS
 */
?>

<p>Pour cet exercice, vous devez compléter un jeu de cartes déjà entamé. Le joueur doit piger 3 cartes dans le but d’obtenir un pointage supérieur à celui du casino. Cependant attention, il ne faut pas dépasser 27.</p>
<p>Aperçu du résultat 👇</p>


<clipasset src="medias/cartes-jeu-du-27.mp4"></clipasset>

<dots></dots>
<grostitre>Matériels</grostitre>
<doclink href="https://codepen.io/tim-momo/pen/NWEZxyB">Pen de départ</doclink>

<grostitre>Couleurs 🎨</grostitre>

<table class="table-couleurs">
    <tr>
        <td>Gris pâle</td>
        <td>
            <color>#f5f5f5</color>
        </td>
    </tr>
    <tr>
        <td>Cuivré</td>
        <td>
            <color>#AC9494</color>
        </td>
    </tr>
    <tr>
        <td>Noir fumée</td>
        <td>
            <color>#2B2A2F</color>
        </td>
    </tr>
</table>

<dots></dots>
<grostitre>Requis CSS</grostitre>

<checklist>Le fond du site doit être gris pâle.
Le jeu <em>(game)</em> doit-être centré verticalement ↕️ et horizontalement ↔️ dans la page. 
Le titre <em>"Jeu du 27"</em> doit avoir une taille de 36px, être en gras, en majuscule, être centré et utiliser la couleur cuivrée.
Les règles <em>(rules)</em> doivent-être de couleur cuivré, avoir une marge intérieure de 5px verticalement et de 10px horizontalement, en plus d'avoir un espace uniforme (égale) entre elles.
Le bouton <em>"Commencez"</em> doit-être centré horizontalement ↔️, avoir une couleur de fond noir fumée, une couleur de texte cuivrée, une taille de 16px, être en majuscule, ne pas avoir de bordure, avoir des coins arrondis de 8px et une marge intérieure de 6px verticalement et 8px horizontalement.
Au survol, la couleur de fond du bouton <em>"Commencez"</em> devrait devenir complètement noir.</checklist>



<dots></dots>
<grostitre>Requis JavaScript</grostitre>
<checklist>
Stockez tous les éléments qui contiennent la classe <incode>.card</incode> dans une variable.
Bouclez ensuite sur chacun de ces éléments et attribuez-leur la classe <incode>.noX</incode> où <incode>X</incode> représente un nombre de 1 à 3 basé sur l'index courant de la boucle. Ceci devrait faire apparaitre l'as <em>(1)</em>, le 2 et le 3 de carreau ♦️.
Déplacez maintenant votre boucle de sorte qu'elle se produise uniquement lorsque le bouton <em>"Commencez"</em> est cliqué.
Plutôt que de vous baser directement sur l'index d'itération de la boucle afin d'afficher les cartes, utilisez les valeurs dans le tableau <incode>cardsValues</incode> afin d'afficher les 3 premières valeurs. 
Afin de ne pas toujours afficher les mêmes 3 cartes, vous devez <strong>mélanger de façon aléatoire l'ordre des cartes</strong> dans tableau <incode>cardsValues</incode> en utilisant adéquatement l'<a target="_blank" onclick="event.stopPropagation()" rel="noopener noreferrer" href="https://smnarnold.com/cours/javascript/objet-array">objet Array</a>. Puisque les 3 premières cartes du tableau varient, vous devriez maintenant avoir des cartes aléatoires au clic du bouton <em>"Commencez"</em>.
Assurez-vous qu'à chaque fois que le bouton <em>"Commencez"</em> est cliqué que chaque carte n'a que les classes <em>"card"</em> et son numéro <em>(noX)</em> et non plusieurs numéros de carte, sinon l'affichage de la carte pourrait être erroné.<br><incode>🚫 div class="card no3 no6 no4"</incode>
Lorsque le bouton <em>"Commencez"</em> est cliqué, créez-vous une variable correspondant au <strong>pointage du joueur</strong>, soit 0 par défaut. Ajoutez la valeur de chaque carte tirée par le joueur à ce pointage et faites un console log de cette variable. Le nombre obtenu devrait correspondre à la somme des trois cartes affichées (bref additionnez les trois valeurs aux index 0, 1 et 2 du tableau <em>cardsValues</em>).
Toujours lorsque le bouton <em>"Commencez"</em> est cliqué, créez-vous une variable correspondant au <strong>pointage du casino</strong>, soit 0 par défaut. Additionnez la valeur des trois cartes suivantes dans <incode>cardsValues</incode> (bref, additionnez les trois valeurs placées aux positions 3, 4 et 5 du tableau <em>cardsValues</em>).
Si le joueur <strong>dépasse 27pts</strong>, remplacez le texte du message <em>"Jeu du 27"</em> par <em>"X vous dépassez, le casino gagne"</em>. Si le casino dépasse 27pts, affichez le message <em>"Le casino dépasse, vous gagnez"</em>. (Dans la phrase précédente, X doit être le score du joueur).
Si le joueur et le casino ne dépassent pas, <strong>comparer leurs pointages</strong>. En cas d'égalité, remplacez le message par <em>"Égalité! X à Y"</em>. Si le joueur a le plus haut pointage, affichez le message: <em>"Vous avez gagné X à Y"</em>, dans le cas inverse: <em>"Vous avez perdu X à Y"</em>. (Dans les phrases précédentes, X doit être le score du joueur et Y par le score du casino).
</checklist>


<dots> </dots>

<grostitre>Notes de cours 📚</grostitre>
<doclink href="https://smnarnold.com/cours/javascript/queryselectorall">QuerySelectorAll</doclink>
<doclink href="https://smnarnold.com/cours/javascript/boucle-foreach">Boucle forEach()</doclink>
<doclink href="https://smnarnold.com/cours/javascript/classlist">ClassList</doclink>
<doclink href="https://smnarnold.com/cours/javascript/queryselector">QuerySelector()</doclink>
<doclink href="https://smnarnold.com/cours/javascript/addeventlistener">AddEventListener()</doclink>
<doclink href="https://smnarnold.com/cours/javascript/objet-array">L'objet Array</doclink>
<doclink href="https://smnarnold.com/cours/javascript/manipulation-des-contenus">Manipulation des contenus</doclink>

    
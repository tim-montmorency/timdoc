<?php 
/**
 * @type     exercice
 * @title    Aspect-ratio - The Boys
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice, vous devez réaliser une affiche publicitaire ayant pour thème la série The Boys d’Amazon Prime.
 */
?>

<p class="spacer">Pour cet exercice, vous devez réaliser une affiche publicitaire ayant pour thème la série <a target="_blank" href="https://www.amazon.com/The-Boys-Season-1/dp/B0875THX53">The Boys d’Amazon Prime</a>.</p>

<p>Aperçu du résultat 👇</p>

<img src="images/aspect-ratio-the-boys-resultat.jpg">

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/VwBRPOm?editors=1100">Pen de départ</doclink>

<h3>Couleurs 🎨</h3>

<color>#d90f17</color>

<h3>Médias</h3>

<mediafile src="images/tile.png">Ruban</mediafile>
<mediafile src="images/header.webp">Entête</mediafile>
<mediafile src="images/footer.webp">Pied de page</mediafile>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
    Créez le ruban à l'aide de l'élément <span class="inline-code">.ribbon</span>. Celui-ci doit-être affiché au bas de la page complètement ⬇️, afficher la tuile en pièce jointe comme arrière-plan se répétant à l'infini. Prendre toute la largeur de la page et avoir une hauteur équivalente au quart de sa largeur, peu importe la dimension de la fenêtre.
    L'affiche doit mesurer 80% de la largeur de la page, jusqu'à un maximum de 500px. Il doit avoir une marge de 25px vers le haut et le bas et être centré horizontalement dans la page ↔️. Ajoutez-lui une bordure rouge 🔴 de 20px ainsi qu'une ombre noire ⚫️ de 50px, répartie également de chaque côté.
    Insérez les images d'entête et de pied de page dans l'affiche 🎆. Faites en sorte qu'elles prennent toute la largeur de celle-ci et qu'aucune ligne noire ne soit visible entre elles.
    Insérez le code du iFrame YouTube de la bande-annonce de la série entre les deux images. Pour ce faire, allez sur la <a target="_blank" onclick="event.stopPropagation()" href="https://www.youtube.com/watch?v=kCOC9r_DwiA">page YouTube de la vidéo</a>, sélectionnez les options <em>Partager</em> ➡️ <em>Intégrer</em>. Copiez le code du iFrame fourni à droite.<br><br>Par défaut, les iFrames de YouTube ont une largeur et une hauteur fixe ce qui empêchera l'affiche d'être responsive. Retirez donc les attributs <span class="inline-code">width</span> et <span class="inline-code">height</span> du iFrame. Ciblez-le ensuite en CSS afin qu'il prenne toute la largeur de l'affiche et qu'il garde en tout temps son ratio 16-9.
</checklist>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<intlink href='../../../aspect-ratio/'></intlink>
<intlink href='../../../border/'></intlink>
<intlink href='../../../box-shadow/'></intlink>

<dots></dots>
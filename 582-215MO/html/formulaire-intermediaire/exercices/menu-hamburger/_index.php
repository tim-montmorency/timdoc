<?php 
/**
 * @type     exercice
 * @title    Checkbox - Menu Hamburger
 * @icon     images/thumb.jpg
 * @abstract Pour cet exercice nous allons créer une des options de navigation les plus populaires, le menu hamburger 🍔.
 */
?>

<p class="spacer">Pour cet exercice nous allons créer une des options de navigation les plus populaires, le menu hamburger 🍔. Pour ce faire nous allons exploiter la pseudo-classes spécifique aux boites à cocher <em>(checkbox)</em> afin de déterminer quand un élément doit être visible/invisible.</p>

<p>Cet aspect des boites à cocher permet de créer de l’interactivité sans même avoir recours au JavaScript.</p>

<p>Aperçu du résultat 👇</p>

<clipasset src="videos/checkbox-menu-hamburger.mp4"></clipasset>

<dots></dots>


<grostitre>Matériel</grostitre>

<doclink href="https://codepen.io/tim-momo/pen/BaPXPpE?editors=1100">Pen de départ</doclink>

<warning>Vous n’avez qu’à écrire du CSS et modifier du HTML <em>(nul besoin d’ajouter du JavaScript)</em>.</warning>

<dots></dots>


<grostitre>Requis</grostitre>

<checklist>
    Ajoutez l'attribut nécessaire aux deux balise <span class="inline-code">label</span> afin que ceux-ci coche/décoche la boite à cocher.
    L'apparence du menu est déjà programmée. Cependant, le menu est présentement invisible puisqu'il affiche à l'extérieur de la page. Faites en sorte de détecter en CSS si la boite à cocher est cochée ou non. Si elle est cochée, modifiez la position du menu de sorte qu'il devienne visible.
    Lorsque l'apparition et la disparition du menu fonctionnent, faites disparaitre en CSS la boite à cocher. Elle doit encore être présente dans le code HTML afin de pouvoir être cochée/décochée, mais il n'est plus nécessaire de la voir.
</checklist>

<dots></dots>


<grostitre>Bonus</grostitre>

<checklist>
    Plutôt que d'utiliser la propriété <span class="inline-code">left</span>, modifiez le code afin d'utiliser la propriété <span class="inline-code">transform</span>.
    Ajoutez une transition d'une demi-seconde sur la propriété <span class="inline-code">transform</span> afin d'obtenir une animation de menu hamburger digne d'un site professionnel.
</checklist>

<clipasset src="videos/hamburger-menu-bonus.mp4"></clipasset>

<dots></dots>


<grostitre>Notes de cours 📚</grostitre>

<?php intlink("../../../formulaire-intermediaire/"); ?>
<?php intlink("../../../../css/selecteurs-avances/"); ?>

<dots></dots>
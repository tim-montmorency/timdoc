<?php 
/**
 * @type     exercice
 * @title    Exercice Emmet
 * @icon     images/emmet.png
 * @abstract Pour cet exercice vous allez utiliser Emmet dans VS Code pour faire un autocomplétion de code HTML.
 */
?>
<!-- exercice possible https://chatgpt.com/c/679087b0-6718-8004-a9e9-4aa0a28ef359  -->



<grostitre>Exercice : Crée une page web simple avec Emmet</grostitre>
<strong>Objectif :</strong>
        Utiliser Emmet pour créer rapidement la structure d'une page HTML contenant :<ul>
            <li>Un en-tête</li>
            <li>Une section principale avec un article et une barre latérale</li>
            <li>Un pied de page</li>
            <li>Des listes, des liens et un formulaire</li>
        </ul>

<dots></dots>
<grostitre>Consignes :</grostitre>
<h4>Étape 1 : Générer la structure de base</h4>
<ol>
    <li>Ouvre un fichier <incode>index.html</incode> dans VS Code.</li>
    <li>Utilise la commande Emmet pour générer la structure HTML5 de base en une ligne :
  
<highlight lang='css'>!</highlight>
    </li>
</ol>
<h4>Étape 2 : Ajouter une navigation</h4>
<ol>
    <li>Sous <incode>&lt;body&gt;</incode>, insère une barre de navigation avec une liste de 5 liens :
    <highlight lang='css'>nav>ul>li*5>a[href="#"]{Lien $}</highlight>
       
    </li>
    <li>Explique à quoi servent les symboles comme <incode>&gt;</incode> (enfant direct), <incode>*</incode> (répétition),
        et <incode>$</incode> (compteur).</li>
</ol>
<h4>Étape 3 : Construire une section principale</h4>
<ol>
    <li>Ajoute une <incode>&lt;section&gt;</incode> principale avec un <incode>&lt;article&gt;</incode> et une
        <incode>&lt;aside&gt;</incode> à l’intérieur :
        <highlight lang='css'>main>section>(article>h2{Titre de l'article}+p{Contenu de l'article})+(aside>h3{À propos}+ul>li*3{Info $})</highlight>
       
    </li>
</ol>
<h4>Étape 4 : Créer un formulaire</h4>
<ol>
    <li>En dessous de l’article, insère un formulaire avec :<ul>
            <li>Un champ texte pour le nom</li>
            <li>Un champ e-mail</li>
            <li>Un bouton "Envoyer"</li>
        </ul>
        <highlight lang='css'>form>label{Nom :}+input[type="text" name="nom"]+label{Email :}+input[type="email" name="email"]+button{Envoyer}</highlight>
    </li>
</ol>
<h4>Étape 5 : Ajouter un pied de page</h4>
<ol>
    <li>Termine avec un <incode>&lt;footer&gt;</incode> contenant deux paragraphes :
    <highlight lang='css'>footer>p{© 2025 Mon Site}+p{Contact : contact@monsite.com}</highlight>
       
    </li>
</ol>
<dots></dots>
<grostitre>Bonus : Style avec CSS</grostitre>
<ol>
    <li>Ajoute un fichier CSS externe avec un lien dans <incode>&lt;head&gt;</incode> :
    <highlight lang='css'>link:css</highlight>
   
    </li>
    <li>Demande aux étudiants de créer des classes rapidement, par exemple :
        <highlight lang='css'>.container>.row>.col*3</highlight>
       
    </li>
</ol>

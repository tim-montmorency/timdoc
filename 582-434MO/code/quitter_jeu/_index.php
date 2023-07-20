<?php
/**
 * @type     article
 * @title    Quitter le jeu
 * @icon     images/icon.png
 * @abstract Fermer l'application
 */
?>

<p class="spacer">Il peut être utile de savoir créer une fonction qui nous permettra de quitter le jeu. Ainsi, on peut créer un bouton pour que l'utilisateur ferme le jeu lorsqu'il le souhaite.</p>


<dots></dots>

<grostitre>Code pour quiter</grostitre>
<p>Voici un exemple de fonction qui permet de quitter le jeu:</p>
<highlight lang="C#">
public void quitterPartie()
    {
        Application.Quit();
    }

</highlight>
<p>Ici, le nom de la fonction est à votre guise. Ce qui est important est la ligne de code Application.Quit(); qui permet de fermer la fenêtre de jeu.</p>
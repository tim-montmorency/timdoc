<?php
/**
 * @type     article
 * @title    Changement de scène
 * @icon     images/icon.png
 * @abstract SceneManager
 */
?>

<p class="spacer">Changer de scène est utile dans Unity. En effet, on pourrait créer un scène pour chaque niveau de notre jeu en plus d'une scène de menu et ensuite passer de l'une à l'autre.</p>


<dots></dots>

<grostitre>Changement de scène</grostitre>
<p>1. La première étape pour un changement de scène dans Unity est de s'assurer que les scènes entre lesquelles on souhaite faire une transition sont disponibles dans le Build. Pour ce faire, on va dans la barre de menu File et on ouvre la fenêtre Build Settings. Alors, dans le carré en haut (Scenes in Build), on devrait voir le nom des scènes entre lesquelles on veut faire des transitions et elles devraient être cochées. Si vous ne voyez pas la scène, double cliquer sur celle-ci dans la fenêtre Project pour l'ouvrir dans la fenêtre Scene, puis appuyez sur le bouton Add Open Scenes dans la fenêtre Build Settings. Une fois que toutes vos Scenes sont présentes, vous pouvez passer à la prochaine étape. </p>
<info>Vous pouvez cliquez et glisser les scènes dans la fenêtre Build Settings pour les réorganiser. La scène qui porte le numéro 0 est celle qui sera chargée à l'ouverture de votre jeu. Assurez-vous qu'il s'agit de votre menu!</info>
<p>    2. Pour faire une transition entre deux scènes, nous allons créer une fonction que nous pourrons appeler. Voici le code: 
</p>
<highlight lang="C#">
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement; 

public class menuControl : MonoBehaviour
{
   
    public void jouer()
    {
        SceneManager.LoadScene("maScene");
    }
}</highlight>
<p>Dans le code précédent, certains éléments sont essentiels pour que votre transition soit réussie. Premièrement, vous devez ajouter la mention using UnityEngine.SceneManagement; en haut de votre code. Ensuite, dans votre fonction, vous pouvez inscrire le code SceneManager.LoadScene("maScene"); pour faire le changement. Ici, il est important de remplacer maScene par le nom de la scène que vous souhaitez télécharger. Vous pourriez aussi utiliser le numéro de la scène qui se trouve dans la fenêtre Build Settings plutôt que le nom de celle-ci.</p>
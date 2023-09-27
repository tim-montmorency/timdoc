<?php
/**
 * @type     exercice
 * @title    Animal Crossing
 * @icon     images/thumb.png
 * @abstract Recréer un module permettant de choisir parmi des villageois dans Animal Crossing.
 */
?>

<p>Pour cet exercice, vous devrez recréer un module permettant de choisir parmi des villageois dans <a target="_blank" href="https://www.animal-crossing.com/">Animal&nbsp;Crossing</a>.</p>

<p>Aperçu du résultat 👇</p>
<clipasset src='medias/animal-crossing-resultat.mp4'></clipasset>
<dots></dots>
<grostitre>Matériel</grostitre>
<h3 class="heading heading--h3" id="Médias 🖼️">Médias 🖼️</h3>



<mediafile src="medias/bg.jpg"> Arrière-plan</mediafile>
<mediafile src="medias/_helpers.scss">_helpers.scss</mediafile>

<grostitre>Configurations</grostitre>
<checklist>Collez le code suivant dans votre fichier HTML:</checklist>

<highlight lang='html'>&lt;div class=&quot;characters&quot;&gt;
  &lt;div class=&quot;villager villager--rowan&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/1.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--aurora villager--active&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/2.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--bettina&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/3.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--leonardo&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/4.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--marina&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/5.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--blaire&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/6.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--sprocket&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/7.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--hornsby&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/8.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--mira&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/9.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--claude&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/10.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--cube&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/11.png&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;villager villager--sylvana&quot;&gt;
    &lt;img src=&quot;https://tim-montmorency.com/timdoc/582-518MO/exercices/animal-crossing-v337/medias/12.png&quot;&gt;
  &lt;/div&gt;
&lt;/div&gt;</highlight>


<warning>Vous n’avez pas le droit de modifier le code HTML ci-dessus&nbsp;👆.</warning>




<dots></dots>
<grostitre>Requis</grostitre>

    <div class="to-do__progress">
        <span class="to-do__progress__percent">0%</span>
        <progress class="to-do__progress__bar" max="100" value="0">0%</progress>
    </div>
    <ol start="1" class="to-do">
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            1
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Ajoutez l'image d'arrière-plan à la page. Celle-ci doit couvrir l'entièreté de la page.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            2
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Le bloc contenant tous les personnages doit prendre toute la largeur de l'écran, jusqu'à concurrence de
                900px de large, être centré horizontalement dans la page ↔️ et avoir une marge intérieure de 20px de
                tous les côtés.<br><br>Attention de faire en sorte que la dimension totale soit bien de 900px incluant
                les marges intérieures.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            3
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Téléchargez et importez le fichier <code>_helpers.scss</code> dans votre projet.<br><br>Si vous n'avez
                pas réussi à créer un projet Vite, copiez son contenu à l'intérieur de votre CSS/SCSS.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            4
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Appliquez le mixin card à chacun des villageois.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            5
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Affichez un maximum de villageois par rangée. Ils doivent prendre tout l'espace disponible <em>(ne pas
                    laisser d'espace vide en fin de rangée)</em> et ne jamais devenir plus petit que 200px de large.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            6
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Les villageois doivent avoir une hauteur de 300px, un espace de 15px entre eux et leur image doit-être
                centré horizontalement ↔️ et verticalement ↕️ à l'intérieur de ceux-ci.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            7
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Utilisez une boucle for en SCSS afin de sélectionner chacun des villageois. À l'intérieur de cette boucle
                créez-vous deux variables SCSS qui contiendront des couleurs que nous utiliserons plus tard pour créer
                des dégradés. </p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            8
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Votre première variable SCSS doit contenir la couleur de la variable <code>$primary</code> du fichier
                <code>_helpers.scss</code>. Cependant, le hue de cette couleur devra être altéré de 25 par itération de
                boucle. Ainsi le hue de la couleur dans cette variable pour le 1<sup>er</sup> villageois sera de 25,
                pour le 2<sup>e</sup> de 50, pour le 3<sup>e</sup> de 75, etc.<br><br>Pour tester votre boucle et votre
                variable, vous pouvez temporaire changer la couleur de fond du villageois par celle-ci.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            9
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Votre deuxième variable SCSS doit avoir la même valeur de hue que votre première variable SCSS, mais avec
                un extra hue de 50. Autrement dit le hue de la couleur contenue dans cette variable pour le
                1<sup>er</sup> villageois sera de 75, pour le 2<sup>e</sup> de 100, pour le 3<sup>e</sup> de 125, etc.
            </p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            10
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Toujours dans votre boucle SCSS, créez un dégradé de haut en bas à partir des couleurs contenues dans les
                variables SCSS que vous venez de créer.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            11
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Créez-vous maintenant une boucle SCSS à partir de la variable <code>$villagersArr</code> contenue dans le
                fichier <code>_helpers.scss</code> et selectionner chaque villageois.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            12
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>À l'intérieur de cette boucle, faites afficher le nom de chacun des villageois en blanc ⚪️ sur un fond
                noir semi-transparent ⚫️ au bas de chacun de ceux-ci. Le texte doit-être centré, avoir une marge
                intérieure de 10px de tous les côtés et la première lettre de chaque nom doit être en majuscule
                <em>(sans modifier pour autant la variable </em><code>$villagersArr</code><em>)</em>. </p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            13
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>Utilisez l'imbrication SASS afin de créer la classe modificateur <code>villager--active</code>. Celle-ci
                doit faire grossir de 5% le villageois l'ayant.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            14
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>En JavaScript, faites en sorte que lorsqu'un villageois se fait cliquer dessus, il reçoive la classe
                <code>villager--active</code>. Attention, il ne peut y avoir qu'un seul villageois actif à la fois.
                Autrement dit, cette classe ne doit jamais être sur deux villageois en même temps.</p>
        </li>
        <li class="to-do__item">
            <label class="to-do__checkbox">
                <input type="checkbox" class="visually-hidden" tabindex="-1">
                <span class="to-do__box" tabindex="0" role="button" aria-pressed="false">
                    <span class="to-do__toggle">
                        <span class="to-do__number">
                            15
                        </span>
                        <span class="to-do__checkmark">✓</span>
                    </span>
                </span></label>
            <p>À partir de 900px et plus, faites en sorte que les villageois Bettina, Leonardo, Hornsby et Sylvana
                prennent deux colonnes de large plutôt qu'une seule comme les autres villageois.</p>
        </li>
    </ol>




<dots></dots>
<grostitre>Remise</grostitre>
    <ul>
        <li>
            <p>Exécutez la commande Vite permettant d'optimiser vos fichiers.</p>
        </li>
        <li>
            <p>Supprimez le dossier <code>node_modules</code> de votre projet.</p>
        </li>
        <li>
            <p>Compressez ensuite votre dossier de travail en <a target="_blank" rel="noopener noreferrer"
                    href="https://www.ezyzip.com/">fichier&nbsp;zip 🗜</a></p>
        </li>
        <li>
            <p>Envoyez-moi un <a target="_blank" rel="noopener noreferrer"
                    href="https://teams.microsoft.com/l/chat/0/0?users=mariem.ouellet@cmontmorency.qc.ca">message privé
                    sur Teams</a> contenant votre fichier&nbsp;zip.</p>
        </li>
    </ul>
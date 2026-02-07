<?php

/**
 * @type     article
 * @title    Introduction GIT
 * @icon     images/icon.svg
 * @abstract L'introduction à Git, un outil de gestion de versions
 * @index 100
 */
?>

<!-- acces au contenu complet via https://web.archive.org/web/20231209061406/https://smnarnold.com/cours/git/introduction  -->


<p>Git est un outil qui vous protège de vous-même. Il permet en quelque sorte de faire
    des&nbsp;<em>"checkpoints"</em>&nbsp;ou en français, des points de sauvegarde 💾, dans un&nbsp;projet.</p>



<video src="images/dark-soul-bonefire.mp4"></video>

<br>
<p>Ainsi, vous pouvez modifier/briser/améliorer votre projet l'esprit tranquille, puisqu'il vous permet de revenir en
    arrière en cas de&nbsp;besoin.</p>

<dots></dots>
<grostitre>Répertoire</grostitre>


<p>Un répertoire, en anglais&nbsp;<em>repository</em>&nbsp;ou son diminutif&nbsp;<em>repo</em>, est le nom donné au
    dossier 📂 devant être surveillé par Git. À chaque&nbsp;<em>commit</em>, tous les changements effectués à
    l'intérieur de celui-ci seront enregistrés par&nbsp;Git.</p>

<img src="images/git-folder-icon.png" width="46" height="20" alt="" loading="lazy" class="image__image">

<grostitre>Commit</grostitre>

<p>À tout moment, il est possible de sauvegarder en local&nbsp;<em>(sur son ordinateur)</em>&nbsp;l'avancement
    d'un&nbsp;projet 💾.</p>
<p>Cette étape est appelée&nbsp;<em>commit</em>.</p>



<p class="codepen" data-height="600" data-theme-id="light" data-default-tab=",result" data-slug-hash="zxGQqRR" data-pen-title="Untitled" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/zxGQqRR">
  Untitled</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://public.codepenassets.com/embed/index.js"></script>



<grostitre>Push</grostitre>


<p>Idéalement, un&nbsp;<em>commit</em>&nbsp;est ensuite poussé vers le&nbsp;<em>cloud</em> ☁️.</p>
<p>Ce qu'on appel faire un&nbsp;<em>push</em> ⬆️.</p>


<p class="codepen" data-height="600" data-theme-id="light" data-default-tab="result" data-slug-hash="azOrNGG" data-pen-title="Git commit - anim demo" data-user="tim-momo" style="height: 600px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
  <span>See the Pen <a href="https://codepen.io/tim-momo/pen/azOrNGG">
  Git commit - anim demo</a> by TIM Montmorency (<a href="https://codepen.io/tim-momo">@tim-momo</a>)
  on <a href="https://codepen.io">CodePen</a>.</span>
</p>
<script async src="https://public.codepenassets.com/embed/index.js"></script>


<p>Ainsi, il est possible de récupérer les changements les plus récents sur un projet et de continuer son avancement
    exactement où nous étions&nbsp;rendus.</p>


<info>Pour continuer la métaphore du jeu vidéo, l’équivalent serait de faire une sauvegarde en ligne. Ainsi, même
            si votre console brise ou si vous êtes en visite, vous pouvez récupérer votre partie et la continuer sur une
            autre&nbsp;console.</info>


<dots></dots>
<grostitre>Branches</grostitre>
<p>Par défaut, tous les&nbsp;<em>repos</em>&nbsp;ont une branche principale appelée&nbsp;<em>main</em> ou
    <em>master</em>. Lorsqu'un&nbsp;<em>push</em>&nbsp;est effectué, les changements sont envoyés vers cette branche.
</p>

<p>Cependant, il est parfois préférable de laisser la branche&nbsp;principale<em> </em>indemne. Par exemple, à
    l'approche d'une démonstration client où l'on souhaite s'assurer qu'aucun bug ne vienne perturber la présentation.
    Néanmoins, arrêter de travailler quelques jours avant la présentation, simplement pour éviter un potentiel bug lors
    d'une présentation représente une perte de temps non négligeable. Il est donc préférable de créer une nouvelle
    branche à partir de la branche principale&nbsp;et de travailler sur celle-ci&nbsp;plutôt.</p>
<p>Ainsi, il est possible de présenter la branche principale&nbsp;l'esprit en paix sachant qu'aucun bug de dernière
    minute ne risque de faire son apparition. Lorsque la présentation est passée ou que les changements sur la nouvelle
    branche sont complétés, il est possible de&nbsp;<em>merger</em>&nbsp;la nouvelle branche vers la branche
    principale&nbsp;afin d'y incorporer ses&nbsp;changements.</p>



<doclink href='https://learngitbranching.js.org/?locale=fr_FR"'>Apprenez Git&nbsp;Branching</doclink>


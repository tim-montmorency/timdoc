<?php 
/**
 * @type     article
 * @title    Kanban
 * @icon     images/icon-kanban.png
 * @abstract Méthode de gestion du travail
 * @index 85
 */
?>
<p>Kanban est une méthode de gestion du travail créée afin d'aider à visualiser les tâches à accomplir, afin d'optimiser son efficacité et de devenir plus agile. Le but fondamental est de créer plus de valeur pour le client sans pour autant générer davantage de coûts. </p>


<dots></dots>

<grostitre>Origine</grostitre>
<p>Cette technique a vu le jour dans les usines Toyota à la fin des années 40. À cette époque, tous les fabricants automobiles produisaient le plus grand nombre de véhicules possible et tentaient ensuite de les écouler 🚗. Autrement dit, leur production était guidée par leur capacité à produire. </p>

<p>L'approche Kanban, fonctionne à l'opposée. La production est guidée en fonction de la demande. Ainsi, si un modèle de voiture s'est écoulé à 1000 exemplaires l'année précédente et qu'on estime qu'environ 1000  exemplaires seront vendus cette année, le nombre ciblé à produire sera de 1000. Ce nombre peut être réajusté à différents moments de l'année. Par exemple, à tous les quarts <em>(3 mois)</em> afin de s'assurer qu'il est toujours adéquat <em>(on target)</em>, l'augmenter ou le diminuer selon les besoins. </p>

<p>Cette approche évite de gaspiller des ressources <em>(temps de main-d'œuvre et matériel)</em> sur des véhicules qui ne se vendront pas. Ainsi, ces ressources peuvent être utilisées ailleurs. Par exemple, sur un autre modèle de voiture ou un tout autre produit.</p>

<dots></dots>

<grostitre>Fonctionnement</grostitre>
<p>Un projet utilisant la méthodologie Kanban repose sur la présence d'un tableau affichant toutes les tâches à accomplir. Ces tâches sont positionnées dans différentes colonnes du tableau afin de refléter leur statut actuel.</p>

<p>Au départ ces tableaux existaient dans un format physique et chaque tâche était représentée par un papillon adhésif <em>(post-it)</em> que l'on déplaçait de colonne en colonne. De nos jours, ces tableaux prennent souvent une forme numérique.</p>

<info>Le terme <em>"Kanban"</em> est un mot japonais 🇯🇵 signifiant&nbsp;<em>étiquette</em>.</info>


<dots></dots>

<h3 id="3 colonnes de base">3 colonnes de base</h3>
<p>Les 3 colonnes de base sont:</p>

<ol start="1">
    <li><strong>À faire <em>(To do)</strong><br></em>Les tâches à accomplir.</li>
    <li><strong>En cours <em>(In progress)</em></strong><br>LA tâche que vous êtes actuellement entrain de faire.</li>
    <li><strong>Terminé <em>(Done)</strong><br></em>Ce qui, selon la définition de l'équipe, est considéré comme terminé/prêt.</li>
</ol>

<alert>Concernant la colonne <strong>En cours <em>(In progress)</em></strong> Personne n’est censé accomplir deux tâches en même&nbsp;temps.<small><br><br>
Il est possible que vous ayez commencé à peinturer un mur et qu’entre deux couches vous soyez allé tondre le gazon, mais dans ce cas, votre tâche <em>"En cours"</em> est <em>"Tondre le gazon"</em>. La tâche <em>"Peinturer le mur"</em> devrait retourner dans la colonne <em>"À faire"</em> avec un commentaire indiquant que la première couche a été&nbsp;donnée.</small></alert>



<dots></dots>

<h3 id="Colonnes supplémentaires">Colonnes supplémentaires</h3>
<p>Il est possible d'ajouter autant de colonnes que nécessaire afin de refléter l'état de chaque tâche. Par exemple, voici quelques colonnes répandues dans l'industrie:</p>

<ul><li><strong>Prêt à être validé <em>(In QA).</em></strong> <br>Cette colonne s'insère <strong>entre <em>"En cours"</em> et <em>"Terminé"</em></strong>. Ainsi, dès qu'un membre de l'équipe termine une tâche, il la met dans cette colonne et ensuite, la personne chargée de l'assurance qualité sait que cette tâche est prête à être validée. Si tout est conforme, elle déplace donc officiellement la tâche dans la colonne <em>"Terminé"</em>, sinon elle la ramène dans la colonne <em>"À faire"</em> avec ses commentaires expliquant les éléments problématiques.</li><li><strong>En production <em>(In prod)</em></strong><br>Cette colonne s'ajoute <strong>complètement à la fin du tableau</strong>. Celle-ci permet de différencier ce qui est visible en ligne <em>(déployé)</em> de ce qui est visible sur l'environnement de développement. Ainsi lorsque le DevOps effectue un déploiement, il transfère toutes les tâches actuellement dans la colonne <em>"Terminé"</em> vers celle nommée <em>"En production"</em>. Ainsi on évite la confusion chez le client qui peut apercevoir certaines tâches terminées en ligne sur son site et d'autres non.</li></ul>



<doclink href='https://fr.wikipedia.org/wiki/Kanban_(d%C3%A9veloppement)'>Kanban</doclink>

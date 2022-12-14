<?php 
/**
 * @type     article
 * @title    PXPros
 * @icon     images/icon.png
 * @abstract PHP Preprocessor
 */
?>

<p>PXPros est un pré-processeur qui permet d'amener toute la puissance de PHP à un projet HTML statique. Il peut être utilisé pour créer des rendus de dossiers complets ou encore être utilisé en temps réel un peu comme SASS.</p>

<grostitre>Installation</grostitre>

<p>PXPros est un exécutable <em>statique</em>, il n'a besoin d'aucune dépendance. Il suffit de le placer dans dossier qui est dans les paths d'environnement ou encore ajouté son dossier dans les paths. Pour ce faire, pesez sur <em>WIN+R</em> et ensuite exécutez la commande <em>sysdm.cpl</em></p>

<img src="images/run-system-properties.png">
<img src="images/system-properties-advance.png">
<img src="images/system-variables.png">
<img src="images/add-path.png">

<grostitre>Configuration</grostitre>

<p>PXPros se configure par projet. Il suffit de créer un fichier JSON <em>(_pxpros.json)</em> à la racine du projet.<br><br>Exemple:</p>

<highlight lang="json">{
    "data": {
        "project": "TIM Montmorency - Documentation"
    },
    "includes": [
        "_includes/functions.php"
    ],
    "before": "_includes/header.php",
    "after": "_includes/footer.php"
}</highlight>

<h2>data</h2>
<p>La propriété <em>data</em> est un objet où vous pouvez y mettre tout ce que vous voulez. Ces données seront accessibles via la variable superglobale <em>$PAGE</em>.<br><br>Exemple:</p>
<highlight lang="php">echo $PAGE->project;</highlight>

<h2>includes</h2>
<p>La propriété <em>includes</em> est un tableau contenant les chemins des fichiers que vous voulez inclure à l'initialisation. Ils contiennent généralement toutes les fonctions et les classes que vous utilisez. Si vous utilisez des classes, il est recommandé d'utiliser le loader dynamique <em>spl_autoload_register</em>.<br><br>Exemple:</p>

<highlight lang="php">spl_autoload_register(function($class) {
    static $catalog = [
        'IMDB' => 'imdb.class.php',
    ];
    if (isset($catalog[$class])) require_once(__DIR__ . '/' . $catalog[$class]);
}, true, true);</highlight>


<h2>before & after</h2>

<p>Les propriétés <em>before</em> et <em>after</em> servent à définir les fichiers d'entête et de pied de page afin que les templates PHP ne contiennent que ce qui sera exécuté dans le corps de la page.</p>






<dots></dots>
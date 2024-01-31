<?php
/**
 * @index    7
 * @type     article
 * @title    PXPros
 * @icon     images/icon.webp
 * @abstract PHP Preprocessor
 */
?>

<p class="spacer">PXPros est un pré-processeur qui permet d'amener toute la puissance de PHP à un projet HTML statique. Il peut être utilisé pour créer des rendus de dossiers complets ou encore être utilisé en temps réel un peu comme SASS.</p>

<dots></dots>

<grostitre>Installation</grostitre>

<p>PXPros est un exécutable <em>statique</em>, il n'a besoin d'aucune dépendance. Il suffit de le placer dans dossier qui est dans les paths d'environnement ou encore ajouté son dossier dans les paths. Pour ce faire, pesez sur <em>WIN+R</em> et ensuite exécutez la commande <em>sysdm.cpl</em></p>

<gallery>
    images/run-system-properties.webp
    images/system-properties-advance.webp
    images/system-variables.webp
    images/add-path.webp
</gallery>

<dots></dots>

<grostitre>Configuration</grostitre>

<p>PXPros se configure par projet. Il suffit de créer un fichier JSON <em>(_pxpros.json)</em> à la racine du projet.<br><br>Exemple:</p>

<highlight lang="json">
{
    "data": {
        "project": "TIM Montmorency - Documentation",
        "gtag": "G-P2R7T89B4B"
    },
    "includes": [
        "_includes/functions.php",
        "_includes/hooks.php"
    ],
    "before": "_includes/header.php",
    "after": "_includes/footer.php"
}
</highlight>

<h3>data</h3>
<p>La propriété <em>data</em> est un objet où vous pouvez y mettre tout ce que vous voulez. Ces données seront accessibles via la variable superglobale <em>$PAGE</em>.<br><br>Exemple:</p>
<highlight lang="php">echo $PAGE->project;</highlight>

<h3>includes</h3>
<p>La propriété <em>includes</em> est un tableau contenant les chemins des fichiers que vous voulez inclure à l'initialisation. Ils contiennent généralement toutes les fonctions et les classes que vous utilisez. Si vous utilisez des classes, il est recommandé d'utiliser le loader dynamique <em>spl_autoload_register</em>.<br><br>Exemple:</p>

<highlight lang="php">spl_autoload_register(function($class) {
    static $catalog = [
        'IMDB' => 'imdb.class.php',
    ];
    if (isset($catalog[$class])) require_once(__DIR__ . '/' . $catalog[$class]);
}, true, true);</highlight>


<h3>before & after</h3>

<p>Les propriétés <em>before</em> et <em>after</em> servent à définir les fichiers d'entête et de pied de page afin que les templates PHP ne contiennent que ce qui sera exécuté dans le corps de la page.</p>

<dots></dots>

<grostitre>Format</grostitre>
<p>
    Dans le but d'être compatible avec la configuration de base de Github Pages, les templates PHP doivent commencer par une barre de soulignement <em>(_)</em>, exemple <em>_index.php</em>.
    Ces fichiers commençant par une barre de soulignement sont ignorés par <a target="_blank" href="https://jekyllrb.com/">Jekyll</a> lors de la mise en ligne du site par Github Pages.
</p>


<h3>Entête d'un template PHP</h3>

<p>Pour créer les propriétés, il suffit de créer un DOCBLOCK PHP en entête du template. Ces propriétés seront ajoutées à la variable superglobale <em>$PAGE</em>.<br><br>Exemple:</p>

<highlight lang="php">&lt;?php
/**
 * @type     article
 * @title    PXPros
 * @icon     images/icon.png
 * @abstract PHP Preprocessor
 */
?&gt;
</highlight>

<highlight lang="php">echo $PAGE->icon;</highlight>

<info>Il est aussi possible d'obtenir les propriétés d'un fichier en utilisant la fonction <em>php_file_info($filename)</em></info>

<dots></dots>

<grostitre>$PAGE</grostitre>

<p>
    La variable superglobale <em>$PAGE</em> contient les informations contenues dans la propriété <em>data</em> du fichier de configuration <em>_pxpros.json</em> situé à la racine du projet ainsi que les propriétés définies par le DOCBLOCK en entête du template PHP en cours de rendu.
</p>

<h3>root & file</h3>

<p>Elle contient aussi les propriétés <em>root</em> et <em>file</em> afin de pouvoir se situer tant de manière absolue que relative face à la racine du projet.<br><br>Exemple:</p>

<highlight lang="php">function get_shared($file){
    $backwards = count(explode('\\',str_replace($PAGE->root, '',
        pathinfo($file,PATHINFO_DIRNAME))));
    return join('/', array_fill(0, $backwards, '..')).'/shared/';
}
echo get_shared($PAGE->file);
</highlight>

<dots></dots>

<grostitre>Utilisation</grostitre>

<p>PXPros est très simple d'utilisation. Il peut créer le rendu d'un seul fichier ou encore d'un dossier/sous-dossier. Dans le cas d'un dossier, PXPros le parcourera de manière récursive afin d'y trouver tout les fichiers ayant le pattern <em>_*.php.</em><br><br>Exemple:</p>

<highlight lang="console">> D:\Programmation\tim-montmorency\cours\manuel> pxpros .\_index.php
Render: /manuel/_index.php</highlight>

<highlight lang="console">> D:\Programmation\tim-montmorency\cours\manuel> pxpros .
Render: /manuel/_index.php
Render: /manuel/components/_index.php
Render: /manuel/installation/_index.php
Render: /manuel/page-types/_index.php
Render: /manuel/pxpros/_index.php
Render: /manuel/test/_index.php</highlight>


<h3>En temps réel avec VS Code</h3>

<p>Il est aussi possible de créer des rendus avec PXPros en temps réel comme du SASS/SCSS grâce à l'extension <a target="_blank" href="https://marketplace.visualstudio.com/items?itemName=emeraldwalk.RunOnSave">Run On Save</a>.<br><br>Configuration VS Code:</p>

<highlight lang="json">{
    "emeraldwalk.runonsave": {
        "autoClearConsole": true,
        "commands": [
            {
                "match": ".*\\.php$",
                "cmd": "pxpros \"${file}\""
            }
        ]
    },
}</highlight>

<dots></dots>

<grostitre>Built-in</grostitre>

<p>PXPros est compilé avec la librairie <em>SAPI</em> de PHP. Il contient une version minimale PHP. Pas de MySQL, de Session ou d'autres trucs inutiles.<br><br>Vous pouvez consulter la configuration complète <a target="blank" href="phpinfo.html">ici</a>.</p>

<dots></dots>





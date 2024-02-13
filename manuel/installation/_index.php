<?php 
/**
 * @index    8
 * @type     article
 * @title    Installation
 * @icon     images/icon.webp
 * @abstract Installation GIT, VS Code, PXPros
 */
?>

<p class="spacer">Une fois le projet cloné (<span class="inline-code">gh repo clone tim-montmorency/timdoc</span>), <strong><em>Timdoc</em></strong> est très simple à installer. Il suffit d'ajouter le dossier <em>_bin/</em> dans vos paths d'environnement. Voir <a href="../pxpros/">PXPros</a>.</p>

<dots></dots>

<grostitre>Extensions VS Code</grostitre>

<tool href="tools/live-server"></tool>
<tool href="tools/live-sass-compiler"></tool>
<tool href="tools/run-on-save"></tool>
<tool href="tools/minifyall"></tool>

<warning>Par défaut l'extension <em>MinifyAll</em> minimise tous les formats. Il est conseillé de les désactiver dans votre configuration locale.</warning>

<dots></dots>

<grostitre>Configuration VS Code</grostitre>

<p>Le projet TIMdoc est déjà préconfiguré dans le fichier <incode>.vscode/settings.json</incode>.</p>


<highlight lang="json">
{
    "terminal.integrated.env.windows": {
        "PATH": "${env:PATH};${workspaceFolder}"
    },
    "emeraldwalk.runonsave": {
        "autoClearConsole": true,
        "commands": [
            {
                "match": "_.*\\.php$",
                "cmd": "pxpros \"${file}\""
            }
        ]
    },
    "liveServer.settings.port": 5501,
    "liveSassCompile.settings.generateMap": false,
    "liveSassCompile.settings.formats": [
        {
            "format": "expanded",
            "extensionName": ".css",
            "savePath": null,
            "savePathReplacementPairs": null
        },
        {
            "format": "compressed",
            "extensionName": ".min.css",
            "savePath": null,
            "savePathReplacementPairs": null
        }
    ],
    "MinifyAll.disableCss": true,
    "MinifyAll.disableHtml": true,
    "MinifyAll.disableJson": true,
    "MinifyAll.disableJsonc": true,
    "MinifyAll.disableLess": true,
    "MinifyAll.disablePhp": true,
    "MinifyAll.disableSass": true,
    "MinifyAll.disableScss": true,
    "MinifyAll.disableTwig": true,
    "MinifyAll.disableXml": true,
    "MinifyAll.PrefixOfNewMinifiedFiles": ".min",
    "MinifyAll.disableJavascriptReact": false,
    "MinifyAll.minifyOnSaveToNewFile": true,
    "MinifyAll.openMinifiedDocument": false,
    "MinifyAll.terserMinifyOptions": {
        "mangle": true,
        "compress": {
            "drop_console": false,
            "dead_code": true,
            "keep_fnames": false,
            "keep_classnames": false
        }
    },
}
</highlight>

<dots></dots>
<?php
$target = pathinfo($PAGE->file, PATHINFO_DIRNAME).S.'tool.json';
file_put_contents($target, json_encode(php_file_info($PAGE->file), JSON_PRETTY_PRINT));
?>
            <div id="subhead">
                <div id="title"><?php echo $PAGE->title; ?></div>
            </div>
            <article>
                <tabledesmatieres></tabledesmatieres>
                <div id="contents">
                    <!-- TOOL HEADER EOF -->

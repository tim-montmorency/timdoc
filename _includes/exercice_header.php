<?php
$target = pathinfo($PAGE->file, PATHINFO_DIRNAME).'\\exercice.json';
file_put_contents($target, json_encode(php_file_info($PAGE->file), JSON_PRETTY_PRINT));
?>
            <div id="subhead">
                <div id="title"><?php echo $PAGE->title; ?></div>
            </div>
            <article>
                <div id="contents">
                    <!-- EXERCICE HEADER EOF -->

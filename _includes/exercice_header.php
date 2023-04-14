<?php
$target = pathinfo($PAGE->file, PATHINFO_DIRNAME).S.'exercice.json';
file_put_contents($target, json_encode(php_file_info($PAGE->file), JSON_PRETTY_PRINT));
?>

            <div id="subhead">
                <h1 id="title"><?php echo $PAGE->title; ?></h1>
            </div>
            <article>
                <div id="contents">
                    <!-- EXERCICE HEADER EOF -->

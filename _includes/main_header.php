<!DOCTYPE html>
<html lang="fr-ca">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="<?php echo $PAGE->shared; ?>images/favicon.ico">
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/styles.css">
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/highlight.min.css">
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/video-js.min.css">
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/swiper-bundle.min.css">
        <script src="<?php echo $PAGE->shared; ?>jscripts/commons.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/highlight.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/howler.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/swiper-bundle.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/vue.global.prod.js"></script>
        <script>const shared = '<?php echo $PAGE->shared; ?>';</script>
        <title><?php echo $PAGE->title; ?></title>
    </head>
    <body>
        <script>document.body.className = localStorage.getItem('darkmode') === 'true' ? 'dark' : 'light';</script>
        <a id="top"></a>
        <header>
            <div id="logo" @click="goToTop()"></div>
            <div title="Dark mode" id="lightswitch" class="lightswitch--on" ref="lightswitch" @click="lightswitch()"></div>
        </header>
        <main>
            <!-- MAIN HEADER EOF -->
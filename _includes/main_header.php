<!-- 

████████╗██╗███╗   ███╗██████╗  ██████╗  ██████╗
╚══██╔══╝██║████╗ ████║██╔══██╗██╔═══██╗██╔════╝
   ██║   ██║██╔████╔██║██║  ██║██║   ██║██║
   ██║   ██║██║╚██╔╝██║██║  ██║██║   ██║██║
   ██║   ██║██║ ╚═╝ ██║██████╔╝╚██████╔╝╚██████╗
   ╚═╝   ╚═╝╚═╝     ╚═╝╚═════╝  ╚═════╝  ╚═════╝

-->
<!DOCTYPE html>
<html lang="fr-ca">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $PAGE->gtag; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo $PAGE->gtag; ?>');
        </script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex, nofollow" />
        <meta itemprop="digest" content="<?php echo ($PAGE->password ? md5($PAGE->password) : ''); ?>">
        <link rel="icon" type="image/x-icon" href="<?php echo $PAGE->shared; ?>images/favicon.ico">
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/styles.min.css">
        <script src="<?php echo $PAGE->shared; ?>jscripts/highlight.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/swiper-bundle.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/vue.global.prod.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/timdoc.min.js"></script>
        <script>const shared = '<?php echo $PAGE->shared; ?>';</script>
        <title><?php echo strip_tags($PAGE->title); ?></title>
    </head>
    <body>
        <script>document.body.classList.add(localStorage.getItem('darkmode') === 'true' ? 'dark' : 'light');</script>
        <a id="top"></a>
        <header>
            <div id="logo" @click="goToTop('<?php echo getRootCours(); ?>', '<?php echo getIndexPath(); ?>')" title="Retour à l'accueil">
                <svg class="logo-tim" viewBox="0 0 953.6 303.8">
                   <path d="m785.7 166.8 16.3 16.3 16.2-16.3L930.6 54.5v226.2h-257v-226l112 112.1zM650.6.8v303h303V.7h-1.8L802 150.4 652 .7h-1.5zM324.5.4v303h303V.5h-303zm130 129.9a33.5 33.5 0 0 0 34.7 55.3l94.8 94.8H347.5v-257h257v236.4l-94.8-94.7a33.5 33.5 0 0 0-55.3-34.8zM206.4 0 0 206.5V303h303V0h-96.5zM23 280v-64l85.6-85.6 119.9 119.8 20.5-20.5L129.1 110 216 23h64v257H23z"/>
                </svg>
            </div>
            <div title="Interrupteur" id="lightswitch" ref="lightswitch" @click="lightswitch()"></div>
        </header>
        <main>
            <!-- MAIN HEADER EOF -->
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
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/highlight.min.css">
        <link rel="stylesheet" href="<?php echo $PAGE->shared; ?>styles/swiper-bundle.min.css">
        <script src="<?php echo $PAGE->shared; ?>jscripts/highlight.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/swiper-bundle.min.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/vue.global.prod.js"></script>
        <script src="<?php echo $PAGE->shared; ?>jscripts/timdoc.min.js"></script>
        <script>const shared = '<?php echo $PAGE->shared; ?>';</script>
        <title><?php echo strip_tags($PAGE->title); ?></title>
    </head>
    <body style="padding-bottom: 0;">
        <script>document.body.className = localStorage.getItem('darkmode') === 'true' ? 'dark' : 'light';</script>
        <wiki>
            <!-- WIKI HEADER EOF -->

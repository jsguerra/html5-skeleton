<?php

function push_to_browser($as, $uri) {
    header('Link: ' . $uri . '; rel=preload; as=' . $as, false);
}

$assets = array(
    '<//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i>' => 'style',
    '</style-main.css>' => 'style',
    '/CSS/header.css' => 'style',
    '<//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js>' => 'script',
    '</JS/libs/jquery.flexslider-min.js>' => 'script',
    '</images/mainpromo/welcome01-1600.jpg>'=> 'image'
);

array_walk( $assets, push_to_browser);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Web Starter Kit</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Web Application Manifest
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="manifest" href="manifest.json">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
    <!-- Primary Page Layout
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header>
        <h1>Site Title</h1>
    </header>

    <nav>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Contact</li>
        </ul>
    </nav>

    <main>
        <article>
            <header>
                <h1>The Article Title</h1>
            </header>
            <div>
                <p>The content.</p>
            </div>
            <footer>
                <span>Article footer content</span>
            </footer>
        </article>
    </main>

    <footer>
        <p>Site footer content</p>
    </footer>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

    <!-- build:js js/main.min.js -->
    <script src="js/main.js" async></script>
    <!-- endbuild -->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>

</body>
</html>
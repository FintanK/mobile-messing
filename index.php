
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--[if lt IE 7]>  <![endif]-->
        <!--[if IE 7]> <![endif]-->
        <!--[if IE 8]> <![endif]-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content = "width = device-width, initial-scale = 1, user-scalable = no" />
        <meta name="author" content="Fintan Kearney">

        <link rel="apple-touch-icon" href="images/touch_icons/apple-touch-icon.png"/>
        <link rel="apple-touch-startup-image" href="images/touch_icons/splash.png" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <!-- Open Graph Protocol - Facebook, Google, Semantic Web

        <meta property="og:title" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />

        <meta property="og:image" content="http://example.com/rock.jpg" />
        <meta property="og:image:width" content="300" />
        <meta property="og:image:height" content="300" />
        <meta property="og:image" content="http://example.com/rock2.jpg" />
        <meta property="og:image" content="http://example.com/rock3.jpg" />
        <meta property="og:image:height" content="1000" />


        <meta property="og:determiner" content="the" />
        <meta property="og:locale" content="ga_IE" />
        <meta property="og:locale:alternate" content="fr_FR" />
        <meta property="og:locale:alternate" content="es_ES" />
        <meta property="og:site_name" content="IMDb" />


        <meta property="og:video" content="http://example.com/movie.swf" />
        <meta property="og:video:secure_url" content="https://secure.example.com/movie.swf" />
        <meta property="og:video:type" content="application/x-shockwave-flash" />
        <meta property="og:video:width" content="400" />
        <meta property="og:video:height" content="300" />

        <meta property="og:audio" content="http://example.com/sound.mp3" />
        <meta property="og:audio:secure_url" content="https://secure.example.com/sound.mp3" />
        <meta property="og:audio:type" content="audio/mpeg" />
        -->


        <title>Responsive Menu Experiment</title>
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" type="text/css" href="css/text.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script><style type="text/css"></style>
        <script type="text/javascript" src="js/custom.js"></script>
    </head><style type="text/css"></style>
    <body>

    <div id="sidebar">
        <input id = "search" type ="text" placeholder ="Search...">
        <ul id="nav-menu">
        <li id="home-page" class="selected"><img src="images/icons/Home.png" ><span class="menu-text">Home</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
            <li id="projects-page"><img src="images/icons/Notepad.png"><span class="menu-text">Projects</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
            <li id="blog-page"><img src="images/icons/Pencil.png" ><span class="menu-text">Blog</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
            <li id="blog-page"><img src="images/icons/Social Media - Wordpress.png" ><span class="menu-text">Wordpress</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
            <li id="projects-page"><img src="images/icons/Social Media - Facebook.png"><span class="menu-text">Like Us</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
            <li id="blog-page"><img src="images/icons/Social Media - RSS Feeds.png" ><span class="menu-text">RSS Feed</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
            <li id="blog-page"><img src="images/icons/User - M.png" ><span class="menu-text">Contact</span><img src ="images/menu_arrow.png" class ="arrow"/></li>
        </ul>
    </div>
        <div id ="page-wrapper">
    <header>
        <span class="nav-btn" id="mobile-nav-btn">
            <span class="nav-btn-bar"></span>
            <span class="nav-btn-bar"></span>
            <span class="nav-btn-bar"></span>
        </span>
    </header>

    <div id="content">


<section id="home">
<div id="home-main">

    <div class="content">
    <h3 style="display: block;">Recent Projects</h3>
    </div>

    <div class="content">
    <h4>Projects</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </div>

    <div class="content">
    <h4>Projects</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </div>


    <div class="content">

    <h3 style="display: block;">Articles</h3>
    </div>

        <article class="blogpost panel content">
        <div class="thumbnail"></div>
        <h4>This is the title of a blog post</h4>
        <p class="meta"><a href=""><time datetime="2009-06-29T23:31:45+01:00">June 29th 2009</time></a> by <a href="#">Fintan Kearney</a> - <a href="#comments">3 comments</a></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </article>

        <article class="blogpost panel content">
        <div class="thumbnail"></div>
        <h4>This is the title of a blog post</h4>
        <p class="meta"><a href=""><time datetime="2009-06-29T23:31:45+01:00">June 29th 2009</time></a> by <a href="#">Fintan Kearney</a> - <a href="#comments">3 comments</a></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </article>

</div>
</section>


<section id="blog">

    <div class="content">
    <h3 style="display: block;">Blog</h3>
    </div>

    <article class="blogpost panel content">
        <div class="thumbnail"></div>
        <h4>This is the title of a blog post</h4>
        <p class="meta"><a href=""><time datetime="2009-06-29T23:31:45+01:00">June 29th 2009</time></a> by <a href="#">Fintan Kearney</a> - <a href="#comments">3 comments</a></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </article>


    <article class="blogpost panel content">
        <div class="thumbnail"></div>
        <h4>This is the title of a blog post</h4>
        <p class="meta"><a href=""><time datetime="2009-06-29T23:31:45+01:00">June 29th 2009</time></a> by <a href="#">Fintan Kearney</a> - <a href="#comments">3 comments</a></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </article>

</section>



<section id="projects">

    <div class="content">
    <h3 style="display: block;">Project Title</h3>
    </div>

    <div class="content">
    <h4>Projects</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tellus eu orci imperdiet nec rutrum lacus blandit. Cras enim nibh, sodales ultricies elementum vel, fermentum id tellus. Proin metus odio, ultricies eu pharetra dictum, laoreet id odio <a href="">Full Article</a></p>
    </div>

</section>




</div>

        </div>
</body></html>

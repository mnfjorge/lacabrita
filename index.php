<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>La Cabrita</title>
        <meta name="description" content="La Cabrita - a Mexican javascript idle game.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/main.min.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
			<section id="content" class="clearfix">
				<article>
					<header>
						<h1><span>La Cabrita <small>Um game de browser blablabla</small></span></h1>
						<p>
							Aguita: <span>400.000.000</span>
							<br />
                            Gotas por seg: <span>815</span>
						</p>
					</header>
                    <a href="#hit" id="hit">
                        <img src="img/scenario/goat-1.png" class="normal" />
                        <img src="img/scenario/goat-1-mov.png" class="mov" />
                    </a>
                    <div id="scenario"></div>
				</article>
				<aside>
					<header>
						<ul class="clearfix">
							<li class="active menu-item menu-item-1"><a href="#store"><span>Loja</span></a></li>
							<li class="menu-item menu-item-2"><a href="#rank"><span>Rank</span></a></li>
							<li class="menu-item menu-item-3"><a href="#config"><span>Configura&ccedil;&atilde;o</span></a></li>
						</ul>
					</header>
					<section id="store" class="menu-item-content" style="display:block;">
						<div class="store-group clearfix">
							<h4>Energia</h4>
							<ul id="store-energy">
							</ul>
						</div>
						<div class="store-group clearfix">
							<h4>Melhorias</h4>
							<ul id="store-upgrades">
							</ul>
						</div>
						<!--div class="store-group clearfix">
							<h4>Ajudantes</h4>
							<ul id="store-helpers">
							</ul>
						</div-->
					</section>
					<section id="rank" class="menu-item-content">
						<h4>Rank Mundial</h4>
					</section>
					<section id="config" class="menu-item-content">
						<h4>A Equipe</h4>
						<p class="author">
							Design<br />
							<a href="#">Cassia Tofano </a>
						</p>
						<p class="author">
							Desenvolvimento<br />
							<a href="#">Marcio Jorge </a>
						</p>
						<p class="author">
							Projeto<br />
							<a href="#">Roberto Gaspar </a>
						</p>
					</section>
				</aside>
			</section>
		</div>

        <?php include_once('inc/tpl_energy.php'); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.min.js"></script>
        <script src="js/vendor/mustache.min.js"></script>
        <script src="js/game.js"></script>
        <script src="js/main.js"></script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>

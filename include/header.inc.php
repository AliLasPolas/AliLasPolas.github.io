

<!DOCTYPE html>
<html>
<head>
	<title>OPIRC</title>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="OPIRC, OP-IRC, Science, Culture, Érudition, Études, Textes, Association, Pierrefitte, Sur, Seine, Saint, Denis, 93">
	<meta name="author" content="MD Nizamuddin Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/opirc_site/asset/css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<style type="text/css">
	header{
	width: 100%;
	 /*background-color: blue;*/
	color: #fff;
	}
	.header_haut{
		height: 35px;
		width: 92%;
		background-color: rgba(30,30,30,0.96);
		padding-right: 4%;
		padding-left: 4%;
		}
		.header_lettrage{
			float: left;
			text-align: left;
			height: 100%;
			}
			.opirc{
				height: 100%;
				display: inline-block;
				font-size: 1.25em;
				line-height: 100%;
			}

			.header_lettrage span{
				height: 100%;
				display: inline-block;
			}
		.header_connexion{
			height: 100%;
			float: right;
			text-align: right;
			}

	.header_bas{
		height: 175px;
		/*background-color: green;*/
		background-image: url(/opirc_site/asset/img/header_bg.jpg);
		background-position: center;
		width: 100%;
		}
		.header_logo{
			width: 20%;
			height: calc(100% - 35px);
			 /*background-color: purple;*/
			float: left;
			padding-top: 35px;
			background-image: url(/opirc_site/asset/img/opirc_logo_2.png);
			background-size: 145px;
			background-repeat: no-repeat;
			background-position: 4vw center;

		}
		.header_menu{
			height: calc(100% - 35px);
			width: 60%;
			 /*background-color: grey;*/
			float: left;
			padding-top: 35px;
			}
			nav{
				height: 100%;
			}
			.nav_haut{
				height: 25%;
				width: 80%;
				}
				.nav_haut>li{
					border-bottom: 1px solid #aaa;
					width: 25%;
					font-size: 1.2em;
					font-weight: 400;
					padding-bottom: 13px;
				}
				/*linear-gradient(to top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 50%);*/
				.nav_haut>li:hover{
					background-image: linear-gradient(to top, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 50%);
					border-bottom: 1px solid #fff;

				}
				.nav_bas{
					height: 75%;
					width: 80%;
				}
				.nav_bas>li{
					padding-top: 2%;
					width: calc(100% / 6);
					font-size: 1em;
					font-weight: 300;
					border-top: 1px solid #aaa;

				}
				.nav_bas>li:hover{
					background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0) 50%);
					border-top: 1px solid #fff;

				}
		.header_menu::after{
			clear: both;
		}
/*		li{
			text-align: center;
		}
		li:first-of-type{
			text-align: left;
		}		
		li:last-of-type{
			text-align: right;
		}*/

	@media only screen and ( min-width : 993px ){
		.mobile{
			display: none !important;
		}
	}	

	@media only screen and ( max-width : 993px ){
		header{
			margin-bottom: 35px;
		}
		.header_menu{
			padding: 0;
		}
		.header_haut{
			position: fixed;
			top: 0;
			left: 0;
		}
		.header_bas{
			height: 35px;
		}
		nav{
			width: 100%;
		}
		.nav_haut{
			display: none;
		}
		.nav_bas{
			width: 100%;
		}
		.header_menu{
			width: 100%;
		}
		.header_logo{
			display: none;
		}
		.header_bas{
			display: none;
		}
		.desktop{
			display: none !important;
		}
		.menu_mobile{
			display: none;
			z-index: 4;
			width: 100vw;
			height: 100vh;
			background-position: center;
			position: fixed;
			top: 0;
			left: -300px;
			/*background-color: rgba(200,200,200,0.30);*/		}
		.nav_mobile{
			background-image: url(/opirc_site/asset/img/header_bg.jpg);
			width: 300px;
			height: 100%;

		}
		.nav_mobile>ul{
			width: 100%;
			height: 100%;
			background-color: rgba(40,40,40,0.60);
		}
		.nav_mobile>ul>li{
			width: 300px;
			height: 5%;
			display: block;
			line-height: 30px;
			border-bottom: 1px solid #222;
		}
		.nav_mobile>ul>li>i{
			float: right;
			padding-right: 5px;
		}
		.nav_mobile>ul>li>.fa-times{
			float: left;
		}
	}	
</style>
</head>
<body>
<div class="container global">
	<header>
		<div class="header_haut">
			<div class="header_lettrage">
				<span class="mobile" style="padding-right: 10px;"> <i class="fa fa-bars fa-2x" aria-hidden="true"></i> </span>
				<span class="opirc">OPIRC</span>
				<span class="desktop"> - A la poursuite de la connaissance</span>
			</div>
			<div class="header_connexion desktop">Coulisses</div>
			<div class="header_connexion mobile"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></div>
		</div>
		<div class="menu_mobile mobile">
			<nav class="nav_mobile mobile">
				<ul class="ul_mobile mobile"><!-- 
					--><li class="li_mobile mobile" id="barre_mobile"><i class="fa fa-times fa-2x" aria-hidden="true"></i> MENU </li><!--
					--><li class="li_mobile mobile" id="articles_mobile">Les articles <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="etudes_mobile">Les études<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="actus_mobile">Les actualités<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="propos_mobile">A propos<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="rejoindre_mobile">Nous rejoindre<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="planning_mobile">Planning<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="contact_mobile">Contact<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="faq_mobile">FAQ<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
					--><li class="li_mobile mobile" id="contenu_mobile">Créer du contenu <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></li><!--
				--></ul>
			</nav>
		</div>
		<div class="header_bas desktop">
			<div class="header_logo">
				
			</div>
			<div class="header_menu">
				<nav>
					<ul class="nav_haut"><!-- 
					--><li id="articles">Les articles</li><!--
					--><li id="etudes">Les études</li><!--
					--><li id="actus">Les actualités</li><!--
					--><li id="propos">A propos</li><!--
				--></ul>

					<!-- CECI EST UN FIX A LA CON POUR RÉSOUDRE LES ESPACES ENTRE LES LI -->
					<ul class="nav_bas"><!--
					--><li id="rejoindre">Nous rejoindre</li><!--
					--><li id="planning">Planning</li><!--
					--><li id="contact">Contact</li><!--
					--><li id="recherche">Recherche</li><!--
					--><li id="faq">FAQ</li><!--
					--><li id="contenu">Créer du contenu </li><!--
				--></ul>
				</nav>
			</div>
		</div>
	</header>
	<main>
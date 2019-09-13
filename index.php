<!DOCTYPE html>
<html>
<head>
<title>HRA Brasil</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/more.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/fontes.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/carousel.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/plugins/owl-carousel/css/owl.carousel.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">


	<style type="text/css">

		@media screen and (max-width: 992px) {
			.visible-mob{
				display: block;
			}

			.visible-desk, .navbar-desk{
				display: none;
			}

			.card-main{
				border-right: none !important;
				border-bottom: 1px solid #dee2e6 !important;
			}

			.card-main .link-more{
				display: block !important;
				font-size: 16px !important;
			}

			.banner-img{
				height: auto; 
				width: 100%;
			}
		}

		@media screen and (min-width: 992px) {
			.visible-mob{
				display: none;
			}

			.visible-desk, .navbar-desk{
				display: block;
			}

			.banner-img {
				height: 100vh; 
				width: 100%;
				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		}

		

		html, body{
			height: 100% !important;
		}


		/* POSSIVEL COR */
		/* rgb(49, 49, 49); 
		background-color: rgb(38, 51, 60) */
		
		.navbar-desk{
			position: absolute;

			z-index: 1030;
		}

		.navbar-desk .navbar .navbar-collapse .navbar-nav{
			border: 1px solid #3C3C3B;
			background: #1C1D1E !important;
			box-shadow: 0 0 3px 0px #6c757d;
			width: 750px;
		}

		.navbar-desk .navbar .nav-item{
			padding: 0 1.98rem !important;
		}

		.navbar-desk .navbar .nav-link{
			font-weight: lighter !important;
			text-transform: uppercase;
			font-size: 11px !important;
			
		}
		
		.navbar-desk .logo img, .visible-mob .navbar-brand {
			filter: brightness(0) invert(1);
		}

		.navbar-desk .logo img{
			height: auto; 
			width: 250px; 
			
		} 

		.navbar-desk .icons-us{
			position: absolute;
			top: 5px;
			right: 10px;
			color: white;
			width: 60px;
			border: 1px solid white;
			border-radius: 10px;
			padding: 5px;
		}

		#banner .bottom{
			position: absolute;
   			bottom: 5px;
			z-index: 9999;
			
		}

		#banner .bottom a{
			border: 2px solid white;
			padding: 15px 25px;
		}

		#banner .effect-up{
			position: absolute;
			top: 0;
			height: 200px;
			background: rgb(252,252,252);
			background: linear-gradient(0deg, rgba(252,252,252,0.014443277310924318) 0%, rgba(7,14,19,0.8911939775910365) 83%);
			
		}

		#banner .effect-down{
			position: absolute;
			bottom: 0;
			height: 300px;
			background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,1) 15%, rgba(252,252,252,0.014443277310924318) 100%);
			
		}

		#main{
			/* height: 100vh; */
			background: black;
		}

		.card-main{
			cursor: pointer;
			transition: all 0.2s;
		}
		
		.card-main:hover{
			background-color: rgba(255, 255, 255, 0.08);
		}

		.card-main p{
			font-size: 10px;
		}

		.card-main h6{
			opacity: 0.7;
			font-size: 12px;
		}

		.card-main a h4{
			font-family: 'Times New Roman', serif;
			font-size: 20px;
			color: #ce9c6bb0
		}

		.card-main .link-more{
			display: none;
			position: absolute; 
			top: 10px; 
			right: 15px;
			font-size: 14px;
			transition: all 0.2s;
		}

		.card-main .link-more:hover{
			color: #ce9c6bb0;
			cursor: default;
			text-decoration: underline !important;
		}

		.card-main:hover .link-more {
			display: block;
		}

		.owl-carouse h6{
			opacity: 0.7;
		}

		.owl-carouse h3{
			font-family: 'Times New Roman', serif;
			font-size: 32px;
			color: #ce9c6bb0;
		}

		.owl-carouse p{
			font-size: 13px;
		}

		.news-main .link-more{
			display: none;
			position: absolute;
			z-index: 9999999;
			bottom: 5px;
			right: 15px;
			transition: all 0.2s;
		}

		.news-main{
			display: flex;
			align-items: center;
			transition: all 0.2s;
		}

		.news-main:hover{
			background-color: rgba(255, 255, 255, 0.08);
		}

		.news-main:hover .link-more {
			display: block;
		}

		.news-main .link-more:hover{
			opacity: 0.7;
			color: #ce9c6bb0;
			cursor: default;
			text-decoration: underline !important;
		}
	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row navbar-desk w-100">
			<div class="col-12 text-center logo mt-5">
				<a href="index.php">
					<img src="assets/img/include.svg">
					
					<!-- <h2 style="color: white">Logo</h2> -->
				</a>
			</div>
			<nav class="navbar navbar-expand-md w-100 mt-3">
				<button style="display: none" class="btn btn-nav" type="button" onclick="openNav()">
					<i style="color: white" class="fas fa-bars"></i>
				</button> 
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item" style="border-right: 2px solid #3C3C3B">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item" style="border-right: 2px solid #3C3C3B">
							<a class="nav-link" href="#empresa">Sobre a Empresa</a>
						</li>
						<li class="nav-item" style="border-right: 2px solid #3C3C3B">
							<a class="nav-link" href="#associados">Associados</a>
						</li>
						<li class="nav-item dropdown" style="border-right: 2px solid #3C3C3B">
							<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
								Acontece <i class="fa fa-bars" style="color: #ce9c6b"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-uppercase" href="#">Mídia</a>
								<div class="dropdown-divider my-1"></div>
								<a class="dropdown-item text-uppercase" href="pages/noticias/pagenoticia.php">Notícias</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="pages/contato/index.php">Contato</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="border-bottom icons-us text-center">
				us <i class="fas fa-flag-usa"></i>
			</div>
			<div class="col-10 mx-auto" style="margin-top: 17rem">
				<div class="row align-items-center">
					<div class="col-3">
						<hr style="background: #dcdcdc">
					</div>
					<div class="col-6 text-center" style="color: #fbfbfb">
						<h1 style="text-shadow: 2px 2px 20px #212529;">Consultancy & Investment</h1>
					</div>
					<div class="col-3">
						<hr style="background: #dcdcdc">
					</div>
				</div>
			</div>
			<!-- <div class="col-12 w-100 mt-4 text-center teste">
				<h4 class="" style="color: #ce9c6b; text-shadow: 2px 2px 6px 10px #ce9c6b;">Consultancy & Investment</h4>
			</div>
			<div class="col-12 w-100 text-center">
				<hr class="my-0" style="width: 30%; background: #dcdcdc">
			</div> -->
		</div>
		<div class="row visible-mob">
			<nav class="navbar navbar-mob navbar-expand-lg fixed-top">
				<a class="navbar-brand" href="#">
					<img src="assets/img/include.svg" style="width: 150px; height: auto">
				</a>
				<button style="color: white !important;
				border: 2px solid white;" class="btn btn-nav" type="button" onclick="openNav()">
					<i class="fa fa-bars"></i>
				</button>
			</nav>
			<div id="mob-sidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn btn" onclick="closeNav()">
					<i class="fas fa-chevron-right"></i>
				</a>
				<nav class="navbar h-100" style="display: flex; align-items: center; justify-content: center;">
					<ul class="navbar-nav w-100">
						<li class="nav-item px-1">
							<a class="nav-link text-center" href="#" href="">Home</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link text-center" href="#empresa" href="">Sobre a Empresa</a>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link text-center" href="#associados" href="">Associados</a>
						</li>
						<li class="nav-item dropdown text-center" style="border-right: 2px solid #3C3C3B">
							<a class="nav-link" id="navbarDropdownMob" role="button" data-toggle="dropdown" aria-expanded="false">
								Acontece <i class="fa fa-bars" style="color: #ce9c6b"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMob">
								<a href="#" class="dropdown-item text-uppercase text-center">Mídia</a>
								<div class="dropdown-divider my-1"></div>
								<a href="pages/noticias/pagenoticia.php" class="dropdown-item text-uppercase text-center">Notícias</a>
							</div>
						</li>
						<li class="nav-item px-1">
							<a class="nav-link text-center" href="pages/contato/index.php" href="">Contato</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="banner" class="row justify-center">
			<div class="col-12 px-0">
				<img src="assets/img/banner3.jpg" class="banner-img"/>
				<div class="w-100 effect-down"></div>
			</div>
			<!-- <div class="col-12 effect-up"></div> -->
			
			<!-- <div class="col-12 mx-auto mb-2 text-center bottom">
				<a href="#pilares" class="btn text-light pulsate">
					<i class="fas fa-angle-down"></i>
				</a>
			</div> -->
		</div>
		<div id="main" class="row">
			<div class="col-lg-10 mx-auto my-5 px-4">
				<div class="row">
					<div class="col-lg-4 border-right border-bottom p-5 card-main">
						<p class="my-0 text-light">03.08.2019</p>
						<h6 class="my-0 text-light">Eventos</h6>
						<a href="#">
							<h4 class="mt-2">
								Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
							</h4>
						</a>	
						<a href="#" class="link-more">
							+ Eventos
						</a>
					</div>
					<div class="col-lg-4 border-right border-bottom p-5 card-main">
						<p class="my-0 text-light">04.08.2019</p>
						<h6 class="my-0 text-light">Publicações</h6>
						<a href="#">
							<h4 class="mt-2">
								Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
							</h4>
						</a>	
						<a href="#" class="link-more">
							+ Publicações
						</a>
					</div>
					<div class="col-lg-4 border-bottom p-5 card-main">
						<p class="my-0 text-light">03.08.2019</p>
						<h6 class="my-0 text-light">Associados</h6>
						<a href="#">
							<h4 class="mt-2">
								Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
							</h4>
						</a>	
						<a href="#" class="link-more">
							+ Associados
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 border-bottom p-4 news-main" style="min-height: 300px;">
						<div class="row">
							<div class="col-lg-4 text-center">
								<img src="assets/img/img1.jpg" style="width: 100%; height: auto" alt="">
							</div>
							<div class="col owl-carouse">
								<p class="mb-0 mt-3 text-light">03.08.2019</p>
								<h6 class="my-0 text-light">Eventos</h6>
								<a href="#">
									<h3 class="mt-3">
										Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
									</h3>
								</a>	
								<p class="mt-2 text-right">Fonte: UOL</p>
							</div>
							<a href="#" class="link-more float-right mt-5">
								+ Eventos
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 border-right p-5 card-main">
						<p class="my-0 text-light">03.08.2019</p>
						<h6 class="my-0 text-light">Eventos</h6>
						<a href="#">
							<h4 class="mt-2">
								Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
							</h4>
						</a>	
						<a href="#" class="link-more">
							+ Eventos
						</a>
					</div>
					<div class="col-lg-4 border-right p-5 card-main">
						<p class="my-0 text-light">04.08.2019</p>
						<h6 class="my-0 text-light">Publicações</h6>
						<a href="#">
							<h4 class="mt-2">
								Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
							</h4>
						</a>	
						<a href="#" class="link-more">
							+ Publicações
						</a>
					</div>
					<div class="col-lg-4 p-5 card-main">
						<p class="my-0 text-light">03.08.2019</p>
						<h6 class="my-0 text-light">Associados</h6>
						<a href="#">
							<h4 class="mt-2">
								Seminário sobre modulação de efeitos de decisões do STF em matéria Tributária
							</h4>
						</a>	
						<a href="#" class="link-more">
							+ Associados
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="row">
			<div class="col-lg-12 block">
				<div class="row" style="min-height: 300px">
					<div class="col-lg-3 px-4 py-5">
						<div class="logo text-center">
							<!-- <img  src="assets/img/logo.png" width="150" height="90" class="img-fluid"> -->
							<h1>Logo</h1>
						</div>
						
						<p class="text-justify text-muted-footer mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-lg-2 py-5 px-4">
						<h4>Menu</h4>
						<div class="mt-4 pl-1 text-left">
							<p><a href="#"  class="menus">Home</p>
							<p><a href="#"  class="menus">Sobre a Empresa</p>
							<p><a href="#"  class="menus">Associados</a></p>
							<p><a href="#"  class="menus">Mídia</a></p>
							<p><a href="#"  class="menus">Contato</a></p>
						</div>
					</div>
					<div class="col-lg-3 py-5 text-center">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5621.580815561395!2d-37.95654399617288!3d-4.929968940982865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x667d48fa538468ec!2sMetal%C3%BArgica+S%C3%A3o+Jos%C3%A9+De+Anchieta!5e0!3m2!1spt-BR!2sbr!4v1559328265308!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-3 py-5 px-4 text-center">
						<h4>Contato</h4>
						<div class="mt-4 pl-1 text-left">
							<p class="data"><i class="fas fa-map-marker-alt"></i> Av. Coronel Araújo Lima, 1348, Centro - Russas/CE</p>
							<p class="data"><i class="fas fa-phone-volume"></i> (88) 93943-3438</p>
							<p class="data"><i class="fas fa-inbox"></i> suaempresa@gmail.com</p>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-12 copy">
						<p class="text-center mb-0">Copyright © Todos os direitos reservados.</p>
					</div>
				</div>
			</div>
		</div>
		<button id="myBtn" class="btn" onclick="topFunction()"><i class="fas fa-chevron-up"></i></button>
	</div>  
</div>
	<script src="assets/js/jquery.js"></script>
	<!-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script> -->
	<script src="assets/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/plugins/mask/jquery.mask.js"></script>
	<script src="assets/plugins/fancybox/jquery.fancybox.js"></script>
	<script src="assets/plugins/fontawesome/js/all.js"></script>
	<script src="assets/plugins/owl-carousel/js/owl.carousel.js"></script>

	<script type="text/javascript">
	
		// $(document).ready(function() {
		// 	$("li.dropdown").hover(() => {
				
		// 		// alert($(this).html())
		// 		$(this).css({'background-color': 'red !important'})
		// 		// $(this).find('dropdown-menu').addClass('show')
		// 	})
		// })

		$('#parceiros .owl-carousel').owlCarousel({
		    // margin:35,
		    // responsiveClass:true,
		    // responsive:{
		    //     0:{
		    //         items:1,
		    //         nav:true
		    //     },
		    //     600:{
		    //         items:3,
		    //         nav:true,
		    //         animateOut: 'slideOutDown',
		    // 		animateIn: 'flipInX',
		    // 		smartSpeed:450,
		    // 		stagePadding: 50,
		    //     },
		    //     1000:{
		    //         items:4,
		    //         nav:true,
		    //         loop:true,
		    //         animateOut: 'slideOutDown',
		    // 		animateIn: 'flipInX',
		    // 		smartSpeed:450,
		    // 		stagePadding: 50,
		    //     }
		    // }

				
		    autoplay:false,
		    loop: true,
		    margin: 35,
		    // animateOut: 'slideOutDown',
    		// animateIn: 'flipInX',
    		smartSpeed:450,
    		stagePadding: 40,
		    
		    responsive:{
		        0:{
		            items:1,
		            // autoplay:true,
			    	autoplayTimeout:3300,
			    	autoplayHoverPause:true,
		        },
		        600:{
		            items:3,
		            // autoplay:true,
			    	autoplayTimeout:3000,
			    	autoplayHoverPause:true,
		        },
		        1000:{
		            items:2,
		            // autoplay:true,
			    	autoplayTimeout:3000,
			    	autoplayHoverPause:true,
		        }
		    }
		})

		$('#noticias .owl-carousel').owlCarousel({
		    // autoplay:false,
		    loop: true,
		    margin: 135,
		    // animateOut: 'slideOutDown',
    		// animateIn: 'flipInX',
			// nav:true,
			dots: true,
    		smartSpeed:450,
    		stagePadding: 40,
		    items:1,
			autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
		})



		
	
  	</script>
</body>
</html>









<!DOCTYPE html>
<html>
<head>
<title>HRA Brasil</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/fontes.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/carousel.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/plugins/fontawesome/css/all.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/plugins/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="../../assets/plugins/owl-carousel/css/owl.carousel.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
	<link href="../../assets/css/aos.css" rel="stylesheet">

	<style type="text/css">
		body{
			/* background: #eeeeee !important; */
			font-family: 'Roboto Condensed', sans-serif !important;
		}

		html, body {
			height: 100%;
		}

		button, a.btn {
			border-radius: 120px !important;
			transition: all 0.2s;
		}

		button:hover, a.btn:hover{
			box-shadow: 0px 0px 2px 1px #009ba4;
		}

		p, h3, h4, li {
			font-weight: lighter;
		}

		.pulsate {
			-webkit-animation: pulsate 2s ease-out;
			-webkit-animation-iteration-count: infinite; 
			opacity: 0.5;
		}

		@-webkit-keyframes pulsate {
			0% { 
				opacity: 0.5;
			}
			50% { 
				box-shadow: 1px 1px 10px 1px #e9ecef;
			}
			100% { 
				opacity: 0.5;
			}
		}

		#footer .block{
			min-height: 350px; 
			background-color: #222; 
			/* box-shadow: 2px 0px 5px #e9ecef;  */
			color: white;
		}

		#footer h4{
			color: #009ba4;
			font-weight: normal;
		}

		#footer a, #footer p{
			font-weight: lighter;
			transition: all 0.2s;
		}

		#footer a:hover, #footer p:hover{
			color: #009ba4;
		}

		#footer .copy{
			height: 50px;
			color: #009ba4;
			display: flex;
			background-color: #09090963;
			align-items: center; 
			justify-content: center;
			font-weight: bold;
		}

		
		#banner{
			/* The image used */
			background-image: linear-gradient(#333, gray), url("../../assets/img/hra3.jpg");
			background-blend-mode: multiply;
			/* width: 100%; */
			height: 100vh;

			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			/* border-radius: 10px; */
			/* box-shadow: 1px 3px 15px 5px #495057; */
			/* color: white; */
			display: flex;
			align-items: center;
		}

		#banner img{
			width: 200px;
			height: auto;
			/* filter: brightness(0) invert(1); */
		}

		#banner a.btn{
			border: 2px solid white;
			padding: 15px 25px;
			font-size: 22px;
		}
		/* POSSIVEL COR */
		/* rgb(49, 49, 49); 
		background-color: rgb(38, 51, 60) */

		.navbar .navbar-brand img{
			height: auto; 
			width: 150px; 
			filter: brightness(0) invert(1);
		}

		#sobre{
			/* The image used */
			background: rgb(49, 49, 49);
			/* background-blend-mode: multiply; */
			/* width: 100%; */
			/* height: 100vh; */


			/* border-radius: 10px; */
			/* box-shadow: 1px 3px 15px 5px #495057; */
			/* color: white; */
		}

		#carouselExampleFade .carousel-item{
			background-blend-mode: multiply;
			/* /* background-attachment: fixed; */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover; 
			height: auto;
		}
		/* POSSIVEL COR */
		/* rgb(49, 49, 49); 
		background-color: rgb(38, 51, 60) */

		#contato-empresa{
			/* The image used */
			background-image: linear-gradient(#333, #333, gray), url("../../assets/img/map.jpg");
			background-blend-mode: multiply;
			/* width: 100%; */

			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		#contato-empresa .block{
			border: 2px solid white;
			border-radius: 10px;
		}

		#contato-empresa h4{
			color: #009ba4;
		}
		
		#contato-empresa .block a, #contato-empresa .block p{
			transition: all 0.2s; 
		}

		#contato-empresa .block a:hover, #contato-empresa .block p:hover{
			color: #009ba4;
		}
		
	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row">
			<nav class="navbar navbar-expand-md w-100  fixed-top">
				<a class="navbar-brand mx-auto" href="#">
					<img src="../../assets/img/include.svg">
					
					<!-- <h2 style="color: white">Logo</h2> -->
				</a>
				<!-- <button style="display: none" class="btn btn-nav" type="button" onclick="openNav()">
					<i style="color: white" class="fas fa-bars"></i>
				</button> -->
				<!-- <div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#"><div class="div-nav"></div>Home</a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#servicos"><div class="div-nav"></div>Notícias</a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#quemsomos"><div class="div-nav"></div>Quem Somos <i class="fas fa-angle-down pt-1"></i></a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#contato"><div class="div-nav"></div>Contato</a>
						</li>
					</ul>
				</div> -->
			</nav>
			<div id="mob-sidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn btn" onclick="closeNav()">
					<i class="fas fa-chevron-right"></i>
				</a>
			    <nav class="h-100" style="display: flex; align-items: center; justify-content: center;">
			        <ul class="navbar-nav w-100">
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#" href=""><div class="div-mob"></div>Home</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#servicos" href=""><div class="div-mob"></div>Noticias</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#quemsomos" href=""><div class="div-mob"></div>Quem Somos</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#contato" href=""><div class="div-mob"></div>Contato</a>
						</li>
					</ul>
			    </nav>
			</div>
		</div>
		<div id="banner" class="row">
			<div class="col-12 mt-5 text-center">
				<img src="../../assets/img/parceiro1.png">
				<h1 class="text-light">Associado</h1>
				<!-- <p class="text-light text-justify w-50 mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam laudantium blanditiis iste quas, maiores deserunt illum odit animi similique debitis, unde nihil expedita laborum quae minus voluptates qui magnam id?</p> -->
				<div class="text-light mt-3 mb-2" data-aos="fade-right">
                    <a href="#" target="_blank" class="mr-3"><i class="fab fa-instagram fa-2x"></i></a> 
                    <a href="#" target="_blank" class="mr-3"><i class="fab fa-whatsapp fa-2x"></i></a> 
                    <a href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
				<hr class="subtitle-line text-light">
			</div>
			<div class="col-4 mx-auto mb-2 text-center">
				<a href="#sobre" class="btn text-light scrollsuave pulsate">
					<i class="fas fa-angle-down"></i>
				</a>
			</div>
		</div>
		<div id="sobre" class="row">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="col-lg-12 text-center" data-aos="fade-down">
							<h3 class="text-uppercase text-light">Sobre</h3>
							<hr class="subtitle-line">
						</div>
						<div class="col-lg-12 py-lg-5 mt-3" data-aos="fade-right">
							<p class="text-justify text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. At sed, dolorem rerum quidem maxime iure quaerat autem debitis, minus sint consequuntur? Amet eius nulla incidunt dignissimos doloremque hic accusantium dicta?<br>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. At sed, dolorem rerum quidem maxime iure quaerat autem debitis, minus sint consequuntur? Amet eius nulla incidunt dignissimos doloremque hic accusantium dicta?<br>
							Lorem ipsum dolor sit amet consectetur adipisicing elit. At sed, dolorem rerum quidem maxime iure quaerat autem debitis, minus sint consequuntur? Amet eius nulla incidunt dignissimos doloremque hic accusantium dicta?
							</p>
						</div>
					</div>
					<div class="col-lg-6 px-0 px-lg-1">
						<div class="col-lg-12 text-center" data-aos="fade-up">
							<h3 class="text-uppercase text-light">Mídia</h3>
							<hr class="subtitle-line">
						</div>
						<div class="col-lg-12 px-0 mt-3" data-aos="fade-right">
							<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3500">
								<div class="carousel-inner">
									<div class="carousel-item active" style="width: 100%; height: auto; background-image: linear-gradient(#333, #333, #333, gray), url('../../assets/img/hra1.jpg')">
										<!-- <div style="" class="d-block w-100 h-100" alt="..."></div> -->
									</div>
									<div class="carousel-item" style="width: 100%; height: auto; background-image: linear-gradient(#333, #333, #333, gray), url('../../assets/img/hra2.jpg')">
										<!-- <div style="" class="d-block w-100 h-100" alt="..."></div> -->
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="contato-empresa" class="row">
			<div class="col-lg-11 mx-auto py-5 px-4">
				<div class="row">
					<div class="col-lg-12 text-center" data-aos="fade-down">
						<h3 class="text-uppercase text-light">Contato</h3>
						<hr class="subtitle-line">
					</div>
				</div>
				<div class="row mt-4 text-light block" data-aos="fade-right">
					<div class="col-lg-4 py-5 px-4 text-center">
						<h4>Empresa</h4>
						<div class="mt-4 pl-1 text-justify">
							<p class=""><i class="fas fa-map-marker-alt"></i> Av. Coronel Araújo Lima, 1348, Centro - Russas/CE</p>
							<p class=""><i class="fas fa-phone-volume"></i> (88) 93943-3438</p>
							<p class=""><i class="fas fa-inbox"></i> suaempresa@gmail.com</p>
							<div class="text-center pt-4">
								<a href="#" target="_blank" class="mr-3"><i class="fab fa-instagram fa-2x"></i></a> 
								<a href="#" target="_blank" class="mr-3"><i class="fab fa-whatsapp fa-2x"></i></a> 
								<a href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
							</div>

						</div>
					</div>
					<div class="col-lg-8 py-5 text-center">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5621.580815561395!2d-37.95654399617288!3d-4.929968940982865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x667d48fa538468ec!2sMetal%C3%BArgica+S%C3%A3o+Jos%C3%A9+De+Anchieta!5e0!3m2!1spt-BR!2sbr!4v1559328265308!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<div id="footer" class="row">
			<div class="col-lg-12 block">
				<div class="row" style="min-height: 300px">
					<div class="col-lg-3 px-4 py-5">
						<div class="logo text-center">
							<!-- <img  src="../../assets/img/logo.png" width="150" height="90" class="img-fluid"> -->
							<h1>Logo</h1>
						</div>
						
						<p class="text-justify text-muted-footer mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-lg-2 py-5 px-4">
						<h4>Menu</h4>
						<div class="mt-4 pl-1 text-left">
							<p><a href="#"  class="text-muted-footer menus">Home</a></p>
							<p><a href="#"  class="text-muted-footer menus">Quem Somos</a></p>
							<p><a href="#"  class="text-muted-footer menus">Dúvidas</a></p>
							<p><a href="#"  class="text-muted-footer menus">Contato</a></p>
						</div>
					</div>
					<div class="col-lg-3 py-5 text-center">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5621.580815561395!2d-37.95654399617288!3d-4.929968940982865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x667d48fa538468ec!2sMetal%C3%BArgica+S%C3%A3o+Jos%C3%A9+De+Anchieta!5e0!3m2!1spt-BR!2sbr!4v1559328265308!5m2!1spt-BR!2sbr" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-3 py-5 px-4 text-center">
						<h4>Contato</h4>
						<div class="mt-4 pl-1 text-left">
							<p class="text-muted-footer data"><i class="fas fa-map-marker-alt"></i> Av. Coronel Araújo Lima, 1348, Centro - Russas/CE</p>
							<p class="text-muted-footer data"><i class="fas fa-phone-volume"></i> (88) 93943-3438</p>
							<p class="text-muted-footer data"><i class="fas fa-inbox"></i> suaempresa@gmail.com</p>
							

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
	<script src="../../assets/js/jquery.js"></script>
	<!-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script> -->
	<script src="../../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/main.js"></script>
	<script src="../../assets/plugins/mask/jquery.mask.js"></script>
	<script src="../../assets/plugins/fancybox/jquery.fancybox.js"></script>
	<script src="../../assets/plugins/fontawesome/js/all.js"></script>
	<script src="../../assets/plugins/owl-carousel/js/owl.carousel.js"></script>
	<script src="../../assets/js/aos.js"></script>
	<script type="text/javascript">
		

  		AOS.init();
		

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









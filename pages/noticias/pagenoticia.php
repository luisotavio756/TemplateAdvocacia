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
	<link rel="stylesheet" type="text/css" href="../../assets/css/more.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/fontes.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/plugins/fontawesome/css/all.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
	<!-- <link href="../../assets/css/aos.css" rel="stylesheet"> -->

	<style type="text/css">
		body{
			/* background: #eeeeee !important; */
			font-family: 'Roboto Condensed', sans-serif !important;
		}
		
		@media screen and (max-width: 768px) {
			.visible-mob{
				display: block;
			}

			.visible-desk{
				display: none;
			}

			.banner .img{
				height: auto; 
				width: 100%;
			}
		}

		@media screen and (min-width: 769px) {
			.visible-mob{
				display: none;
			}

			.visible-desk{
				display: block;
			}

			#pilares .br{
				border-right: 1px solid rgba(255, 255, 255, 0.5);
			}

			.banner .img {
				height: 100vh; 
				width: 100%;
				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		}

		#footer .block{
			min-height: 350px; 
			background-color: #222; 
			/* box-shadow: 2px 0px 5px #e9ecef;  */
			color: white;
		}

		#banner{
			/* The image used */
			background-image: linear-gradient(#333, gray), url("../../assets/img/news.jpg");
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
            justify-content: center;
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

		#news{
			/* The image used */
			background: rgb(49, 49, 49);
			/* background-blend-mode: multiply; */
			/* width: 100%; */
			/* height: 100vh; */


			/* border-radius: 10px; */
			/* box-shadow: 1px 3px 15px 5px #495057; */
			/* color: white; */
		}

		#news .ver-mais {
			border: 2px solid white;
			color: white;
			transition: all 0.2s;
		}



		/* POSSIVEL COR */
		/* rgb(49, 49, 49); 
		background-color: rgb(38, 51, 60) */

		
		#banner .bottom {
			position: absolute;
			bottom: 5px;

		}

        .block-down {
            padding: 8px;
			background: white;
			border-bottom-left-radius: 5px;
			border-bottom-right-radius: 5px;
		}
        .news-content hr{
            background: rgba(255, 255, 255, 0.5)
        }

        .news-content .titulo {
            color: white;
            font-weight: normal;
            /* font-weight: normal;
            font-size: 14px; */
        }

        .news-content .fonte {
            font-size: 14px;
            color: #333;
        }

        .news-content .descricao_curta {
            color: #dcdcdc !important;
            font-weight: normal;
            /* font-size: 14px; */
        }
        
        .news-content .data {
            color: #009ba4;
            font-weight: normal;
            font-size: 14px;
        }

        .news-content .content p {
            font-size: 1.25rem;
            color: white;

        }

        .news-content img {
            border-top-left-radius: 5px;
			border-top-right-radius: 5px;
        }
	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row">
			<nav class="navbar navbar-expand-md w-100  fixed-top">
				<a class="navbar-brand mx-auto" href="../../index.php">
					<img src="../../assets/img/hra.png">
					
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
			<div class="col-lg-6 text-center">
				<!-- <img src="../../assets/img/parceiro1.png"> -->
				<h1 class="text-light">
                    'Diplomacia sem armas é como música sem instrumentos’, diz Eduardo Bolsonaro na Câmara
                </h1>
				<!-- <p class="text-light text-justify w-50 mx-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam laudantium blanditiis iste quas, maiores deserunt illum odit animi similique debitis, unde nihil expedita laborum quae minus voluptates qui magnam id?</p> -->
				<!-- <div class="text-light mt-3 mb-2" data-aos="fade-right">
                    <a href="#" target="_blank" class="mr-3"><i class="fab fa-instagram fa-2x"></i></a> 
                    <a href="#" target="_blank" class="mr-3"><i class="fab fa-whatsapp fa-2x"></i></a> 
                    <a href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
                </div> -->
				<hr class="subtitle-line text-light">
                <p class="mt-2 text-light">Fonte: G1</p>
			</div>
			<div class="col-12 text-center bottom">
				<a href="#news" class="btn text-light scrollsuave">
					<i class="fas fa-angle-down"></i>
				</a>
			</div>
		</div>
		<div id="news" class="row">
			<div class="col-lg-8 mx-auto py-5 news-content">
				<div class="row">
					<div class="col-lg-12">
                        <h1 class="text-light text-justify titulo">'Diplomacia sem armas é como música sem instrumentos’, diz Eduardo Bolsonaro na Câmara'</h1>
                        <h5 class="text-light text-justify descricao_curta">Bolsonaro ampliou a potência das armas que podem ser adquiridas pela população em geral, mas cabia ao Exército definir os modelos.</h5>
					</div>
                    <div class="col-lg-12">
                        <p class="data mb-0">15/08/2019 13h33</p>
                        <hr>
					</div>
				</div>
                <div class="row px-1 px-lg-4">
                    <div class="col-lg-12">
                        <img src="../../assets/img/news.jpg" class="img-fluid" alt="">
                        <div class="block-down">
                            <h6 class="mb-0 fonte"><i class="fas fa-camera"></i> Fonte: acervo</h6>
                        </div>
					</div>
                    <div class="col-lg-12 mt-3 content">
                        <p class="text-light text-justify">
                            O Exército Brasileiro vetou a compra de fuzis por cidadãos comuns, mas liberou o acesso a pistolas que antes eram de uso restrito das forças de segurança, como a 9mm e a .45. As regras constam de uma portaria publicada nesta quinta-feira (15) no Diário Oficial da União. O texto regulamenta um dos decretos sobre armas do presidente Jair Bolsonaro, que foi publicado em junho.<br><br>
                            A portaria define quais armas são classificadas de uso permitido, que podem ser adquirido por qualquer pessoa que cumpra os requisitos legais para ter uma arma; e as de uso restrito, que só podem ser usados por categorias específicas.<br><br>
                            Os fuzis de diversos calibres, como 5.56mm e 7.62mm, foram classificados como restritos – ou seja, não podem ser adquiridos pelo cidadão comum. 
                        </p>
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
	<script src="../../assets/plugins/fontawesome/js/all.js"></script>
	<!-- <script src="../../assets/js/aos.js"></script> -->
	<script type="text/javascript">	
  		// AOS.init();
  	</script>
</body>
</html>









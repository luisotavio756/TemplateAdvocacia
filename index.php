<!DOCTYPE html>
<html>
<head>
<title>HRA Brasil</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/fontes.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/carousel.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="assets/plugins/owl-carousel/css/owl.carousel.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet">
	<link href="assets/css/aos.css" rel="stylesheet">

	<style type="text/css">
		body{
			/* background: #eeeeee !important; */
			font-family: 'Roboto Condensed', sans-serif !important;
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

		@media screen and (max-width: 992px) {
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

		@media screen and (min-width: 992px) {
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


		/* #contato label{
			color: #343a40 !important;
		} */

		#img{
			color: white;
		}

		#img .img{
			/* The image used */
			background-image: linear-gradient(black, gray), url("assets/img/hra4.jpg");
			background-blend-mode: multiply;
			width: 100%;
			height: 400px;

			/* background-attachment: fixed; */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			/* border-radius: 10px; */
			box-shadow: 1px 3px 15px 5px #495057;
			/* color: white; */
		}
		#img a.btn{
			background-color: transparent !important;
		}

		#img a.btn{
			border: 2px solid #009ba4;
			color: white;
		}

		#img p svg{
			color: #009ba4;
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

		
		.banner{
			/* The image used */
			/* background-image: linear-gradient(#333, gray), url("assets/img/hra1.jpg");
			background-blend-mode: multiply; */
			/* width: 100%; */
			height: 100vh;

			/* background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover; */
			/* border-radius: 10px; */
			/* box-shadow: 1px 3px 15px 5px #495057; */
			/* color: white; */
		}

		#carouselExampleFade .carousel-item div{
			background-blend-mode: multiply;
			/* /* background-attachment: fixed; */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover; 
		}
		/* POSSIVEL COR */
		/* rgb(49, 49, 49); 
		background-color: rgb(38, 51, 60) */
		.carousel-caption {
			position: absolute;
			top: 30%;
			right: 15%;
			/* bottom: 20px; */
			left: 2%;
			z-index: 10;
			padding-top: 20px;
			padding-bottom: 20px;
			color: #fff;
			text-align: justify;
		}

		.carousel-caption h5{
			font-size: 3.5rem;
		}
	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row">
			<nav class="navbar navbar-expand-md w-100  fixed-top">
				<a class="navbar-brand mx-auto" href="#">
					<img src="assets/img/include.svg" style="height: auto; width: 150px; filter: brightness(0) invert(1);">
					
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
		<div class="row">
			<div class="col-12 px-0 banner">
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="3500">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div style="background-image: linear-gradient(#333, #333, #333, gray), url('assets/img/hra1.jpg')" class="d-block w-100 h-100" alt="..."></div>
							<div class="carousel-caption d-none d-md-block">
								<h5>Hra Brasil</h5>
								<p class="font-weight-lighter">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
						<div class="carousel-item ">
							<div style="background-image: linear-gradient(#333, #333, #333, gray), url('assets/img/hra2.jpg')" class="d-block w-100 h-100" alt="..."></div>
							<div class="carousel-caption d-none d-md-block">
								<h5>Ambiente profissional</h5>
								<p class="font-weight-lighter">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
						<div class="carousel-item ">
							<div style="background-image: linear-gradient(#333, #333, #333, gray), url('assets/img/hra3.jpg')" class="d-block w-100 h-100" alt="..."></div>
							<div class="carousel-caption d-none d-md-block">
								<h5>Buscando sempre o melhor</h5>
								<p class="font-weight-lighter">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="pilares" class="row">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12 px-5">
						<div class="row">
							<div class="col-lg-12 text-center" data-aos="fade-down">
								<h3 class="text-light text-uppercase">Pilares</h3>
								<hr class="subtitle-line">
							</div>
						</div>
						<div class="row mt-4">
							<div class="col-lg-4 text-center mt-1 py-3 text-light br" data-aos="fade-right">
								<h4 class="title text-uppercase">Missão</h4>
								<i class="far fa-lightbulb fa-5x"></i>
								<p class="text px-3 mt-3">Assistência com foco no sucesso do empreendimento do cliente.</span>
								</p>
								<hr class="subtitle-line">
							</div>
							<div class="col-lg-4 text-center mt-1 py-3 text-light br" data-aos="fade-right">
								<h4 class="title text-uppercase">Visão</h4>
								<i class="far fa-eye fa-5x"></i>
								<p class="text px-3 mt-3">Vontade e determinação de ir além do comum e conseguir alcançar patamares sempre maiores.</p>
								<hr class="subtitle-line">
							</div>
							<div class="col-lg-4 text-center mt-1 py-3 text-light" data-aos="fade-right">
								<h4 class="title text-uppercase">Valores</h4>
								<i class="fas fa-chart-line fa-5x"></i>
								<p class="text px-3 mt-3">Garantia de resultados postivos e sempre melhorias no âmbito consultorial.</p>
								<hr class="subtitle-line">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="row" style="min-height: 450px; background-color: rgb(38, 51, 60);"></div> -->
		<div id="img" class="row" style="background-color: rgb(49, 49, 49)">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row align-items-center">
					<div class="col-lg-6 px-3 px-lg-5 py-4" data-aos="fade-up">
						<h1 class="font-weight-lighter font-light text-justify">Perca o medo de investir, venha conosco</h1>
						<h5 class="text-justify mt-4">Uma nova experiência criada para um novo jeito de investir</h5>
						<p class="font-weight-lighter text-justify mt-4"><i class="fas fa-check mr-2"></i> Tenha uma visão geral de todos os seus investimentos em uma única tela.</p>
						<p class="font-weight-lighter text-justify mt-2"><i class="fas fa-check mr-2"></i> Veja recomendações de produtos adequados ao seu perfil de investidor..</p>
						<p class="font-weight-lighter text-justify mt-2"><i class="fas fa-check mr-2"></i>  Acompanhe a performance e o histórico de suas aplicações de maneira simples e intuitiva.</p>
						<a href="#" class="btn btn-block">Conheça nosso modo de investir</a>
					</div>
					<div class="col-lg-6 img py-4" data-aos="fade-up"></div>
				</div>
			</div>
		</div>
		<div id="servicos" class="row">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3 class="text-uppercase title">Serviços</h3>
						<hr class="subtitle-line">
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-lg-3 text-center" data-aos="fade-right">
						<div class="serv px-2 py-5">
							<i class="fas fa-address-book fa-4x"></i>
							<h5 class="mt-2 text-light">Gestão de Pessoas</h5>
						</div>
					</div>
					<div class="col-lg-3 text-center" data-aos="fade-right">
						<div class="serv px-2 py-5">
							<i class="fas fa-comments-dollar fa-4x"></i>
							<h5 class="mt-2 text-light">Gestão de Dinheiro</h5>
						</div>
					</div>
					<div class="col-lg-3 text-center" data-aos="fade-right">
						<div class="serv px-2 py-5">
							<i class="fas fa-business-time fa-4x"></i>
							<h5 class="mt-2 text-light">Gestão de Empresas</h5>
						</div>
					</div>
					<div class="col-lg-3 text-center" data-aos="fade-right">
						<div class="serv px-2 py-5">
							<i class="fas fa-desktop fa-4x"></i>
							<h5 class="mt-2 text-light">Gestão de Serviços</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="parceiros" class="row">
			<div class="col-lg-12 py-5 list">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3 class="text-header title text-uppercase">Associados</h3>
						<hr class="subtitle-line">
					</div>
				</div>
				<!-- <h1 class="text-center mt-0" ><i class="far fa-handshake fa-2x"></i></h1> -->
				<!-- <p class="text-center text mt-0">Estes são nossos fieis parceiros que nos ajudam a manter o projeto e impactar a sociedade !</p> -->
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel owl-theme mt-4">
							<div class="item" data-aos="fade-up">
								<div class="row one">
									<div class="col-lg-5 d-flex align-items-center">
										<img src="assets/img/parceiro1.png" width="50" class="mx-auto">
									</div>
									<div class="col-lg-7 py-2">
										<h3 class="title text-center">Nome</h3>
										<p class="title text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae assumenda facere libero quisquam, beatae dolores autem ea asperiores illum deleniti. Repudiandae nam at dolorum nostrum soluta, nesciunt culpa ex.</p>
									</div>									
								</div>
								<div class="row">
									<div class="col-12" style="display: flex;align-self: flex-end;">
										<a href="#" class="title font-weight-lighter ml-auto">Conhecer associado <i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<div class="item" data-aos="fade-up">
								<div class="row one">
									<div class="col-lg-5 d-flex align-items-center">
										<img src="assets/img/parceiro2.png" width="50" class="mx-auto">
									</div>
									<div class="col-lg-7 py-2">
										<h3 class="title text-center">Nome</h3>
										<p class="title text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae assumenda facere libero quisquam, beatae dolores autem ea asperiores illum deleniti. Repudiandae nam at dolorum nostrum soluta, nesciunt culpa ex.</p>
									</div>									
								</div>
								<div class="row">
									<div class="col-12" style="display: flex;align-self: flex-end;">
										<a href="#" class="title font-weight-lighter ml-auto">Conhecer associado <i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row one">
									<div class="col-lg-5 d-flex align-items-center">
										<img src="assets/img/parceiro3.png" width="50" class="mx-auto">
									</div>
									<div class="col-lg-7 py-2">
										<h3 class="title text-center">Nome</h3>
										<p class="title text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae assumenda facere libero quisquam, beatae dolores autem ea asperiores illum deleniti. Repudiandae nam at dolorum nostrum soluta, nesciunt culpa ex.</p>
									</div>									
								</div>
								<div class="row">
									<div class="col-12" style="display: flex;align-self: flex-end;">
										<a href="#" class="title font-weight-lighter ml-auto">Conhecer associado <i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row one">
									<div class="col-lg-5 d-flex align-items-center">
										<img src="assets/img/parceiro4.png" width="50" class="mx-auto">
									</div>
									<div class="col-lg-7 py-2">
										<h3 class="title text-center">Nome</h3>
										<p class="title text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae assumenda facere libero quisquam, beatae dolores autem ea asperiores illum deleniti. Repudiandae nam at dolorum nostrum soluta, nesciunt culpa ex.</p>
									</div>									
								</div>
								<div class="row">
									<div class="col-12" style="display: flex;align-self: flex-end;">
										<a href="#" class="title font-weight-lighter ml-auto">Conhecer associado <i class="fas fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>	
		</div>
		<div id="noticias" class="row">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3 class="text-uppercase">Notícias</h3>
						<hr class="subtitle-line">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel owl-theme mt-4">
							<div class="item" data-aos="fade-right">
								<div class="row">
									<div class="col-lg-6 mx-auto py-2">
										<h3 class="text-center">Título</h3>
										<p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae assumenda facere libero quisquam, beatae dolores autem ea asperiores illum deleniti. Repudiandae nam at dolorum nostrum soluta, nesciunt culpa ex.</p>
										<p class="text-right">Fonte: G1</p>
									</div>		
									<div class="col-12 text-center">
										<a href="#" class="btn">Ver notícia completa</a>
									</div>								
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-6 mx-auto py-2">
										<h3 class="title text-center">Título</h3>
										<p class="title text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam vitae assumenda facere libero quisquam, beatae dolores autem ea asperiores illum deleniti. Repudiandae nam at dolorum nostrum soluta, nesciunt culpa ex.</p>
										<p class="text-right text-light">Fonte: G1</p>
									</div>	
									<div class="col-12 text-center">
										<a href="#" class="btn">Ver notícia completa</a>
									</div>								
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div id="img" class="row" style="background-color: rgb(49, 49, 49)">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3 class="text-uppercase">Parceiros</h3>
						<hr class="subtitle-line">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-5">
						
					</div>
					
					
				</div>
			</div>
		</div>
		<!-- <div id="instagram" class="row">
			<div class="col-lg-11 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3 class="text-header">VEJA-NOS NO INSTAGRAM</h3>
						<hr class="subtitle-line">
					</div>
					<div class="col-lg-12 px-0 px-lg-5 mt-3 "> 
						<iframe src="//lightwidget.com/widgets/3766dccb8ece5dc98a68ad03a0225dab.html" scrolling="no" allowtransparency="true" class="lightwidget-widget visible-desk" style="width:100%;border:0;overflow:hidden;"></iframe>
						<iframe src="//lightwidget.com/widgets/657fd50e70b4542a8f28b7f80754e9b4.html" scrolling="no" allowtransparency="true" class="lightwidget-widget visible-mob" style="width:100%;border:0;overflow:hidden;"></iframe>
					</div>
				</div>
			</div>
		</div> -->
		<div id="contato" class="row paralax">
			<div class="col-lg-11 mx-auto py-5 form-contato">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h3 class="text-header title">CONTATO</h3>
						<hr class="subtitle-line">
					</div>
					<form autocomplete="off" class="col-lg-12 mt-3" action="" method="POST">
						<div class="row px-lg-3">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" name="firstNameTextField" autocomplete="false" autocomplete="off" required="">
									<label>Seu Nome</label>
								</div>
								<div class="form-group">
									<input type="email" name="emailTextField" autocomplete="false" required="">
									<label>Email</label>
								</div>
								<div class="form-group">
									<input class="telefone" type="tel" name="lastNameTextField" autocomplete="false" required="">
									<label>Telefone</label>
								</div>
								<div class="form-group">
									<select>
										<option></option>
										<option>Dúvida</option>
										<option>Comentário</option>
										<option>Interesse Comercial</option>
									</select>
									<label>Assunto</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<textarea type="text" rows="2"></textarea>
									<label>Mensagem</label>
								</div>
								<div class="form-group">
									<input type="file" name="img[]" class="file">
									<div class="input-group">
										<input type="text" class="browse-input" placeholder="Escolha um arquivo.." disabled="">
									</div>
									<div class="btn-group">
										<button  class="browse btn btn-dark input-lg" type="button"><i class="glyphicon glyphicon-search"></i>Buscar <i class="fas fa-cloud-upload-alt"></i></button>
										<button style="display: none" class="browse-cancel btn btn-dark input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Cancelar <i class="fas fa-minus-circle"></i></button>
									</div>
								</div>
								<button style="margin-top: 48px;" type="submit" class="btn btn-block btn-submit">Enviar <i class="far fa-paper-plane"></i></button>
							</div>
						</div>
					</form>
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
	<script src="assets/js/jquery.js"></script>
	<!-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script> -->
	<script src="assets/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/plugins/mask/jquery.mask.js"></script>
	<script src="assets/plugins/fancybox/jquery.fancybox.js"></script>
	<script src="assets/plugins/fontawesome/js/all.js"></script>
	<script src="assets/plugins/owl-carousel/js/owl.carousel.js"></script>
	<script src="assets/js/aos.js"></script>
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









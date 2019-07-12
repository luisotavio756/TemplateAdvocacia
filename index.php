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
	<script src="assets/js/jquery.js"></script>
	<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
	<style type="text/css">
		.list-news ul {
			list-style: none;
			
		}

		.list-news li {
			font-size: 15px;
			font-weight: 600;
			padding: .5rem .5rem;
			margin: .7rem 0;
			border-left: 3px solid #333;
			border-radius: 2px;
		}

		.list-news a:hover{
			transition: all 0.5s;
			color: #ce9c6b;
		}

		.separator{
			width: 50%;
			height: 2px;
			background-color: #dcdcdc;
			border-radius: 5px;
		}

		.link-text{
			font-size: 1.1rem;

		}

		.link-text:hover{
			transition: all 0.4s;
			color: #ce9c6b;
			text-decoration: underline;
			
		}
		/* #myCarousel-news{
			height: 400px;
		} */

		#myCarousel-news .carousel-item .caption{
			font-size: 1.1rem;
			font-weight: 700;
		}

		#myCarousel-news .carousel-item .caption .separator{
			height: 3px !important;
		}

		#myCarousel-news .carousel-item .caption, #myCarousel-news .carousel-item .caption .separator{
			color: white;
		}

		#myCarousel-news .carousel-item{
			width: 100%;
			height: auto;
			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

		}

		.suspension-points{
			color: #ce9c6b;
		}

		.suspension-points {
			font-size: .8rem;
		}

		@media screen and (max-width: 992px) {
			.visible-mob{
				display: block;
			}

			.visible-desk{
				display: none;
			}

			.helper-align{
				text-align: center !important;
				margin-left: auto !important;
				margin-right: auto !important;
			}
			.link-text{
				text-align: center !important;
				padding-right: 0 !important;
			}

			.carousel-news{
				padding-right: 0px !important;
				padding-left: 0px !important;
			}

			.suspension-points{
				display: block;
			}
		}

		@media screen and (min-width: 992px) {
			.visible-mob{
				display: none;
			}

			.visible-desk{
				display: block;
			}

			#myCarousel-news .carousel-item{
				border-radius: 3px
			}

			.carousel-news{
				padding-right: 1rem !important;
				padding-left: 1rem !important;
			}

			.suspension-points{
				display: none;
			}

			#quemsomos .img{
				display: flex;
				align-items: center;
			}
		}
		
		#banner{
			background-image: url('assets/img/banner2.jpg');
			/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		#contato button{
			color: #ce9c6b;
			font-weight: 600;
		}

		#contato label{
			color: #ce9c6b;
		}

		#parceiros img{
			width: 150px !important;
			height: auto !important;
		}

		#parceiros .owl-carousel .owl-stage{
			display: flex;
			align-items: center;
		}

		#parceiros .owl-carousel .owl-item{
			align-self: normal;
			border: 1px solid gray;
			border-radius: 10px;
			padding: 10px;
			/* box-shadow: 1px 1px 3px 0px gray; */
		}

		#parceiros .owl-carousel .owl-item:hover{
			transition: all 0.4s;
			box-shadow: 1px 1px 3px 0px gray;

		}

		#parceiros .owl-carousel .item{
			height: 100%;
			display: flex;
			align-items: center;
		}

		#parceiros .list{
			background-color: #333;
			box-shadow: 1px 1px 10px 1px #6c757d;
		}

		#quemsomos img{
			border-radius: 5px;
    		box-shadow: 1px 1px 10px 1px #adb5bd;
		}

		#quemsomos .img{
			/* height: 450px; */
		}
		

	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row">
			<nav class="navbar navbar-expand-md w-100  fixed-top">
				<a class="navbar-brand" href="#"><!-- <img src="assets/img/logo.png" style="height: auto; width: 150px"> --><h2 style="color: white">Logo</h2></a>
				<button style="display: none" class="btn btn-nav" type="button" onclick="openNav()">
					<i style="color: white" class="fas fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#"><div class="div-nav"></div>Home</a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#servicos"><div class="div-nav"></div>Notícias</a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#clientes"><div class="div-nav"></div>Imóveis</a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#quemsomos"><div class="div-nav"></div>Quem Somos <i class="fas fa-angle-down pt-1"></i></a>
						</li>
						<li class="nav-item position-relative px-1">
							<a class="nav-link scrollsuave" href="#contato"><div class="div-nav"></div>Mídia</a>
						</li>
					</ul>
				</div>
			</nav>
			<div id="mob-sidenav" class="sidenav">
			    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i style="font-size: 22px" class="fas fa-chevron-circle-right"></i></a>
			    <nav class="h-100" style="display: flex; align-items: center; justify-content: center;">
			        <ul class="navbar-nav w-100">
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#" href=""><div class="div-mob"></div>Home</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#quemsomos" href=""><div class="div-mob"></div>Quem Somos</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#servicos" href=""><div class="div-mob"></div>Serviços</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#clientes" href=""><div class="div-mob"></div>Clientes</a>
						</li>
						<li class="nav-item w-75 position-relative px-1">
							<a class="nav-link text-center scrollsuave" href="#contato" href=""><div class="div-mob"></div>Contato</a>
						</li>
					</ul>
			    </nav>
			</div>
		</div>
		<div class="row">
			<div id="banner" class="w-100" style="height: 100vh"></div>
		</div>
		<div id="quemsomos" class="row">
			<div class="col-lg-11 mx-auto mt-5 mb-2">
				<div class="row">
					<div class="col-lg-12 helper-align visible-desk">
						<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Quem Somos</h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
					<div class="col-lg-12 helper-align visible-mob">
						<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Quem Somos <i class="fas fa-stop div-block-rotate-2x"></i></h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
					<div class="col-lg-7 mt-4 my-lg-auto">
						<h2 class="featurette-heading">HRA <span class="text-muted">Brasil</span></h2>
						<p class="lead px-1">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
					</div>
					<div class="col-lg-5 mt-4 img">
						<a href="assets/img/img4.jpg" data-fancybox data-caption="Imagem">
							<img src="assets/img/img4.jpg" class="img-fluid ">
						</a>
					</div>
				</div>
			</div><div class="col-11 mx-auto"><hr class="my-1"></div>
		</div>
		<div id="noticias" class="row">
			<div class="col-lg-11 mx-auto mt-5 mb-3	">
				<div class="row">
					<div class="col-lg-7">
						<div class="row">
							<div class="col-lg-12 helper-align visible-desk">
								<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Notícias</h3>
								<div class="separator mt-1 helper-align"></div>
							</div>
							<div class="col-lg-12 helper-align visible-mob">
								<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Notícias <i class="fas fa-stop div-block-rotate-2x"></i></h3>
								<div class="separator mt-1 helper-align"></div>
							</div>
							<div class="col-lg-12 px-3 mt-3 carousel-news">
								<div id="myCarousel-news" class="carousel slide carousel-fade w-100" data-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active" style="background-image: url('assets/img/banner2.jpg');">
											<div class="caption pl-2 pt-2">
												Esta é uma breve descrição curta sobre a notícia acima informada... Clique e leia mais
												<div class="separator w-75"></div>
											</div>
										</div>
										<div class="carousel-item" style="background-image: url('assets/img/img1.jpg');">
											<div class="caption pl-2 pt-2">
												Esta é uma breve descrição curta sobre a notícia acima informada... Clique e leia mais
												<div class="separator w-75"></div>
											</div>
										</div>
										<div class="carousel-item" style="background-image: url('assets/img/img3.jpg');">
											<div class="caption pl-2 pt-2">
												Esta é uma breve descrição curta sobre a notícia acima informada... Clique e leia mais
												<div class="separator w-75"></div>
											</div>
										</div>
									</div>
								</div>
									
							</div>
						</div>
					</div>	
					<div class="col-12 text-center mt-3 suspension-points">
						<i class="fas fa-minus"></i>
					</div>
					<div class="col-lg-5">
						<div class="row">
							<div class="col-lg-12 px-1 pt-lg-5 list-news">
								<ul class="px-1">
									<a href="#">
										<li>	
											<b>1º</b> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore magni cum laboriosam soluta, temporibus neque veniam quis.
										</li>
										<hr class="my-1">
									</a>
									<a href="#">
										<li>	
											<b>2º</b> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore magni cum laboriosam soluta, temporibus neque veniam quis.
										</li>
										<hr class="my-1">
									</a>
									<a href="#">
										<li>	
											<b>3º</b> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore magni cum laboriosam soluta, temporibus neque veniam quis.
										</li>
										<hr class="my-1">
									</a>
									<a href="#">
										<li>	
											<b>3º</b> - Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore magni cum laboriosam soluta, temporibus neque veniam quis.
										</li>
										<hr class="my-1">
									</a>
									
								</ul>
							</div>
							<div class="col-lg-12 pr-5 my-4 text-right link-text">
								<a href="#">Mais notícias <i class="fas fa-angle-right pt-1"></i></a>
							</div>
						</div>
					</div>	
				</div>
			</div>										
		</div>
		<div id="contato" class="row paralax">
			<div class="col-lg-11 mx-auto py-5" style="min-height: 550px !important">
				<div class="row">
					<div class="col-lg-12 helper-align visible-desk">
						<h3 class="my-auto title"><i class="fas fa-stop div-block-rotate-2x"></i> Contato</h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
					<div class="col-lg-12 helper-align visible-mob">
						<h3 class="my-auto title"><i class="fas fa-stop div-block-rotate-2x"></i> Contato <i class="fas fa-stop div-block-rotate-2x"></i></h3>
						<div class="separator mt-1 helper-align"></div>
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
								<button style="margin-top: 48px;" type="submit" class="btn btn-dark btn-block">Enviar <i class="far fa-paper-plane"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="instagram" class="row">
			<div class="col-lg-11 mx-auto py-3">
				<div class="row">
					<div class="col-lg-12 helper-align visible-desk">
						<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Redes Socias</h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
					<div class="col-lg-12 helper-align visible-mob">
						<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Redes Socias <i class="fas fa-stop div-block-rotate-2x"></i></h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
					<div class="col-lg-12 px-0 px-lg-5 mt-3 "> 
						<iframe src="//lightwidget.com/widgets/3766dccb8ece5dc98a68ad03a0225dab.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
					</div>
				</div>
			</div>
			
		</div>
		<div id="parceiros" class="row">
			<div class="col-lg-11 mt-5 mx-auto">
				<div class="row">
					<div class="col-lg-12 helper-align visible-desk">
						<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Nossos Associados</h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
					<div class="col-lg-12 helper-align visible-mob">
						<h3 class="my-auto"><i class="fas fa-stop div-block-rotate-2x"></i> Nossos Associados <i class="fas fa-stop div-block-rotate-2x"></i></h3>
						<div class="separator mt-1 helper-align"></div>
					</div>
				</div>
			</div>	
			<div class="col-lg-12 my-3 pt-4 pb-5 list">
				<h1 class="text-center title mt-0 c-marron" style="font-size: 4rem;"><i class="far fa-handshake"></i></h1>
				<p class="text-center title mt-0">Estes são nossos fieis parceiros que nos ajudam a manter o projeto e impactar a sociedade !</p>
				<div class="owl-carousel owl-theme">
					<a href="assets/img/parceiro1.png" data-fancybox='galery' data-caption="Imagem">
						<div class="item">
							<img src="assets/img/parceiro1.png" width="50" class="mx-auto">
						</div>
					</a>
					
					<a href="assets/img/parceiro3.png" data-fancybox='galery' data-caption="Imagem">
						<div class="item">
							<img src="assets/img/parceiro3.png" width="50" class="mx-auto">
						</div>
					</a>
					<a href="assets/img/parceiro4.png" data-fancybox='galery' data-caption="Imagem">
						<div class="item">
							<img src="assets/img/parceiro4.png" width="50" class="mx-auto">
						</div>
					</a>
					<a href="assets/img/parceiro2.png" data-fancybox='galery' data-caption="Imagem">
						<div class="item">
							<img src="assets/img/parceiro2.png" width="50" class="mx-auto">
						</div>
					</a>
				</div>	
			</div>	
		</div>
		<!-- 
		<div id="servicos" class="row services" style="min-height: 450px;">
			<div class="col-lg-10 mx-auto py-5">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="text-center">Planos & Preços</h2>
						<p class="text-center title">Os melhores planos para você cuidar da sua beleza e se entreter.</p>
					</div>
					<div class="col-lg-6 plans">
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Children Haircut</h6>
							</div>
							<div class="col-3 price">$29.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Beard Cut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
					</div>
					<div class="col-lg-6 plans">
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Children Haircut</h6>
							</div>
							<div class="col-3 price">$29.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Beard Cut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
						<div class="row my-3">
							<div class="col-9 text">
								<h6>Men's Haircut</h6>
							</div>
							<div class="col-3 price">$20.00</div>
							<div class="col-12"><p>A small river named Duden flows by their place and supplies</p></div>
						</div>
					</div>
					<div class="col-11 mt-1 mx-auto">
						<h6 class="text-right"><a href="https://api.whatsapp.com/send?phone=5588997283474" target="_blank" style="text-decoration: underline !important; color: #ce9c6b"><i style="font-size: 25px" class="fab fa-whatsapp"></i> Agende pelo Whatsapp</a></h6>
					</div>		
				</div>
			</div>	
		</div>
		 -->
		<div class="row">
			<div class="col-lg-12" style="min-height: 350px; background-color: #222; box-shadow: 2px 0px 5px #e9ecef; color: white">
				<div class="row" style="min-height: 300px">
					<div class="col-lg-3 px-4 py-5">
						<div class="logo text-center">
							<!-- <img  src="assets/img/logo.png" width="150" height="90" class="img-fluid"> -->
							<h1>Logo</h1>
						</div>
						
						<p class="text-justify text-muted-footer mt-0" style="font-weight: 500">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="col-lg-2 py-5 px-4 ">
						<h4>Menu</h4>
						<div class="mt-4 pl-1 text-left">
							<p><a href="#"  class="text-muted-footer menus">Home</a></p>
							<p><a href="#"  class="text-muted-footer menus">Quem Somos</a></p>
							<p><a href="#"  class="text-muted-footer menus">Manifesto</a></p>
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
							<div class="">
								<a href="#" target="_blank" class="mr-3 instagram"><i style="font-size: 25px" class="fab fa-instagram"></i></a> 
								<a href="#" target="_blank" class="mr-3 whatsapp"><i style="font-size: 25px" class="fab fa-whatsapp"></i></a> 
								<a href="#" target="_blank" class="linkedin"><i style="font-size: 25px"class="fab fa-linkedin"></i></a>
							</div>

						</div>
					</div>
				</div>	
				<div class="row" style="height: 50px;">
					<div class="col-lg-12" style="display: flex;background-color: #09090963;align-items: center; justify-content: center;">
						<p class="text-center mb-0" style="align-items: center;color: white">Copyright © Todos os direitos reservados.</p>
					</div>
				</div>
				
			</div>
		</div>
		<button id="myBtn" class="btn" onclick="topFunction()"><i style="color: white" class="fas fa-chevron-up"></i></button>

	</div>  
	<!-- Modal Upload	 -->
	<div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Envio de Foto</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="form-img" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group mb-0">
							<div class="input-group mb-0">
								<input type="file" name="img[]" class="file-img d-none">
								<input type="text" class="form-control browse-input-img" placeholder="Escolha uma foto.." required="">
								<div class="input-group-append">
									<button  class="browse-img btn btn-dark btn-sm" type="button"><i class="glyphicon glyphicon-search"></i>Buscar <i class="fas fa-cloud-upload-alt"></i></button>
								</div>
							</div>
						</div>
						<p class="mt-1" style="font-size: 14px"><b>Atenção</b> ! Apenas extensões <b>*jpg</b>, <b>*jpeg</b>.</p>
						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-sm" style="background-color: #ce9c6b ;color: white">Enviar Foto</button>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script src="assets/bootstrap/js/bootstrap.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/plugins/mask/jquery.mask.js"></script>
	<script src="assets/plugins/fancybox/jquery.fancybox.js"></script>
	<script src="assets/plugins/fontawesome/js/all.js"></script>
	<script src="assets/plugins/owl-carousel/js/owl.carousel.js"></script>
	<script type="text/javascript">
	
		

		$('.owl-carousel').owlCarousel({
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
		            autoplay:true,
			    	autoplayTimeout:3300,
			    	autoplayHoverPause:true,
		        },
		        600:{
		            items:3,
		            autoplay:true,
			    	autoplayTimeout:3000,
			    	autoplayHoverPause:true,
		        },
		        1000:{
		            items:4,
		            autoplay:true,
			    	autoplayTimeout:3000,
			    	autoplayHoverPause:true,
		        }
		    }
		})



		
	
  	</script>
</body>
</html>









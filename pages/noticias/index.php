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
	<script src="../../assets/js/jquery.js"></script>
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
		}

		@media screen and (min-width: 992px) {
			.visible-mob{
				display: none;
			}

			.visible-desk{
				display: block;
			}

		}
		
		#banner{
			background: rgb(61,59,90);
			background: linear-gradient(0deg, rgba(61,59,90,1) 0%, rgba(30,29,71,1) 28%, rgba(19,18,65,1) 38%, rgba(8,7,58,1) 62%, rgba(4,3,56,1) 86%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
		}
		
        .nav-bar{
            background-color: #040338 !important;
        }

        .contato {
            background: rgb(61,59,90);
            background: linear-gradient(0deg, rgba(61,59,90,1) 0%, rgba(30,29,71,1) 28%, rgba(19,18,65,1) 38%, rgba(8,7,58,1) 62%, rgba(4,3,56,1) 86%);
            border-radius: 15px;
            box-shadow: 0 1px 6px 0 rgba(32, 33, 36, .28);
            height: 100%;
        }

        .card-news{
            height: 200px;
        }

        .blue-gray{
            color: white;
            background: rgb(61,59,90);
            background: linear-gradient(0deg, rgba(61,59,90,1) 0%, rgba(30,29,71,1) 28%, rgba(19,18,65,1) 38%, rgba(8,7,58,1) 62%, rgba(4,3,56,1) 86%);
        }
	</style>
</head>
<body>
	<div class="container-fluid fadeIn">
		<div class="row">
			<nav class="navbar navbar-expand-md w-100 fixed-top">
				<a class="navbar-brand" href="#"><!-- <img src="../../assets/img/logo.png" style="height: auto; width: 150px"> --><h2 style="color: white">Logo</h2></a>
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
		<div class="row py-5">
			<div class="col-lg-11 mx-auto px-5" style="margin-top: 8rem;">
                <div class="row">
                    <div class="col-lg-7" style="height: 450px;">
                        <div class="contato"></div>
                    </div>
                    <div class="col-lg-5 visible-desk">
                        <div class="row">
                            <div class="col-lg-12 contato" style="height: 224px; margin-bottom: 2px;">
                                <div class="contato"></div>
                            </div>
                            <div class="col-lg-12 contato" style="height: 224px;">
                                <div class="contato"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="contato mb-2 card-news"></div>
                        <div class="contato mb-2 card-news"></div>
                        <div class="contato mb-2 card-news"></div>
                        <div class="contato mb-2 card-news"></div>
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-block blue-gray">Ver mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 visible-desk">
                        <div class="card card-success">
                            <div class="card-header">
                                <h5>Em alta</h5>
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="min-height: 350px; background-color: #222; box-shadow: 2px 0px 5px #e9ecef; color: white">
				<div class="row" style="min-height: 300px">
					<div class="col-lg-3 px-4 py-5">
						<div class="logo text-center">
							<!-- <img  src="../../assets/img/logo.png" width="150" height="90" class="img-fluid"> -->
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
	
	<script src="../../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/main.js"></script>
	<script src="../../assets/plugins/mask/jquery.mask.js"></script>
	<script src="../../assets/plugins/fancybox/jquery.fancybox.js"></script>
	<script src="../../assets/plugins/fontawesome/js/all.js"></script>
</body>
</html>









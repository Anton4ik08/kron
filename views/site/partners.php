<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="template/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="template/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="template/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="template/img/favicon/apple-touch-icon-114x114.png">

	<!-- Bootstrap min CSS -->
	<link rel="stylesheet" href="template/libs/bootstrap%203.3.7/css/bootstrap.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="template/css/partners.css">
	<title>Партнеры</title>
        <!-- JS-->
        <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
        <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [54.98, 82.89],
                    zoom: 13
                });
            });
        </script>
</head>
<body style="background: url(template/img/base_background.jpg);">

<header class="header">
	<div class="container-fluid">
		<div class="header_content">
			<div class="row">

				<div class="header-left">
					<div class="header_account clearfix">
                                            <?php if(User::isGuest()): ?>
						<!-- login -->
						<div class="header_account_login hidden-xs" >
							<div class="btn-group-xs">
                                                            <a href="/distributor" class="btn btn-defo"  data-target="#login"><!--data-toggle="modal"-->
									ВХОД
                                                                </a>
								<span>или</span>
                                                                <a href="/distributorRegistr" class="btn btn-defo"  data-target="#registration"><!--data-toggle="modal"-->
									СОЗДАТЬ АККАУНТ
                                                                </a>
							</div><!-- .btn-group-xs -->
						</div><!-- .header_account_login -->
                                            <?php else: ?>
						<!-- for login -->
						<div class="header_account_img hidden-xs" style="background: url(template/img/header/your_photo.jpg) center; display: none;">
						</div><!-- .header_account_img -->

						<!-- for user -->
						<div class="header_account_img" style="background: url(<?php echo Category::getImages($dateUser['id']);?>) center; background-size:cover; display: block;">
							<!-- duplication link for user link ЛИЧНЫЙ КАБИНЕТ -->
							<a href="#"></a>
						</div><!-- .header_account_img -->

						<!-- button for mobile login -->
						<div class="header_account_hide" style="display: none;">
							<button class="btn h3" data-toggle="modal" data-target="#login">
								вход
							</button>
						</div><!-- .header_account_hide -->
                                                <!-- user -->
						<div class="header_account_user text-right hidden-xs" style="display: block;">
							<p class="user text-left">
								<?php echo $dateUser['name']; ?>
								<br>
								
							</p>
							<a href="profile" class="btn btn-defo btn-xs">
								ЛИЧНЫЙ КАБИНЕТ
							</a>
                                                        </p>
							<a href="user/logout" class="btn btn-defo btn-xs">
								ВЫЙТИ
							</a>
						</div><!-- .header_account_user -->

<!--						<form action="#" method="get" class="hidden-xs">
							<div class="input-group input-group-sm">
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</span>
							</div> /input-group 
						</form>-->
                                            <?php endif; ?>
					</div><!-- .header_account -->

					<div class="header_kron hidden-xs">
<!--						<p class="header_kron_text">
							• car • ship • food • service •
						</p>-->
						<h1 class="header_kron_head">
							<a href="/">
								KRON
							</a>
						</h1>
					</div><!-- .header_kron -->
				</div><!-- .header-left -->

				<div class="header-right">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
											data-target="#kron-navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><!-- .navbar-header -->

						<div class="collapse navbar-collapse" id="kron-navbar-collapse">
							<ul class="nav nav-pills nav-stacked">
                                                            <?php foreach ($categories as $categoryItem): ?>
								<li>
                                                                    <a href="<?php echo $categoryItem['sort_order']; ?>"
                                                                         id="<?php if($idCategory == $categoryItem['id']) echo'active';?>">
                                                                       <?php echo $categoryItem['name']; ?>
                                                                    </a>
                                                                </li>
                                                                <?php endforeach;?>
                                                                 
							</ul><!-- .nav -->
						</div><!-- .collapse -->
					</nav>
				</div><!-- .header-right -->

				<!-- button for mobile .header-center toggle -->
				<div class="header-center-toggle text-center visible-xs">
					<button id="service" class="btn h3">
						О сервисе
					</button>
				</div><!-- .header-center-toggle -->

				<div class="header-center">
					<div class="header_about" style="background: url(template/img/base_background.jpg);">
						<p class="header_about_title text-right">
							Приятного пользования!
							<span>АДМИНИСТРАЦИЯ</span>
						</p>

						<div class="header_about_text block-line">
							<h3 class="h3">
								КАЖДАЯ МИНУТА НА СЧЕТУ
							</h3>
							<p class="lead text-justify">
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							</p>
						</div><!-- .header_about_text -->

						<div class="header_about_button">
							<a href="#" type="button" class="h4">
								KRON AUTO
							</a>
							<a href="#" type="button" class="h4">
								KRON SHIP
							</a>
							<a href="#" type="button" class="h4">
								KRON FOOD
							</a>
						</div><!-- .header_about_button -->
					</div><!-- .header_about -->
				</div><!-- .header-center -->

			</div><!-- .row -->
		</div><!-- .header_content -->
	</div><!-- .container-fluid -->
</header>

<div class="team-partners">
	<div class="container-fluid">
		<div class="team-partners_box" style="background: url(template/img/partners/kronTeamFon.jpg) center;">
			<div class="team-partners_text">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<p class="lead text-justify">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст Текст Текст Текст Текст Текст
						</p>
						<h3 class="text-right">
							KRON team
						</h3>
					</div>
				</div><!-- .row -->
			</div>
		</div>
	</div>
</div><!-- .team -->

<div class="registration">
	<div class="container-fluid">
		<div class="registration_content">
			<div class="row">
				<div class="registration_head col-md-8 col-sm-7">
					<h3 class="h3">
						Текст Текст Текст Те
					</h3>
					<p class="lead">
						Текст текст текст текст текст текст т
					</p>
				</div><!-- .registration_head -->

				<div class="col-md-4 col-sm-5">
					<div class="registration_btn">
						<div>
							<p class="text-center text-uppercase">
								ОДНИМ КАСАНИЕМ
								<br><span>НАЧАТЬ</span>
							</p>
							<button class="btn btn-defo text-uppercase" data-toggle="modal" data-target="#registration">
								РЕГИСТРАЦИЮ
								<br><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
							</button>
						</div>
					</div><!-- .registration_btn -->
				</div>
			</div><!-- .row -->

			<div class="row">
				<div class="registration_leadText col-md-4">
					<h4 class="block-line text-center">
						ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ
					</h4>
					<p>
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст
					</p>
				</div>

				<div class="registration_leadText col-md-4">
					<h4 class="block-line text-center">
						ТЕКСТ ТЕКСТ ТЕКСТ
					</h4>
					<p>
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
					</p>
				</div>

				<div class="registration_leadText col-md-4">
					<h4 class="block-line text-center">
						ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ
					</h4>
					<p>
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст
					</p>
				</div>
			</div><!-- .row -->

			<div class="registration_text">
				<div class="row">
					<div class="registration_text_title col-sm-8">
						<div class="row">
							<div class="col-md-6 col-sm-7">
								<h4 class="h4 text-center">
									Текст Текст Текст
								</h4>
								<p>
									Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
								</p>
							</div>
						</div><!-- .row -->
					</div><!-- .registration_text_title -->
				</div><!-- .row -->

				<div class="row">
					<div class="col-md-4">
						<div class="registration_text_step clearfix">
							<span>1</span>
							<p>
								Ваше отношение к курению?
							</p>
							<div class="radio">
								<label>
									<input name="smoke" id="smoke1" value="option1" type="radio"> нейтральное
								</label>
							</div>
							<div class="radio">
								<label>
									<input name="smoke" id="smoke2" value="option2" checked="" type="radio"> положительное
								</label>
							</div>
							<div class="radio">
								<label>
									<input name="smoke" id="smoke3" value="option3" type="radio"> отрицательное
								</label>
							</div>
						</div><!-- .registration_text_step -->
						<h4 class="h4">
							ПРОЙДИТЕ РЕГИСТРАЦИЮ
						</h4>
						<p class="block-line-md text-justify">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст
						</p>
					</div><!-- .col-md-4 -->

					<div class="col-md-4 step2">
						<div class="registration_text_step clearfix">
							<span>2</span>
							<p class="text-justify">
								Скан (фотографию) Вашего паспорта:
								<button class="btn btn-default btn-xs" name="password" data-toggle="modal" data-target="#inputFile">
									загрузить документ
								</button>
							</p>
							<p class="text-justify">
								Скан (фотографию) Вашей страховки:
								<button class="btn btn-default btn-xs" name="insurance" data-toggle="modal" data-target="#inputFile">
									загрузить документ
								</button>
							</p>
						</div><!-- .registration_text_step -->
						<div>
							<h4 class="h4">
								БЕЗОПАСНОСТЬ ПРЕЖДЕ ВСЕГО
							</h4>
							<p class="block-line-md text-justify">
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
								Текст
								Текст Текст Текст Текст Текст Текст Текст
							</p>
						</div>
					</div><!-- .col-md-4 -->

					<div class="col-md-4">
						<div class="registration_text_step clearfix">
							<span>3</span>
							<div class="text-justify step3">
								<h5 class="h5">
									СПАСИБО ЗА РЕГИСТРАЦИЮ!
								</h5>
								<p>
									письмо с подтверждением вы получите на вашу электронную почту!
									<a href="template/#">проверить сейчас</a>
								</p>
							</div>
						</div><!-- .registration_text_step -->
						<h4 class="h4">
							ЗАКОНЧИТЬ РЕГИСТРАЦИЮ
						</h4>
						<p class="block-line-md text-justify insertion">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст
						</p>
						<h4 class="h4 insertion">
							УСТАНОВИТЬ ПРИЛОЖЕНИЕ
						</h4>
					</div><!-- .col-md-4 -->
				</div><!-- .row -->
			</div><!-- .registration_text -->

			<div class="registration_line">
				<div class="registration_line_btn">
					<button class="auto_line_btn_search btn btn-defo btn-xs">
						СТАТЬ ПАРТНЕРОМ KRON
					</button>
					<span>или</span>
					<button class="registration_line_btn_question btn btn-blue btn-xs" data-toggle="modal" data-target="#question">
						ЗАДАТЬ ВОПРОС
					</button>
				</div><!-- .registration_line_btn -->

				<div class="registration_line_img hidden-xs">
					<img src="template/img/customers/auto/auto.png" alt="alt" class="img-responsive">
				</div>

				<div class="registration_line_caption">
					<h3 class="h3">KRON <span>AUTO</span></h3>
				</div><!-- .registration_line_img -->
			</div><!-- .registration_line -->

		</div><!-- .registration_content -->
	</div>
</div><!-- .registration -->

<div class="partnerShip">
	<div class="container-fluid">

		<div class="partnerShip_content block-line-lg">
			<div class="row">
				<div class="col-md-6">
					<img src="template/img/partners/partnerShip/photo.jpg" alt="partnerShip photo"
							 class="img-responsive partnerShip_content_img">

					<div class="partnerShip_text clearfix">
						<span>1</span>
						<h4 class="h4">
							ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ
						</h4>
						<p class="block-line-md text-justify">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						</p>
					</div><!-- .partnerShip_text -->
					<div class="partnerShip_text">
						<span>2</span>
						<h4 class="h4">
							ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ
						</h4>
						<p class="block-line-md text-justify">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						</p>
					</div><!-- .partnerShip_text -->
					<div class="partnerShip_text">
						<span>3</span>
						<h4 class="h4">
							ТЕКСТ ТЕКСТ ТЕКСТ ТЕКСТ
						</h4>
						<p class="block-line-md text-justify">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						</p>
					</div><!-- .partnerShip_text -->
				</div><!-- .col-md-6 -->

				<div class="col-md-6">
					<div class="partnerShip_lead">
						<h3 class="h3">
							ТЕКСТ ТЕКСТ ТЕКСТ ТЕК
						</h3>
						<p class="partnerShip_lead_head">
							Текст текст текст текст текст текст
						</p>
						<p class="lead text-justify">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст Текст Текст
						</p>
						<p class="text-center selected">
							Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							Текст
							Текст Текст Текст Текст
						</p>
					</div><!-- .partnerShip_lead -->

					<!-- slider -->
					<div id="carousel-partnerShip" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-partnerShip" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-partnerShip" data-slide-to="1" class=""></li>
							<li data-target="#carousel-partnerShip" data-slide-to="2" class=""></li>
							<li data-target="#carousel-partnerShip" data-slide-to="3" class=""></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active clearfix">
								<div class="carousel_img hidden-xs"
										 style="background: url(template/img/partners/partnerShip/slide1.png) no-repeat center; -webkit-background-size: contain;background-size: contain;">
								</div>
								<div class="carousel_text block-line-sm">
									<h5 class="h5 text-center">
										Текст Текст Текст Текст
									</h5>
									<p class="text-justify">
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст
									</p>
								</div>
							</div><!-- .item -->

							<div class="item clearfix">
								<div class="carousel_img hidden-xs"
										 style="background: url(template/img/partners/partnerShip/slide2.png) no-repeat center; -webkit-background-size: contain;background-size: contain;">
								</div>
								<div class="carousel_text block-line-sm">
									<h5 class="h5 text-center">
										Текст Текст Текст Текст
									</h5>
									<p class="text-justify">
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст
									</p>
								</div>
							</div><!-- .item -->

							<div class="item clearfix">
								<div class="carousel_img hidden-xs"
										 style="background: url(template/img/partners/partnerShip/slide3.png) no-repeat center; -webkit-background-size: contain;background-size: contain;">
								</div>
								<div class="carousel_text block-line-sm">
									<h5 class="h5 text-center">
										Текст Текст
									</h5>
									<p class="text-justify">
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст Текст Текст Текст Текст Текст Текст Текст
									</p>
								</div>
							</div><!-- .item -->

							<div class="item clearfix">
								<div class="carousel_img hidden-xs"
										 style="background: url(template/img/partners/partnerShip/slide4.png) no-repeat center; -webkit-background-size: contain;background-size: contain;">
								</div>
								<div class="carousel_text block-line-sm">
									<h5 class="h5 text-center">
										Текст Текст
									</h5>
									<p class="text-justify">
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
										Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
									</p>
								</div>
							</div><!-- .item -->

						</div><!-- .carousel-inner -->

						<!-- Controls -->
						<a class="left carousel-control" href="template/#carousel-partnerShip" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="template/#carousel-partnerShip" role="button" data-slide="next">
							<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>

				</div><!-- .col-md-6 -->

				<div class="partnerShip_line col-xs-12">
					<div class="partnerShip_line_btn">
						<button class="partnerShip_line_btn_search btn btn-defo btn-xs">
							НАЧАТЬ ОТПРАВКУ
						</button>
						<span>или</span>
						<button class="partnerShip_line_btn_question btn btn-blue btn-xs" data-toggle="modal" data-target="#question">
							ЗАДАТЬ ВОПРОС
						</button>
					</div><!-- .partnerShip_line_btn -->

					<div class="partnerShip_line_caption">
						<h3 class="h3">KRON <span>SHIP</span></h3>
					</div>

					<div class="partnerShip_line_img hidden-xs">
						<img src="template/img/customers/ship/ship_auto.png" alt="alt" class="img-responsive">
					</div><!-- .partnerShip_line_img -->
				</div><!-- .partnerShip_line -->

			</div><!-- .row -->
		</div><!-- .partnerShip_content -->
	</div><!-- .container-fluid -->
</div><!-- .partnerShip -->

<div class="partnerFood">
	<div class="container-fluid">

		<div class="partnerFood_content block-line-lg">
			<div class="row">
				<div class="col-md-6">
					<h4 class="h4 partnerFood_title text-center">
						текст текст текст текст
					</h4>

					<h3 class="partnerFood_content_head">
						Текст Текст Текст Текст Текст Текст
					</h3>
					<p class="partnerFood_text">
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
						Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
					</p>
				</div><!-- .col-md-6 -->

				<div class="col-md-6">
					<img src="template/img/partners/partnerFood/photo.jpg" alt="photo" class="partnerFood_content_img img-responsive">

					<p class="partnerFood_selected">
						ТЕКСТ ТЕКСТ ТЕКСТ
						<span>
							Текст текст текст тексттекст
						</span>
					</p>
				</div><!-- .col-md-6 -->
			</div><!-- .row -->

			<div class="row">
				<div class="col-md-6">
					<div class="partnerFood_item row">
						<div class="col-sm-3 partnerFood_item_icon">
							<img src="template/img/partners/partnerFood/mobile.png" alt="icon" class="img-responsive hidden-xs">
						</div>
						<div class="col-sm-9">
							<h4>
								Tекст Текст Текст Текст ТекстТекстТекст ТекстТекст
							</h4>
							<p class="partnerFood_text block-line-md">
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							</p>
						</div>
					</div><!-- .partnerFood_text_item -->

					<div class="partnerFood_item row">
						<div class="col-sm-3 partnerFood_item_icon">
							<img src="template/img/partners/partnerFood/user.png" alt="icon" class="img-responsive hidden-xs">
						</div>
						<div class="col-sm-9">
							<h4>
								Текст ТекстТекстТекстТекст
							</h4>
							<p class="partnerFood_text block-line-md">
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							</p>
						</div>
					</div><!-- .partnerFood_text_item -->
				</div><!-- .col-md-6 -->

				<div class="col-md-6">
					<div class="partnerFood_item row">
						<div class="col-sm-3 partnerFood_item_icon">
							<img src="template/img/partners/partnerFood/question.png" alt="icon" class="img-responsive hidden-xs">
						</div>
						<div class="col-sm-9">
							<h4>
								Текст Текст Текст Текст Текст Текст Текст Текст
							</h4>
							<p class="partnerFood_text block-line-md">
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
								Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
							</p>
						</div>
					</div><!-- .partnerFood_text_item -->

					<div class="partnerFood_form">
						<h4 class="partnerFood_form_title h4">
							KRON FOOD
						</h4>

						<div class="insetForm">
							<form action="#" method="post">

								<div class="insetForm_left">
									<label for="check1" class="insetForm_left_label">
										<input type="radio" id="check1" name="check" class="insetForm_left_checkbox" checked="checked">
										<span class="insetForm_left_checkbox_square"></span>
										<span class="insetForm_left_checkbox_text">КЛИЕНТ</span>
									</label>
									<label for="check2" class="insetForm_left_label">
										<input type="radio" id="check2" name="check" class="insetForm_left_checkbox">
										<span class="insetForm_left_checkbox_square"></span>
										<span class="insetForm_left_checkbox_text">ПАРТНЕР</span>
									</label>
								</div><!-- .insetForm_left -->

								<div class="insetForm_right">
									<input type="text" placeholder="_________ваше имя_________" name="userName" required>
									<input type="email" placeholder="_________ваш e-mail________" name="userEmail" required>
									<p class="insetForm_right_footnote">
										* Подробности вы&nbsp;получите на&nbsp;Ваш
										<nobr>e-mail</nobr>
									</p>
									<button type="submit" class="btn btn-defo">
										Отправить
									</button>
								</div><!-- .insetForm_right -->

							</form>
						</div><!-- .insetForm -->
					</div><!-- .partnerFood_form -->
				</div><!-- .col-md-6 -->

				<div class="partnerFood_line col-xs-12">

					<div class="partnerFood_line_btn">
						<button class="partnerFood_line_btn_search btn btn-defo btn-xs">
							СТАТЬ ПАРТНЕРОМ KRON
						</button>
						<span>или</span>
						<button class="partnerFood_line_btn_question btn btn-blue btn-xs" data-toggle="modal" data-target="#question">
							ЗАДАТЬ ВОПРОС
						</button>
					</div><!-- .partnerFood_line_btn -->

					<div class="partnerFood_line_img hidden-xs">
						<img src="template/img/customers/food/food_moto.png" alt="alt" class="img-responsive">
					</div>

					<div class="partnerFood_line_caption">
						<h3 class="h3">KRON <span>food</span></h3>
					</div>

				</div><!-- .partnerFood_line -->
			</div><!-- .row -->
		</div><!-- .partnerFood_content -->

	</div><!-- .container-fluid -->
</div><!-- .partnerFood -->

<div class="cooperation">
	<div class="container-fluid">
		<div class="cooperation_content block-line-lg">

			<h4 class="cooperation_title h4 text-right">
				сотрудничество вместе с KRON
			</h4>

			<h3 class="cooperation_head text-right clear">
				Вместе с&nbsp;Вами мы&nbsp;будем в&nbsp;каждом городе!
			</h3>

			<div class="row">
				<div class="cooperation_map col-sm-10 col-sm-offset-1">
					<div class="cooperation_map-down">
						<div id="map" style="width:1100px; height:600px"></div>
					</div><!-- .cooperation_map-down -->
				</div><!-- .cooperation_map -->
			</div><!-- .row -->

			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<div class="cooperation_representation">
						<p class="cooperation_representation_head">
							Представительства <span>KRON</span>:
						</p>

						<div class="cooperation_townSelect">
							<p>
								Найти свой город
							</p>
							<select class="form-control input-sm" name="town">
								<option>Санкт-Петербург</option>
								<option>Москва</option>
								<option>Барнаул</option>
								<option>Курск</option>
								<option>Владивосток</option>
							</select>
						</div><!-- .cooperation_townSelect -->
					</div><!-- .cooperation_representation -->
				</div>

				<div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0">
					<p class="cooperation_form-head text-justify">
						Хотите стать партнером <span>KRON</span> и&nbsp;развивать сервис в&nbsp;своем регионе? Это возможно!
						Отправьте свои контакты и&nbsp;мы&nbsp;вами напишем как это сделать!
					</p>
					<div class="cooperation_form text-justify">
						<p class="cooperation_form_text">
							Мы&nbsp;заботимся о&nbsp;Вашем бизнесе, поэтому в&nbsp;одном городе может быть только один наш
							представитель. Торопитесь! Мы&nbsp;открыты к&nbsp;сотрудничеству с&nbsp;Вами.
						</p>

						<form class="form-inline" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="InputName" placeholder="_________введите имя_________" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="InputEmail"
											 placeholder="________введите e-mail________" required>
							</div>
							<button type="submit" name="submit" class="btn btn-defo">
								ОТПРАВИТЬ
							</button>
						</form>

					</div><!-- .cooperation_form -->
				</div>
			</div><!-- .row -->
		</div><!-- .cooperation_content -->
	</div><!-- .container-fluid -->
</div><!-- .cooperation -->

<footer class="footer">
	<div class="container-fluid">
		<div class="footer_content">

			<div class="row">
				<div class="col-xs-12">
					<div class="footer_title">
						<h4 class="h4">
							СВЯЗАТЬСЯ С НАМИ
						</h4>
					</div><!-- .footer_title -->
				</div>

				<div class="col-md-3 col-sm-4">
					<div class="footer_products">
						<h3 class="footer_products_head">
							OUR PRODUCTS
						</h3>
						<ul class="list-unstyled">
							<li class="footer_products_item clearfix">
								<a href="template/#">
									<i class="icon icon-icon1"></i>
									<span class="text">KRON AUTO</span>
								</a>
							</li>
							<li class="footer_products_item clearfix">
								<a href="template/#">
									<i class="icon icon-icon2"></i>
									<span class="text">KRON SHIP</span>
								</a>
							</li>
							<li class="footer_products_item clearfix">
								<a href="template/#">
									<i class="icon icon-icon3"></i>
									<span class="text">KRON FOOD</span>
								</a>
							</li>
						</ul>
					</div><!-- .footer_products -->
				</div>

				<div class="col-md-2 col-sm-3">
					<div class="footer_company">
						<h3 class="footer_company_head">
							КОМПАНИЯ
						</h3>
						<ul class="list-unstyled">
							<li class="footer_company_item"><a href="template/#">
								О СЕРВИСЕ
							</a></li>
							<li class="footer_company_item"><a href="template/#">
								КЛИЕНТАМ
							</a></li>
							<li class="footer_company_item"><a href="template/#">
								ПАРТНЕРАМ
							</a></li>
							<li class="footer_company_item"><a href="template/#">
								НОВОСТИ
							</a></li>
							<li class="footer_company_item"><a href="template/#">
								ДОКУМЕНТЫ
							</a></li>
							<li class="footer_company_item"><a href="template/#">
								FAQ
							</a></li>
							<li class="footer_company_item"><a href="template/#">
								КОНТАКТЫ
							</a></li>
						</ul>
					</div><!-- .footer_company -->
				</div>

				<div class="col-md-4 col-md-push-3 col-sm-5 col-xs-12">
					<div class="footer_social">
						<h3 class="footer_social_head">
							ОСТАВАТЬСЯ НА&nbsp;СВЯЗИ
						</h3>
						<div class="row">
							<div class="col-sm-6 footer_social_item">
								<a href="template/#">
									<i class="icon icon-icon-vk"></i>
									<span class="text">
										В контакте
									</span>
								</a>
							</div>

							<div class="col-sm-6 footer_social_item">
								<a href="template/#">
									<i class="icon icon-icon-tw"></i>
									<span class="text">
										Twitter
									</span>
								</a>
							</div>

							<div class="col-sm-6 footer_social_item">
								<a href="template/#">
									<i class="icon icon-icon-fb"></i>
									<span class="text">
										Facebook
									</span>
								</a>
							</div>

							<div class="col-sm-6 footer_social_item">
								<a href="template/#">
									<i class="icon icon-icon-in"></i>
									<span class="text">
										Linkedin
									</span>
								</a>
							</div>

							<div class="col-sm-6 footer_social_item">
								<a href="template/#">
									<i class="icon icon-icon-ggl"></i>
									<span class="text">
										Google +
									</span>
								</a>
							</div>

							<div class="col-sm-6 footer_social_item">
								<a href="template/#">
									<i class="icon icon-icon-ig"></i>
									<span class="text">
										Instagram
									</span>
								</a>
							</div>
						</div><!-- .row -->
					</div><!-- .footer_social -->
				</div>

				<div class="footer_clock col-md-3 col-md-pull-4 visible-lg visible-md">
					<img src="template/img/footer/clock.png" alt="clock" class="img-responsive">
				</div><!-- .footer_clock -->

			</div><!-- .row -->

			<div class="row">
				<div class="footer_line-bottom">
					<div class="col-sm-5">
						<a href="template/#" class="footer_kron">
							KRON
						</a><!-- .footer_kron -->
					</div>

					<div class="footer_app text-center col-sm-3">
						<h5>
							<span>KRON</span> для клиентов
						</h5>
						<div class="footer_app_link">
							<a href="template/#">
								<img src="template/img/footer/button_apple.gif" alt="apple store" class="img-responsive">
							</a>

							<a href="template/#">
								<img src="template/img/footer/button_google.gif" alt="google play" class="img-responsive">
							</a>
						</div><!-- .footer_app_link -->
					</div><!-- .footer_app -->

					<div class="col-sm-4">
						<div class="footer_cooperation">
							<p>
								мы готовы к&nbsp;сотрудничеству!
							</p>
							<ul class="footer_cooperation_link ">
								<li><a href="template/#">
									РАБОТА
								</a></li>
								<li><a href="template/#">
									РЕКЛАМА
								</a></li>
								<li><a href="template/#">
									РАЗВИТИЕ
								</a></li>
								<li><a href="template/#">
									ИНВЕСТОРАМ
								</a></li>
							</ul>
						</div><!-- .footer_cooperation -->
					</div>
				</div><!-- .footer_line-bottom -->
			</div><!-- .row -->

			<div class="footer_bottom">
				<div class="row">
					<div class="col-lg-5 col-md-4">
						<p class="footer_bottom_copy">
							&copy; 2017 <a href="template/#">Merkury</a>, ltd Все&nbsp;права&nbsp;защищены
						</p>
					</div>

					<div class="col-lg-5 col-md-5">
						<ul class="footer_bottom_link">
							<li><a href="template/#">
								условия использования
							</a></li>
							<li><a href="template/#">
								privacy policy
							</a></li>
							<li><a href="template/#">
								карта сайта
							</a></li>
						</ul>
					</div>

					<div class="col-lg-2 col-md-3">
						<select name="translate" id="translate" class="footer_translate">
							<option disabled selected>SELECT LENGUAGE</option>
							<option value="ru">русский</option>
							<option value="en">english</option>
						</select>
					</div>

				</div><!-- .row -->
			</div><!-- .footer_bottom -->

		</div><!-- .footer_content -->
	</div><!-- .container-fluid -->
</footer>

<!-- **** Modal blocks **** -->
<!-- registering -->
<div class="modal" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">РЕГИСТРАЦИЯ KRON</h4>
			</div>
			<div class="modal-body text-center">
				<form action="#" method="post" name="registration" class="form-horizontal">

					<input type="radio" name="user" value="klient" id="user1" checked>
					<label for="user1">Я КЛИЕНТ</label>

					<input type="radio" name="user" value="partner" id="user2">
					<label for="user2">Я ПАРТНЕР</label>

					<p class="form_text">
						Есть аккаунт KRON?
						<a href="template/javascript:void(0);" data-toggle="modal" data-target="#login" data-dismiss="modal">
							Вход
						</a>
					</p>

					<div class="form-group">
						<label for="inputName" class="col-sm-6 control-label">ВАШЕ ИМЯ</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="inputName" id="inputName" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputPhone" class="col-sm-6 control-label">ВАШ ТЕЛЕФОН</label>
						<div class="col-sm-6">
							<input type="tel" class="form-control" name="inputPhone" id="inputPhone" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail" class="col-sm-6 control-label">ВАШ E-MAIL</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputPass" class="col-sm-6 control-label">ПАРОЛЬ</label>
						<div class="col-sm-6">
							<input type="password" class="form-control" name="inputPass" id="inputPass" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputRepeatPass" class="col-sm-6 control-label">ПОВТОРИТЕ ПАРОЛЬ</label>
						<div class="col-sm-6">
							<input type="password" class="form-control" name="inputRepeatPass" id="inputRepeatPass" required>
						</div>
					</div>

					<div class="form-group form-checked">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="checkbox" class="form-control" name="inputTake" id="inputTake" required>
							<label for="inputTake" class="control-label">
								Согласен на обработку персональных данных
							</label>
						</div>
					</div>

					<div class="form-group form-checked">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="checkbox" class="form-control" name="inputAgreement" id="inputAgreement" required checked>
							<label for="inputAgreement" class="control-label">
								Я принимаю
								<a href="template/javascript:void(0);" data-toggle="modal" data-target="#agreement" data-dismiss="modal">
									пользовательское соглашение
								</a>
							</label>
						</div>
					</div>

					<button type="submit" name="submitInput" class="btn btn-defo">
						РЕГИСТРАЦИЯ
					</button>
				</form>
			</div>
		</div>
	</div>
</div><!-- #registration -->

<!-- login -->
<div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel2">ВХОД В АККАУНТ</h4>
			</div>
			<div class="modal-body text-center">
				<form action="#" method="post" name="login" class="form-horizontal">

					<div class="form-group">
						<label for="inputEmailLogin" class="col-sm-6 control-label">ВАШ E-MAIL</label>
						<div class="col-sm-6">
							<input type="email" class="form-control" name="emailLogin" id="inputEmailLogin" required>
						</div>
					</div>

					<div class="form-group">
						<label for="inputPassLogin" class="col-sm-6 control-label">ПАРОЛЬ</label>
						<div class="col-sm-6">
							<input type="password" class="form-control" name="passLogin" id="inputPassLogin" required>
						</div>
					</div>

					<div class="form-group form-link">
						<p class="control-label">
							Пользуетесь сервисом KRON впервые?
							<a href="template/javascript:void(0);" data-toggle="modal" data-target="#registration" data-dismiss="modal">
								Регистрация
							</a>
						</p>
					</div><!-- .form-link -->

					<button type="submit" name="submitLogin" class="btn btn-defo">
						ВХОД
					</button>
				</form>
			</div>
		</div>
	</div>
</div><!-- #login -->

<!-- agreement -->
<div class="modal" id="agreement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" data-toggle="modal" data-target="#registration"
								aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel3">
					СОГЛАШЕНИЕ О КОНФИДЕНЦИАЛЬНОСТИ И
					ИСПОЛЬЗОВАНИИ ДАННЫХ (ДАЛЕЕ СОГЛАШЕНИЕ)
				</h4>
			</div>
			<div class="modal-body modal-agreement">
				<p>Создавая учетную запись в&nbsp;приложениях (регистрация в&nbsp;Личном кабинете на&nbsp;сайте
					http://kron.space), правообладателем которых является
					<nobr>ООО &laquo;Меркурий&raquo;</nobr>
					, пользователь подтверждает свое согласие с&nbsp;условиями Соглашения и&nbsp;достоверность предоставленных
					персональных данных, а&nbsp;также руководствуясь положениями Федерального закона от&nbsp;27 июля 2006 года
					&#8470;&nbsp;<nobr>152-ФЗ</nobr> &laquo;О&nbsp;персональных данных&raquo;, выражает свое согласие на&nbsp;обработку
					<nobr>ООО &laquo;Меркурий&raquo;</nobr>
					(далее&nbsp;&mdash; &laquo;Компания&raquo;) персональных данных пользователя, в&nbsp;том числе адреса
					электронной почты, фотоизображения, спользуемых Компанией для целей обозначенных в&nbsp;настоящем Соглашении,
					в&nbsp;том числе путем смешанной обработки персональных данных (автоматизированным и&nbsp;неавтоматизированным
					способами), с&nbsp;передачей таких данных по&nbsp;внутренней сети Компании и&nbsp;сети Интернет.
				</p>
				<h5>Использование данных.</h5>
				<p>При создании учетной записи указанные данные используются для создания уникального идентификатора, который
					может быть использован во&nbsp;всех приложениях сайта http://kron.space, правообладателем которых является
					Компания и&nbsp;используемый для идентификации пользователя при его входе в&nbsp;приложение.</p>
				<p>Обработка персональных данных пользователя в&nbsp;целях, указанных в&nbsp;настоящем Соглашении может
					осуществляться Компанией, в&nbsp;том числе, с&nbsp;привлечением партнеров путем распространения (передачи)
					персональных данных строго на&nbsp;условиях обеспечения режима конфиденциальности и&nbsp;в&nbsp;соответствии с&nbsp;действующим
					законодательством РФ.</p>
				<p>Предоставляя свои данные, пользователь соглашается с&nbsp;тем, что использование таких данных не&nbsp;является
					нарушением его прав, предусмотренных действующим законодательством РФ.</p>
				<p>Регистрируясь в&nbsp;Личном кабинете на&nbsp;сайте http://kron.space пользователь дает свое согласие на&nbsp;получение
					рекламно- информационных рассылок от&nbsp;Компании для информирования о&nbsp;различных акциях, новых продуктах
					и&nbsp;пр., посредством электронной почты, SMS, MMS. В&nbsp;любой момент времени пользователь может отказаться
					от&nbsp;получения таких рассылок, путем обращения в&nbsp;Компанию.</p>
				<p>Пользователь имеет право в&nbsp;любое время изменить или удалить свои данные. Предоставление указанных данных
					является добровольным, но&nbsp;в&nbsp;случае отказа от&nbsp;их&nbsp;предоставления осуществление регистрации
					учетной записи невозможно.</p>
				<p>Для защиты полученных данных от&nbsp;потери, кражи, несанкционированного изменения
					<nobr>ООО &laquo;Меркурий&raquo;</nobr>
					, применяются все необходимые меры технического, административного и&nbsp;юридического характера. Данное
					Соглашение может изменяться в&nbsp;любое время, в&nbsp;случае существенного изменения работы соответствующих
					служб или сервисов
					<nobr>ООО &laquo;Мерурий&raquo;</nobr>
					, с&nbsp;указанием даты последнего обновления.
				</p>
				<p>Если изменения будут затрагивать правила обеспечения конфиденциальности или правила сбора, передачи,
					обработки и&nbsp;хранения личной информации, то&nbsp;пользователь будет извещён об&nbsp;этом посредством
					явного уведомления на&nbsp;данной
					<nobr>веб-странице</nobr>
					или посредством электронной почты.
				</p>
				<p>Компания может рассылать своим клиентам ссылки или указания на&nbsp;установку приложений через СМС/MMS/
					<nobr>e-mail</nobr>&nbsp;&mdash; сообщения.
				</p>
				<p>Компания никогда не&nbsp;запрашивает пароли для отмены операций или шаблонов в&nbsp;системе. Компания никогда
					не&nbsp;отправляет СМС/MMS/
					<nobr>e-mail</nobr>&nbsp;&mdash; сообщения с&nbsp;просьбой подтвердить, обновить или предоставить следующие
					персональные данные: номер мобильного телефона, номер банковской карты, срок ее&nbsp;действия, CVV,
					<nobr>ПИН-код</nobr>
					, контрольную информацию, данные документа, удостоверяющего личность;
				</p>
				<p>Компания никогда не&nbsp;отправляет СМС/MMS/
					<nobr>e-mail</nobr>&nbsp;&mdash; сообщения с&nbsp;формой для ввода персональных данных; В&nbsp;рамках
					проводимых кампаний Компанией может отправлять
					<nobr>e-mail</nobr>&nbsp;&mdash; сообщения со&nbsp;ссылкой на&nbsp;анкету для ввода персональных данных,
					анкета размещается на&nbsp;сайте Компании.
				</p>
				<p>Компания может направлять
					<nobr>e-mail</nobr>&nbsp;&mdash; сообщения со&nbsp;ссылкой для входа в&nbsp;личный кабинет или сервис
					саморегистрации системы, при этом ссылка ведет на&nbsp;официальный сайт Компании.
				</p>
				<p>Чаще всего Компания при рассылке СМС/MMS/
					<nobr>e-mail</nobr>&nbsp;&mdash; сообщений всегда обращается адресно, в&nbsp;сообщении от&nbsp;имени KRON
					всегда указываются имя и&nbsp;отчество клиента либо номер личного кабинета.
				</p>
				<p>При исходящем звонке сотрудники Компании не&nbsp;запрашивают персональные данные: фамилию, данные документа,
					удостоверяющего личность, номер мобильного телефона, номер банковской карты, срок ее&nbsp;действия, CVV,
					<nobr>ПИН-код</nobr>
					, контрольную информацию, идентификатор и&nbsp;пароли для входа в&nbsp;сервис KRON.
				</p>
			</div>
		</div>
	</div>
</div><!-- #agreement -->

<!-- question -->
<div class="modal" id="question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
	<div class="modal-dialog modal-lg modal-md" role="document">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel4">ЗАДАТЬ ВОПРОС</h4>
			</div><!-- .modal-header -->

			<div class="modal-body clearfix">

				<div class="col-sm-8 col-sm-push-4 form_text">
					<p>
						Каждый день наша команда пытается сделать Вашу жизнь немного комфортнее и&nbsp;проще. Если у&nbsp;Вас:
					</p>
					<ul>
						<li>возникли вопросы;</li>
						<li>есть предложения по&nbsp;развитию нашего сервиса;</li>
						<li>есть замечания к&nbsp;работе сервиса;</li>
						<li>Вы&nbsp;не&nbsp;можете разобраться как пользоваться сервисом;</li>
						<li>или просто захотите поблагодарить нас :)</li>
					</ul>
					<p>Напишите нам и&nbsp;мы&nbsp;обязательно Вам ответим!</p>
					<p>
						<nobr>P. S.</nobr>
						: Спасибо за&nbsp;проявленный интерес к&nbsp;нашему сервису, который сделан исключительно для Вас!
					</p>
				</div><!-- .form_text -->

				<form action="#" method="post" name="question" class="form_question">
					<div class="col-sm-4 col-sm-pull-8 form_input">
						<div class="form-group">
							<label for="questionName" class="label">Как Вас зовут? *</label>
							<input type="text" class="form-control" name="questionName" id="questionName" required>
						</div>

						<div class="form-group">
							<label for="questionEmail" class="label">Ваш e-mail *</label>
							<input type="email" class="form-control" name="questionEmail" id="questionEmail" required>
						</div>

						<div class="form-group">
							<label for="questionPhone" class="label">
								Ваш телефон (не&nbsp;обязательно)
							</label>
							<input type="tel" class="form-control" name="questionPhone" id="questionPhone">
						</div>
					</div><!-- .form_input -->

					<div class="form-group col-sm-12">
						<label for="questionText" class="label">
							Ваше сообщение *
						</label>
						<textarea class="form-control" name="questionText" id="questionText" rows="8" required></textarea>
					</div><!-- .form-group -->

					<div class="form-group form-checked col-sm-12">
						<div class="form-checked-input">
							<input type="checkbox" class="form-control" name="questionTake" id="questionTake" required>
							<label for="questionTake" class="label">
								Согласен на обработку персональных данных
							</label>
						</div><!-- .form-checked-input -->
						<button type="submit" name="submitQuestion" class="btn btn-defo">
							ОТПРАВИТЬ
						</button>
					</div><!-- .form-checked -->
				</form>
			</div><!-- .modal-body -->
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- #question -->

<!-- input file -->
<div class="modal" id="inputFile" tabindex="-1" role="dialog" aria-labelledby="inputFile">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Загрузить документ</h4>
			</div>
			<form action="#" method="post" name="inputFile">
				<div class="modal-body">
					<input type="file" name="file">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-defo" data-dismiss="modal">Закрыть</button>
					<button type="submit" name="submitFile" class="btn btn-blue">
						Загрузить
					</button>
				</div>
			</form>
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div><!-- #inputFile -->

<!-- jQuery first, then Bootstrap JS -->
<script src="template/libs/jquery%203.2.1/jquery-3.2.1.min.js"></script>
<script src="template/libs/bootstrap%203.3.7/js/bootstrap.min.js"></script>
<!-- Custom js -->
<script src="template/js/main.js"></script>
</body>
</html>
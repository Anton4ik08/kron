<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Tutorial : Consecutive Slide">
        <meta name="author" content="Webstuffshare">
        <link rel="shortcut icon" href="template/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="template/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="template/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="template/img/favicon/apple-touch-icon-114x114.png">
        
        <!-- link Boss -->
        <link media="screen" href="template/css/demo.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="template/css/demo.css?v=2">
        <link rel="stylesheet" href="template/css/stylename.css" type="text/css" />
        <link rel="stylesheet" href="template/css/style_index.css" type="text/css"/>
    <!--         Link Swiper's CSS -->
          <link rel="stylesheet" href="template/css/swiper.css">
    <!--	 Bootstrap min CSS -->
        <link rel="stylesheet" href="template/libs/bootstrap%203.3.7/css/bootstrap.min.css">

    <!--	 CSS -->
        <link rel="stylesheet" href="template/css/customers.css">

        <link rel="stylesheet" href="template/css/profile.css">
       
	<title>Клиенты</title>
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
                                                            <a href="distributor" class="btn btn-defo"  data-target="#login"><!--data-toggle="modal"-->
									ВХОД
                                                                </a>
								<span>или</span>
                                                                <a href="distributorRegistr" class="btn btn-defo"  data-target="#registration"><!--data-toggle="modal"-->
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
						<p class="header_kron_text">
							• car • ship • food • service •
						</p>
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
                                                                        class="<?php //f($Id == $categoryItem['id']) echo 'active';?>">
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


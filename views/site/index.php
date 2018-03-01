<!doctype html>
<html lang="ru">
    <head>
        <title>Kron - Главная страница</title>
        <meta charset="utf-8" />
        <meta name="viewprot" content="width=device-width, initial-scale=1.0">
        <link media="screen" href="/template/css/demo.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="/template/demo.css?v=2">
        <link rel="stylesheet" href="/template/libs/bootstrap 3.3.7/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="/template/css/stylename.css" type="text/css" />
        <link rel="stylesheet" href="/template/css/style_index.css" type="text/css"/>
        <link rel="stylesheet" href="/template/css/profile.css" type="text/css"/>
        <meta name="description" content="Tutorial : Consecutive Slide">
        
        <meta name="author" content="Webstuffshare">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        
        <!-- Link Swiper's CSS -->
          <link rel="stylesheet" href="/template/css/swiper.css">

      <!-- Demo styles -->
      <style>
        html, body {
          position: relative;
          height: 100%;
        }
        .swiper-container {
          width: 100%;
          height: 100%;
          margin-left: auto;
          margin-right: auto;
        }
        .swiper-slide {
          text-align: center;
          font-size: 18px;

          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }
      </style>
        
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
                                                            <a href="/template//distributor" class="btn btn-defo"  data-target="#login"><!--data-toggle="modal"-->
									ВХОД
                                                                </a>
								<span>или</span>
                                                                <a href="/template//distributorRegistr" class="btn btn-defo"  data-target="#registration"><!--data-toggle="modal"-->
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
							<a href="/template/#"></a>
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
							<a href="/template/profile" class="btn btn-defo btn-xs">
								ЛИЧНЫЙ КАБИНЕТ
							</a>
                                                        </p>
							<a href="/template/user/logout" class="btn btn-defo btn-xs">
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
							<a href="/template//">
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
							<a href="/template/#" type="button" class="h4">
								KRON AUTO
							</a>
							<a href="/template/#" type="button" class="h4">
								KRON SHIP
							</a>
							<a href="/template/#" type="button" class="h4">
								KRON FOOD
							</a>
						</div><!-- .header_about_button -->
					</div><!-- .header_about -->
				</div><!-- .header-center -->

			</div><!-- .row -->
		</div><!-- .header_content -->
	</div><!-- .container-fluid -->
</header>
        <div class="container">
            <div class="row" id="top">
               
                <!--Верхний слайдер. Начало-->
                
                <div class="swiper-container" id="slide123" style="height: 560px;">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" id="slide_top1"></div>
                      <div class="swiper-slide" id="slide_top2"></div>
                      <div class="swiper-slide" id="slide_top3"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>

                  <!-- Swiper JS -->
                  <script src="/template/js/js_swiper/swiper.js"></script>

                  <!-- Initialize Swiper -->
                  <script>
                    var swiper = new Swiper('.swiper-container', {
                      slidesPerView: 1,
                      spaceBetween: 30,
                      loop: true,
                      pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                      },
                      navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                      },
                    });
                  </script>
                
                <!--Верхний слайдер. Конец-->
               
                <div class="col-md-7" id="text_opacity">
                    <div class="v_t">K R O N F O O D</div>
                    <div class="v_t_r">K R O N F O O D</div>
                    <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                </div>
                <div class="col-md-5" id="reg">
                    <div class="row">
                        <div class="col-md-12 text_header">Стать клиентом KRON</div>
                    </div>
                    <div class="row reg_form">
                        <div class="col-md-6 reg_col">
                            <input type="text" placeholder="________ВАШЕ ИМЯ________"/>
                        </div>
                        <div class="col-md-6 reg_col">
                            <input type="email" placeholder="__________E-MAIL__________"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/template/#" class="button button_reg">БЫСТРАЯ РЕГИСТРАЦИЯ</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text_header partner">Стать партнером KRON</div>
                    </div>
                    <div class="row reg_form">
                        <div class="col-md-6 reg_col">
                            <input type="text" placeholder="________ВАШЕ ИМЯ________"/>
                        </div>
                        <div class="col-md-6 reg_col">
                            <input type="text" placeholder="______ВАША ФАМИЛИЯ______"/>
                        </div>
                    </div>
                    <div class="row reg_form">
                        <div class="col-md-6 reg_col">
                            <input type="password" placeholder="__________ПАРОЛЬ__________"/>
                        </div>
                        <div class="col-md-6 reg_col">
                            <input type="email" placeholder="__________E-MAIL__________"/>
                        </div>
                    </div>
                    <div class="row reg_form">
                        <div class="col-md-6 reg_col">
                            <input type="password" placeholder="____ПОВТОРИТЕ ПАРОЛЬ____"/>
                        </div>
                        <div class="col-md-6 reg_col">
                            <input type="tel" placeholder="_________ТЕЛЕФОН_________"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/template/#" class="button button_reg">БЫСТРАЯ РЕГИСТРАЦИЯ</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" id="text_bottom"><span class="text_op">Или зарегиструйтесь с помощью аккаунта пользователя. Продолжая, я соглашаюсь с тем, что компания </span><span class="text_big">KRON</span><span class="text_op"> или ее представители могут связаться со мной при помощи  электронной почты, телефона или СМС (включая   автоматическую  систему набора), воспользовавшись указанными мной электронным адресом или номером телефона, в том числе в  маркетинговых целях. Я подтверждаю, что прочитал(-а) и понял(-а) соответствующее <span class="red_text">Заявление о конфиденциальности пользователя</span></span><span class="text_big red_text"> KRON</span><span class="red_text text_op">.</span></div>
                    </div>
                </div>    
            </div>
            <div class="row">
                <div class="col-md-12" id="app">
                    
                    <!--Средний слайдер. Начало-->
                
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide slide1">
                              <div class="slide1_block">
                                  <p class="text_head">Текст Текст Текст Текст</p>
                                  <p class="text_small">Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </p>
                                  <div>
                                      <a href="/template/#" class="button button_more buttons">KRON FOOD</a>
                                      <a href="/template/#" class="button button_more buttons buttons_middle">KRON SHIP</a>
                                      <a href="/template/#" class="button button_more buttons">KRON AUTO</a>
                                  </div>
                                  <img src="/template/img/boss/google.png" width="200"/>
                                  <img src="/template/img/boss/apple.png" width="200"/>
                              </div>
                          </div>
                          <div class="swiper-slide slide2">
                              <div class="slide1_block">
                                  <p class="text_head">Текст Текст Текст</p>
                                  <p class="text_small">Многие выбирают приложение <span class="slide2_text">Kron</span> потому что удобно, когда все в одном месте, и мы уверены, что здесь каждый найдет что то свое </p>
                                  <div>
                                      <a href="/template/#" class="button button_more buttons">KRON FOOD</a>
                                      <a href="/template/#" class="button button_more buttons buttons_middle">KRON SHIP</a>
                                      <a href="/template/#" class="button button_more buttons">KRON AUTO</a>
                                  </div>
                                  <img src="/template/img/boss/google.png" width="200"/>
                                  <img src="/template/img/boss/apple.png" width="200"/>
                              </div>
                          </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>

                      <!-- Swiper JS -->
                      <script src="/template/js/js_swiper/swiper.js"></script>

                      <!-- Initialize Swiper -->
                      <script>
                        var swiper = new Swiper('.swiper-container', {
                          slidesPerView: 1,
                          spaceBetween: 30,
                          loop: true,
                          pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                          },
                          navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                          },
                        });
                      </script>
                
                      <!--Средний слайдер. Конец-->
                    
                </div>
            </div>
            <div class="row security">
                <div class="col-md-6 tableContainer">
                    <div class="tableRow">
                       <div class="icon_security">
                           <img src="/template/img/boss/phone.png"/>
                       </div>
                       <div class="text_security">
                            <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                            <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </p>
                       </div>
                    </div>
                </div>
                <div class="col-md-6 tableContainer">
                    <div class="tableRow">
                       <div class="icon_security">
                           <img src="/template/img/boss/shield.png"/>
                       </div>
                       <div class="text_security">
                            <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                            <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст </p>
                        </div>
                   </div>
                </div>
            </div>
            <div class="row row_auto">
                <div class="col-md-4 auto_borders">
                    <div class="auto_top_block">
                        <p class="auto_header">KRON AUTO</p>
                        <div class="auto_block">
                            <div class="img_block">
                                <img src="/template/img/boss/auto.png" class="img_auto" id="car"/>
                            </div>
                            <p class="borders_text">Текст Текст Текст Текст</p>
                            <p class="text_bgi place_text">ВЫ ПРИШЛИ В НУЖНОЕ МЕСТО</p>
                            <p>
                                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                            </p>
                        </div>
                    </div>
                    <div class="auto_bottom_block">
                        <a href="/template/#" class="button button_more">УЗНАТЬ БОЛЬШЕ</a>
                    </div>
                </div>
                <div class="col-md-4 auto_borders">
                    <div class="auto_top_block">
                        <p class="auto_header">KRON SHIP</p>
                        <div class="auto_block">
                            <div class="img_block">
                                <img src="/template/img/boss/ship.png" class="img_auto"/>
                            </div>
                            <p class="borders_text">Текст Текст Текст Текст</p>
                            <p class="text_bgi place_text">ВЫ ПРИШЛИ В НУЖНОЕ МЕСТО</p>
                            <p>
                                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                            </p>
                        </div>
                    </div>
                    <div class="auto_bottom_block">
                        <a href="/template/#" class="button button_more">УЗНАТЬ БОЛЬШЕ</a>
                    </div>
                </div>
                <div class="col-md-4 auto_borders">
                    <div class="auto_top_block auto_top_block_right">
                        <p class="auto_header">KRON FOOD</p>
                        <div class="auto_block">
                            <div class="img_block">
                                <img src="/template/img/boss/moto.png" class="img_auto" id="moto"/>
                            </div>
                            <p class="borders_text">Текст Текст Текст Текст</p>
                            <p class="text_bgi place_text">ВЫ ПРИШЛИ В НУЖНОЕ МЕСТО</p>
                            <p>
                                Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст
                            </p>
                        </div>
                    </div>
                    <div class="auto_bottom_block">
                        <a href="/template/#" class="button button_more">УЗНАТЬ БОЛЬШЕ</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 partners">
                    <p class="connect">KRON SERVICE</p>
                    <img class="strip strip_bottom" src="/template/img/boss/strip.jpg" align="center"/>
                    
                    <!--Слайдер Партнеры. Начало-->
                    
                    <div id="content">
                        <div id="binder">
                            <div class="prev"></div>
                            <ul class="list">
                                <li id="li_first"><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                                <li><img src="/template/img/boss/images_slider_partners/item/logo.png" height="78" /></li>
                            </ul>
                            <div class="next"></div>
                        </div>
	                </div>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="/template/js/js_slider_partner/jquery-1.6.4.min.js"%3E%3C/script%3E'))</script>
	<script src="/template/js/js_slider_partner/script.js"></script>
                    
                    <!--Слайдер Партнеры. Конец-->
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 partners">
                    <p class="video_text partners_text">НАШИ ПАРТНЕРЫ</p>
                </div>
            </div>
            <div class="row" id="partners">
                <div class="col-md-8 partners_main_pay">
                    <div id="partners_pay">
                        <p class="text_bgi video_text partners_small_text">СПОСОБЫ ОПЛАТЫ</p>
                    </div>
                </div>
                <div class="col-md-4 partners_right">
                    <div class="partners_right_opacity">
                       <div class="partners_right_opacity_text_light_1">Текст Текст Текст Текст Текст Текст</div>
                       <div class="partners_right_opacity_text_light_2">Текст Текст Текст Текст Текст Текст Текст</div>
                       <div class="partners_right_opacity_text_light_3">Текст Текст Текст Текст Текст Текст Текст</div>
                       <div class="partners_app">                   
                            <p class="partners_app_header">KRON</p>
                            <p class="partners_app_text">ПРИЛОЖЕНИЕ<br/> НА ЛЮБОЙ ВКУС</p>
                       </div>
                    </div>
                </div>
            </div>
            <div class="row kron_part1">
                <div class="col-md-7">
                     <p class="text_bgi video_text">СТАТЬ ЧАСТЬЮ KRON</p>
                     <p class="big_text">Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                     <p class="small_text borders">Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row kron_part2">
                <div class="col-md-5 video_block">
                    <p class="text_header">Text Text</p>
                    <p class="small_text2">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p class="text_header">Text Text</p>
                    <p class="small_text2">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                    <p class="text_header">Text Text</p>
                    <p class="small_text2">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text</p>
                </div>
                <div class="col-md-7" style="text-align: center;">
                    <video controls="controls" width="100%" height="300">
                        <source src="/template/video/football.webm" type='video/webm'>
                    </video>
                </div>
            </div>
            
            <div class="row feedback">
               <img class="strip" src="/template/img/boss/strip.jpg" align="center"/>
                <div class="col-md-8">
                   <div class="row">
                    <form>
                      <div class="col-md-4 form-group user-form-group">
                        <label for="exampleInputText">Как Вас зовут?*</label>
                        <input type="text" class="form-control" id="exampleInputText">
                      </div>
                      <div class="col-md-4 form-group user-form-group">
                        <label for="exampleInputEmail1">Ваш e-mail*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="col-md-4 form-group user-form-group">
                        <label for="exampleInputPhone">Ваш телефон(не обязательно)</label>
                        <input type="phone" class="form-control" id="exampleInputPhone">
                      </div>
                      <div class="row">
                          <div class="col-md-12 textarea_user">
                              <label for="textarea1">Ваше сообщение*</label>
                              <textarea class="form-control" rows="9" id="textarea1"></textarea>
                              <a href="/template/#" class="button">ОТПРАВИТЬ</a>
                          </div>
                      </div>
                        
                    </form>
                    </div>
                </div>  
                <div class="col-md-4">
                    <p>Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                    <p> Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p>
                    <p>
                     Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст Текст</p> 
                    <p id="kron_team">KRON TEAM</p>
                </div>
                <p class="connect">СВЯЗАТЬСЯ С НАМИ</p>
                <img class="strip strip_bottom" src="/template/img/boss/strip.jpg" align="center"/>
            </div>
        </div>
 <?php include (ROOT . '/views/layouts/footer.php');?>
    



























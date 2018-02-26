<?php include (ROOT . '/views/layouts/headerMini.php'); ?>

<div class="container-fluid profile">
	<div class="menu">
		<div class="avatar-menu-left">
                    <img src="<?php echo Category::getImages($dateUser['id']);?>">
			<h5><strong>Добро пожаловать в KRON,<br><?php echo $dateUser['name'] . ' ' . $dateUser['surName'];?></strong></h5>
		</div>
		<nav class="nav-office">
			<nav class="nav-office">
			<a href="/profile" class="">Профиль</a>
			<a href="#" class="">Платёжные реквизиты</a>
			<a href="/edit" class="">Редактировать </a>
			<a href="#" class="">Мои заказы</a>
			<a href="user/logout" class="">Выход</a>
		</nav>
		</nav>
	</div>
	<div class="Profile_info">
		<div class="heder_profile">
			 <?php if($dateUser['userStatus'] == 2): ?>
                            <?php echo '<h1><strong> Личные данные партнёра</strong></h1>'; ?>
                          <?php else : ?> 
                            <?php echo '<h1><strong> Личные данные клиента</strong></h1>'; ?>
                         <?php endif; ?>
			<div class="star">
				<a></a>
				<a></a>
				<a></a>
				<a></a>
				<a></a>
			</div>
		</div>
		<div class="Profile_content">
			<div class="content-row">
				<div class="Avatar">
					<img src="<?php echo Category::getImages($dateUser['id']);?>">
				</div>
				<div class="profile-info">
					<div class="profile-info-row">
					<div class="label fl_l">ФАМИЛИЯ</div>
					<div class="labeled"><a><?php echo $dateUser['surName'];?></a></div>
					</div>				
					<div class="profile-info-row">
					<div class="label fl_2">ИМЯ</div>
					<div class="labeled"><a><?php echo $dateUser['name'];?></a></div>
					</div>				
					<div class="profile-info-row">
					<div class="label fl_3">ОТЧЕСТВО</div>
					<div class="labeled"><a><?php echo $dateUser['patronymic'];?></a></div>
					</div>			
					<div class="profile-info-row">
					<div class="label fl_4">ТЕЛЕФОН</div>
					<div class="labeled"><a><?php echo $dateUser['phone'];?></a></div>
					</div>			
					<div class="profile-info-row">
					<div class="label fl_5">E-MAIL</div>
					<div class="labeled"><a><?php echo $dateUser['email'];?></a></div>
					</div>
				</div>
				<div class="id">
					<strong>ID <?php echo $dateUser['id'];?></strong>
				</div>
			</div>
			<!--<div class="profile-info-row">
				<div class="label fl_6">ДОМАШНИЙ АДРЕС</div>
				<div class="labeled"><a>Санкт- Петербург м. Адмиралтейская, Невский проспект 5</a></div>
			</div>			
			<div class="profile-info-row">
				<div class="label fl_7">РАБОЧИЙ АДРЕС</div>
				<div class="labeled"><a>Санкт- Петербург м. Невский проспект, наб. канала Грибоедова 10</a></div>
			</div>-->
		</div>
            <?php if($dateUser['userStatus'] == 2): ?>
		<nav class="nav-modul">
			<div class="button auto"><a href="#" ><strong>KRON AUTO</strong></a></div>
			<div class="button ship"><a href="#" >KRON SHIP</a></div>
			<div class="button food"><a href="#" >KRON FOOD</a></div>
		</nav>
		<div class="content-module">
			<div class="heder-content-module  heder-auto"><h4>Информация о машине</h4></div>
			<div class="content_auto">
				<div class="image-auto">
					<img src="template/img/profile/auto-avatar.png">
				</div>
				<div class="info-auto">
					<div class="profile-info-row">
						<div class="label fl_8">Марка машины</div>
						<div class="labeled"><a>Volksvagen</a></div>
					</div>				
					<div class="profile-info-row">
						<div class="label fl_8">Номер машины</div>
						<div class="labeled"><a>V777mp</a></div>
					</div>					
					<div class="profile-info-row">
						<div class="label fl_8">Цвет машины</div>
						<div class="labeled"><a>красный</a></div>
					</div>					
					<div class="profile-info-row">
						<div class="label fl_8">Макс поссажиров</div>
						<div class="labeled"><a>8</a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-module">
			<div class="heder-content-module reply-heder-module"><h4>ОТЗЫВЫ(666)</h4></div>
			<div class="reply-post-container">
				<div class="reply-post">
				<div class="image-post">
					<img src="template/img/profile/auto-avatar.png">
				</div>
				<div class="reply">
					<div class="name-heder"><strong>Иван Иванович</strong><time>01.02.02</time></div>
					<div class="coment"><p>Тут писал Иван</p></div>
				</div>
			</div>
			</div>
		</div>
            <?php endif;?>
	</div>
</div>
<?php include (ROOT . '/views/layouts/footer.php');

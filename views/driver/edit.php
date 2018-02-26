<?php include (ROOT . '/views/layouts/headerMini.php'); ?>

<div class="container-fluid profile">
	<div class="menu">
		<div class="avatar-menu-left">
                    <img src="<?php echo Category::getImages($dateUser['remember_token']);?>">
			<h5><strong>Добро пожаловать в KRON,<br> <?php echo $dateUser['name'] . ' ' . $dateUser['surName'];?></strong></h5>
		</div>
		<nav class="nav-office">
			<a href="/profPart" class="">Профиль</a>
			<a href="#" class="">Платёжные реквизиты</a>
			<a href="/edPart" class="">Личные данные</a>
                        <a href="/edPartCar" class="">Данные о машине</a>
			<a href="#" class="">Мои заказы</a>
			<a href="user/logout" class="">Выход</a>
		</nav>
	</div>
	<div class="Profile_info">
		<div class="heder_profile">
			<h1><strong>Личные данные партнёра</strong></h1>
			<div class="star">
				<a></a>
				<a></a>
				<a></a>
				<a></a>
				<a></a>
			</div>
		</div>
            
            <?php if(isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><span class="redOff"> * </span><?php echo $error;?></li>
                    <?php endforeach;?>
                </ul>
                <?php endif; ?>
            
		<div class="Profile_content">
			<div class="content-row">
                               
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <p class="nameEdit">Аватар</p>
                                <img src="<?php echo Category::getImagesDriver($dateUser['remember_token']);?>" width="200" alt="">
                                    <input class="input" type="file" name="image" placeholder="" value="">
                                
                                <p class="nameEdit">Имя</p>
                                <input class="input" type="text" name="name" placeholder="" value="<?php echo $dateUser['name']; ?>">

                                <p class="nameEdit">Фамилия</p>
                                <input class="input" type="text" name="surName" placeholder="" value="<?php echo $dateUser['surName']; ?>">

                                <p class="nameEdit">Отчество</p>
                                <input class="input" type="text" name="patronymic" placeholder="" value="<?php echo $dateUser['patronymic']; ?>">
                                
                                <p class="nameEdit">Телефон</p>
                                <input class="input" type="text" name="phone" placeholder="" value="<?php echo $dateUser['phone']; ?>">
                                
                                <p class="nameEdit">Электронная почта</p>
                                <input class="input" type="text" name="email" placeholder="" value="<?php echo $dateUser['email']; ?>">
                                
<!--                                <p>Пароль</p>
                                <input type="password" name="password" placeholder="" value="">
                                
                                <p>Повторить пароль</p>
                                <input type="password" name="password2" placeholder="" value="">-->
                                <input type="hidden" name="created_at" value="<?php echo $dateUser['created_at']; ?>">
                                
                                <input class="inputSubmit" type="submit" name="edit" value="СОХРАНИТЬ">
                            </form> 
				
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
		
		
	</div>
</div>
<?php include (ROOT . '/views/layouts/footer.php');



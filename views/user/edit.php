<?php include (ROOT . '/views/layouts/headerMini.php'); ?>

<div class="container-fluid profile">
	<div class="menu">
		<div class="avatar-menu-left">
                    <img src="<?php echo Category::getImages($dateUser['id']);?>">
			<h5><strong>Добро пожаловать в KRON,<br> <?php echo $dateUser['name'] . ' ' . $dateUser['surName'];?></strong></h5>
		</div>
		<nav class="nav-office">
			<a href="/profile" class="">Профиль</a>
			<a href="#" class="">Платёжные реквизиты</a>
			<a href="/edit" class="">Редактировать </a>
			<a href="#" class="">Мои заказы</a>
			<a href="user/logout" class="">Выход</a>
		</nav>
	</div>
	<div class="Profile_info">
		<div class="heder_profile">
			<h1><strong>Личные данные</strong></h1>
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
                                <p>Аватар</p>
                                <img src="<?php echo Category::getImages($dateUser['id']);?>" width="200" alt="">
                                
                                <input type="file" name="image" placeholder="" value="">
                                
                                <p>Имя</p>
                                <input type="text" name="name" placeholder="" value="<?php echo $dateUser['name']; ?>">

                                <p>Фамилия</p>
                                <input type="text" name="surName" placeholder="" value="<?php echo $dateUser['surName']; ?>">

                                <p>Отчество</p>
                                <input type="text" name="patronymic" placeholder="" value="<?php echo $dateUser['patronymic']; ?>">
                                
                                <p>Телефон</p>
                                <input type="text" name="phone" placeholder="" value="<?php echo $dateUser['phone']; ?>">
                                
                                <p>Электронная почта</p>
                                <input type="text" name="email" placeholder="" value="<?php echo $dateUser['email']; ?>">
                                
<!--                                <p>Пароль</p>
                                <input type="password" name="password" placeholder="" value="">
                                
                                <p>Повторить пароль</p>
                                <input type="password" name="password2" placeholder="" value="">-->
                                
                                <input type="hidden" name="created_at" value="<?php echo $dateUser['created_at']; ?>">
                                
                                <input type="submit" name="edit" value="СОХРАНИТЬ">
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
<?php include (ROOT . '/views/layouts/footer.php');?>



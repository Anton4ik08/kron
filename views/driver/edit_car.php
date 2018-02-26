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
                                <p class="nameEdit">Фото Машины</p>
                                <img src="<?php echo Category::getImagesDriverAuto($dateUserCar['remember_token']);?>" width="200" alt="">
                                    <input class="input" type="file" name="image" placeholder="" value="">
                                
                                <p class="nameEdit">Марка машины</p>
                                <input class="input" class="input" type="text" name="brand" placeholder="Марка машины" value="<?php echo $dateUserCar['brand']; ?>">

                                <p class="nameEdit">Модель</p>
                                <input class="input" class="input" type="text" name="model" placeholder="Модель машины" value="<?php echo $dateUserCar['model']; ?>">

                                <p class="nameEdit">Регистрационный №</p>
                                <input class="input" class="input" type="text" name="number" placeholder="Регистрационный №" value="<?php echo $dateUserCar['number']; ?>">
                                
                                <p class="nameEdit">Цвет машины</p>
                                <select name="color" required size="1" class="input">
                                    <option class="color object1" value="<?php echo $dateUserCar['color']; ?>" selected="" style="background-color:#<?php echo $dateUserCar['color']; ?>"><?php echo DriversController::colorCars($dateUser['color']);?></option>
                                    <option class="color object1" value="ffffff">Белый</option>
                                    <option class="color object2" value="e1e9ed">Серебрянный</option>
                                    <option class="color object3" value="000000">Чорный</option>
                                    <option class="color object4" value="696a6f">Cерый</option>
                                    <option class="color object5" value="2b60e0">Синий</option>
                                    <option class="color object6" value="e02121">Красный</option>
                                    <option class="color object7" value="43a946">Зеленый</option>
                                    <option class="color object8" value="f9d311">Жолтый</option>
                                    <option class="color object9" value="774f2b">Коричневый</option>
                                    <option class="color object10" value="e56947">Оранжевый</option>
                                </select>
                                
                                <p class="nameEdit">Количество пасадочных мест</p>
                                <input class="input" type="text" name="places" placeholder="Количество пасадочных мест" value="<?php echo $dateUserCar['places']; ?>">
                                
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
		<nav class="nav-modul">
			<div class="buttonKron auto"><a href="#" ><strong>KRON AUTO</strong></a></div>
			<div class="buttonKron ship"><a href="#" >KRON SHIP</a></div>
			<div class="buttonKron food"><a href="#" >KRON FOOD</a></div>
		</nav>
		<div class="content-module">
			<div class="heder-content-module  heder-auto"><h4>Информация о машине</h4></div>
			<div class="content_auto">
				<div class="image-auto">
                                    <img src="<?php echo Category::getImagesDriverAuto($dateUser['id']);?>">
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
		
	</div>
</div>
<?php include (ROOT . '/views/layouts/footer.php');



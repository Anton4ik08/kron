<?php include (ROOT . '/views/layouts/header.php'); ?>

<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if(isset($result) && $result !== FALSE): ?>
                
                        <p class="regOn">Вы зарегистрированы!</p>
                        
                <?php else: ?>
                        <?php if(isset($errors) && is_array($errors)):?>
                            <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> <span class="redOff"> * </span> <?php echo $error; ?>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <div class="signup-form">
                        <h2>Регистрация Партнёра</h2>
                        <form action="#" method="post">
                            <div class="blockInputForm">
                                <span class="requiredFields">*</span>
                                    <input class="input" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>">
                            </div>
                            <div class="blockInputForm">
                                <span class="requiredFields">*</span>
                                    <input class="input" type="text" name="surName" placeholder="Фамилия" value="<?php echo $surName; ?>">
                            </div>
                            <div class="blockInputForm">
                                <span class="requiredFields">*</span>
                                    <input class="input" type="text" name="patronymic" placeholder="Отчество" value="<?php echo $patronymic; ?>">
                            </div>
                            <div class="blockInputForm">
                                <span class="requiredFields">*</span>
                                    <input class="input" type="text" name="phone" placeholder="Телефон" value="<?php echo $phone; ?>">
                            </div>
                            <div class="blockInputForm">
                                <span class="requiredFields">*</span>
                                    <input class="input" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                            </div>
                            <div class="blockInputForm">
                                <span class="requiredFields">*</span>
                                    <input class="input" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                            </div>
                            
                            <input class="inputSubmit" type="submit" name="registre" class="btn btn-default" value="Регистрация">
                        </form>
                        <div class="messageForUser">
                            <p class="mesageHeader">
                                <span class="starsRed">*</span>
                                 - Поля обязательные для заполнения
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php include (ROOT . '/views/layouts/footer.php'); ?>
<?php include (ROOT . '/views/layouts/header.php'); ?>
<section>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-4 col-sm-offset-4 padding-right">
                <?php if(isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><span class="redOff"> * </span><?php echo $error;?></li>
                    <?php endforeach;?>
                </ul>
                <?php endif; ?>
                
                <div class="signup-form">
                    <h2>Войти как партнер</h2>
                    <form action="#" method="POST">
                        <input class="input" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                        <input class="input" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>">
                        <input class="inputSubmit" type="submit" name="submit" value="Войти" class="btn btn-default">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include (ROOT . '/views/layouts/footer.php');


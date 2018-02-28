<?php include (ROOT . '/views/layouts/header.php'); ?>
    <body>
        <div class="container">
            <div class="row">
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
                            <div class="col-md-3 user-col-md-3">
                                <div class="block-forms">
                                    <form  method="post">
                                        <div class="form-group">

                                            <input type="text" name="name" class="form-control user-form" id="name" placeholder="Имя" />
                                        </div>
                                        <div class="form-group">

                                            <input type="email" name="email" class="form-control user-form" id="email" placeholder="Электронная почта"/>
                                        </div>
                                        
                                        <div class="form-group message">

                                            <textarea id="message" name="message" spellcheck class="form-control user-form" rows="3" placeholder="Сообщение"></textarea>
                                        </div>
                                        <div class="checkbox user-checkbox">
                                           <input type="checkbox" name="$checkbox" value="1">

                                                <span class="user-text-personal">Согласен на обработку<br />персональных данных</span>
                                        </div>
                                        <div class="user-block-button">
                                            <input type="submit" class="btn btn-success user-button" style="background: none;" value="ОТПРАВИТЬ" name="submit"/>
                                        </div>
                                    </form>
                                    <hr>
                                    <a href="#">
                                        <div class="cont"><div></div><div class="clients-text">КЛИЕНТАМ</div></div>
                                    </a>
                                    <a href="#"><div class="partners"><div class="partners-text">ПАРТНЕРАМ</div></div></a>
                                </div>
                            </div> 
                        <?php endif; ?>
                <div class="col-md-9 user-col-md-9">
                    <div class="block-a-q">
                        <div class="question">
                            Заголовок вопроса
                        </div>
                        <div class="answer1">
                            <div class="answer">
                                Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                                Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                                Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                                Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                            </div>
                        </div>
                    </div>
                    <div class="block-a-q">
                        <div class="question">
                            Заголовок вопроса
                        </div>
                        <div class="answer">
                            Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                            Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                            Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                            Полный текст Полный текст Полный текст Полный текст Полный текст Полный текст
                        </div>
                    </div>
                </div>    
            </div>
        </div>
  
<?php include (ROOT . '/views/layouts/footer.php');?>

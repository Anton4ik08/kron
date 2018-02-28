<?php include (ROOT . '/views/layouts/header.php'); ?>
<div class="container">
    <?php foreach ($getNews as $keyNews):?>
            <div class="row" id="container_news">
                <div class="col-md-4 user-col-md-4">
                    <img src="<?php echo News::getImages($keyNews['id']); ?>" class="newsImagest"/>
                </div> 
                <div class="col-md-8 user-col-md-8">
                   <div id="tableContainer">
                       <div id="tableRow">
                           <div id="left">
                               <p id="tableHeader"><?php echo $keyNews['title']; ?></p>
                           </div>
                           <div id="right">
                               
                           </div>
                       </div>
                   </div>
                   <div id="text">
                       <p id="tableText"><?php echo $keyNews['text']; ?></p>
                   </div>
                   <div class="podval">
<!--                       <div class="user-block-button">
                                <button type="button" class="btn user-button">
                                    <div class="btn-send">
                                        <img src="" style="width: 10px; padding: 0 1px 2px 0;"/>МНЕ НРАВИТСЯ
                                    </div>
                                </button>
                       </div>-->
<!--                       <div class="user-block-button">
                                <button type="button" class="btn btn-success user-button" style="background: none;">
                                    <div class="btn-send">
                                        <img src="img/megafon_green.png" style="width: 11px; padding-bottom: 2px;"/> &nbsp;ПОДЕЛИТЬСЯ
                                    </div>
                                </button>
                       </div>-->
                       <div class="link_news">
                           <a href="/news/<?php echo $keyNews['id'];?>" class="linkTextNews">ПОДРОБНЕЕ</a>
                       </div>
                   </div>
                </div>    
            </div>
    <?php endforeach;?>
        </div>
    </body>  
</html>
<?php include (ROOT . '/views/layouts/footer.php');?>

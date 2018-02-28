<?php include (ROOT . '/views/layouts/header.php'); ?>
<div class="container">
            <div class="row" id="container_news">
                <div class="col-md-4 user-col-md-4">
                    <img src="<?php echo News::getImages($getNews['id']); ?>" class="newsImagest"/>
                </div> 
                <div class="col-md-8 user-col-md-8">
                   <div id="tableContainer">
                       <div id="tableRow">
                           <div id="left">
                               <p id="tableHeader"><?php echo $getNews['title']; ?></p>
                           </div>
                           <div id="right">
                               
                           </div>
                       </div>
                   </div>
                   <div id="text">
                       <p id="tableText"><?php echo $getNews['desc']; ?></p>
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
                       
                           <p class="author"><?php echo $getNews['autor']; ?></p>
                       
                   </div>
                </div>    
            </div>
        </div>
    </body>  
</html>
<?php include (ROOT . '/views/layouts/footer.php');?>



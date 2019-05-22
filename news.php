<?php include('header.php'); ?>
<?php include('slide_home.php'); ?>
<?php include('breadcrumb.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <form>
            <div class="uk-margin uk-text-right">
                <div uk-form-custom="target: > * > span:first-child">
                    <select>
                        <option value="">Time Post</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button uk-button-default uk-text-capitalize" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
        </form>
        <?php for ($i=1; $i<=5; $i++) { ?>
        <div class="uk-card card4 uk-grid-collapse uk-child-width-1-2@s uk-margin-large-bottom" uk-grid>
            <div class="uk-card-media-left <?php if($i%2==0) echo "uk-flex-last@s"; ?> uk-cover-container">
                <img src="imgs/news<?php echo $i; ?>.png" alt="" uk-cover>
                <canvas width="605" height="387"></canvas>
            </div>
            <div class="uk-flex uk-flex-bottom">
                <div class="uk-card-body uk-padding-large uk-padding-remove-bottom uk-width-1-1 <?php if($i%2==0){echo "uk-padding-remove-left";}else{echo "uk-padding-remove-right";} ?>">
                    <time class="<?php if($i%2==0){echo "uk-position-top-right";}else{echo "uk-position-top-left";} ?> uk-text-white uk-text-center uk-flex uk-flex-column uk-flex-middle uk-flex-center">
                        <span>22</span>
                        SEPT
                    </time>
                    <h3 class="uk-card-title"><a href="news_detail.php">“Back to school” Summer Collection</a></h3>
                    <hr>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ultrices mattis dui, et mollis mauris vulputate sed. Maecenas ipsum neque, fermentum quis lacus sed, volutpat tempor nibh. Suspendisse neque eros, volutpat ac magna ut, ultrices fringilla orci.</p>
                    <p>Tag: <a href="#">#Promotion</a> <a href="#">#saleoff</a> <a href="#">#summercollection</a></p>
                    <div class="uk-flex uk-flex-middle uk-flex-between">
                        <a href="news_detail.php" class="uk-button uk-button-default">see more</a>
                        <ul class="uk-child-width-auto uk-grid-small list_social uk-grid" uk-grid="">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="uk-text-center">
            <a href="#" class="uk-button uk-button-secondary btn4">load more</a>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
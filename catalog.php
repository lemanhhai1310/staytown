<?php include('header.php'); ?>
<?php include('slide_home.php'); ?>
<?php include('breadcrumb.php'); ?>
<div class="uk-section-small block_catalog">
    <div class="uk-container">
        <div class="uk-visible@s uk-grid uk-grid-small uk-child-width-1-2@m">
            <div>
                <div class="uk-card card3 uk-box-shadow-hover-small uk-transition-toggle">
                    <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                        <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in1.png'); padding-top: calc(85% + 3px);"></div>
                        <a href="#" class="uk-button btn3 uk-button-default uk-box-shadow-medium bg-white uk-position-center">shirt</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid uk-grid-small uk-child-width-1-2@m">
                    <?php for ($i=1; $i<=4; $i++) { ?>
                    <div>
                        <div class="uk-card card3 uk-box-shadow-hover-small uk-transition-toggle">
                            <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in<?php echo $i; ?>.png'); padding-top: 85%;"></div>
                                <a href="#" class="uk-button btn3 uk-button-default uk-box-shadow-medium bg-white uk-position-center">shirt</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <div class="uk-grid uk-grid-small uk-child-width-1-2@m">
                    <?php for ($i=1; $i<=4; $i++) { ?>
                        <div>
                            <div class="uk-card card3 uk-box-shadow-hover-small uk-transition-toggle">
                                <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                    <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in<?php echo $i; ?>.png'); padding-top: 85%;"></div>
                                    <a href="#" class="uk-button btn3 uk-button-default uk-box-shadow-medium bg-white uk-position-center">shirt</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div>
                <div class="uk-card card3 uk-box-shadow-hover-small uk-transition-toggle">
                    <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                        <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in1.png'); padding-top: calc(85% + 3px);"></div>
                        <a href="#" class="uk-button btn3 uk-button-default uk-box-shadow-medium bg-white uk-position-center">shirt</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-hidden@s uk-text-center uk-grid uk-grid-small uk-child-width-1-2@m">
            <?php for ($i=1; $i<=3; $i++) { ?>
                <div>
                    <div class="uk-card card3 uk-box-shadow-hover-small uk-transition-toggle">
                        <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                            <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in<?php echo $i; ?>.png'); padding-top: 85%;"></div>
                            <a href="#" class="uk-button btn3 uk-button-default uk-box-shadow-medium bg-white uk-position-center">shirt</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div>
                <a href="#" class="uk-button uk-button-default btn-readmore">xem thêm</a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
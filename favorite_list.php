<?php include('header.php'); ?>
<?php include('breadcrumb1.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#favorite list</h2>
        <div class="uk-card card7">
            <div class="uk-card-header uk-card-secondary uk-flex uk-flex-middle uk-flex-between">
                <h3 class="title uk-h6 uk-text-uppercase uk-margin-remove">PRODUCT</h3>
                <span>3 product in your cart</span>
            </div>
            <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
                <div class="uk-grid uk-visible@s uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-6@l" uk-margin>
                    <?php for ($i=1; $i<=6; $i++) { ?>
                        <div>
                            <div class="uk-card card2 uk-transition-toggle">
                                <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                    <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/img<?php echo $i; ?>.png'); padding-top: 121%;"></div>
                                    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                    <div class=" uk-transition-fade uk-transition-slide-bottom uk-position-bottom uk-text-center uk-padding-small">
                                        <a href="#" class="btn_add_cart uk-button uk-button-default bg-white uk-flex-inline uk-flex-middle uk-flex-center"><span uk-icon="cart"></span> add to cart</a>
                                    </div>
                                    <div class="product-item-action uk-position-top-right">
                                        <a href="#"><span uk-icon="heart"></span></a>
                                        <a href="#"><span uk-icon="plus"></span></a>
                                        <a href="#"><span uk-icon="link"></span></a>
                                    </div>
                                </div>
                                <div class="uk-card-body uk-text-center uk-padding-small">
                                    <h3 class="uk-card-title"><a href="#">Velvet backpack</a></h3>
                                    <div class="price"><span>235.000 VND</span></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
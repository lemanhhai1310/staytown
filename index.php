<?php include('header.php'); ?>
<?php include('slide_home.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#SUGGESTED FOR YOU</h2>
        <div class="uk-grid uk-visible@s uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-6@l uk-hidden" uk-margin>
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
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-6@l uk-grid-small" uk-grid>
                        <?php for ($i=1; $i<=6; $i++) { ?>
                        <li>
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
                        </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        <div class="uk-grid uk-hidden@s uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-6@l uk-text-center" hidden uk-margin>
            <?php for ($i=1; $i<=2; $i++) { ?>
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
            <div>
                <a href="#" class="uk-button uk-button-default btn-readmore">xem thêm</a>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#STAY TOWN STYLE</h2>
        <div class="uk-grid uk-grid-small uk-child-width-1-3@l">
            <div>
                <div class="uk-grid-small" uk-grid uk-margin>
                    <div class="uk-width-1-2 uk-width-1-1@l">
                        <div class="uk-card card2 uk-transition-toggle">
                            <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in1.png'); padding-top: 75%;"></div>
                            </div>
                            <div class="uk-card-body uk-text-center uk-padding-small uk-padding-remove-right uk-padding-remove-left">
                                <h3 class="uk-card-title"><a href="#">New Collection In VietNam</a></h3>
                                <div>COLLEGE FLASHBACK</div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-1@l">
                        <div class="uk-card card2 uk-transition-toggle">
                            <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in2.png'); padding-top: 75%;"></div>
                            </div>
                            <div class="uk-card-body uk-text-center uk-padding-small uk-padding-remove-right uk-padding-remove-left">
                                <h3 class="uk-card-title"><a href="#">New Collection In VietNam</a></h3>
                                <div>COLLEGE FLASHBACK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card card2 uk-transition-toggle">
                    <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                        <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img box_home1" style="background-image: url('imgs/in3.png'); padding-top: 87%;"></div>
                    </div>
                    <div class="uk-card-body uk-text-center uk-padding-small uk-padding-remove-right uk-padding-remove-left">
                        <h3 class="uk-card-title"><a href="#">New Collection In VietNam</a></h3>
                        <div>COLLEGE FLASHBACK</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-grid-small" uk-grid uk-margin>
                    <div class="uk-width-1-2 uk-width-1-1@l">
                        <div class="uk-card card2 uk-transition-toggle">
                            <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in1.png'); padding-top: 75%;"></div>
                            </div>
                            <div class="uk-card-body uk-text-center uk-padding-small uk-padding-remove-right uk-padding-remove-left">
                                <h3 class="uk-card-title"><a href="#">New Collection In VietNam</a></h3>
                                <div>COLLEGE FLASHBACK</div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2 uk-width-1-1@l">
                        <div class="uk-card card2 uk-transition-toggle">
                            <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/in2.png'); padding-top: 75%;"></div>
                            </div>
                            <div class="uk-card-body uk-text-center uk-padding-small uk-padding-remove-right uk-padding-remove-left">
                                <h3 class="uk-card-title"><a href="#">New Collection In VietNam</a></h3>
                                <div>COLLEGE FLASHBACK</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
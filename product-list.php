<?php include('header.php'); ?>
<?php include('slide_home.php'); ?>
<?php include('breadcrumb.php'); ?>
<div class="uk-margin-bottom">
    <div class="uk-container">
        <div class="uk-flex uk-flex-middle uk-flex-between boundary-align uk-inline">
            <span class="txt uk-visible@s">Showing 1–10 of 28 results</span>
            <div class="uk-flex uk-flex-middle mt2 uk-grid uk-grid-collapse uk-child-width-1-4 uk-child-width-auto@s">
                <div class="mt1" uk-form-custom="target: > * > span:first-child">
                    <select>
                        <option value="">Category</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button btn6 uk-button-default uk-text-capitalize uk-text-truncate uk-width-1-1" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
                <div class="mt1" uk-form-custom="target: > * > span:first-child">
                    <select>
                        <option value="">Line</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button btn6 uk-button-default uk-text-capitalize uk-text-truncate uk-width-1-1" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
                <div class="mt1">
                    <button class="uk-button uk-button-secondary uk-text-capitalize" type="button">Filters</button>
                    <div class="box_filters" uk-dropdown="pos: bottom-justify; boundary: .boundary-align; boundary-align: true">
                        <div class="uk-grid uk-child-width-1-4@l" uk-margin>
                            <div>
                                <div class="box_2 uk-height-1-1">
                                    <h4 class="title uk-text-uppercase">color</h4>
                                    <div class="uk-grid-small uk-child-width-auto uk-grid" uk-margin>
                                        <label><input class="uk-checkbox" type="checkbox" checked> Blue</label>
                                        <label><input class="uk-checkbox" type="checkbox"> Black</label>
                                        <label><input class="uk-checkbox" type="checkbox"> Yellow</label>
                                        <label><input class="uk-checkbox" type="checkbox"> Pink</label>
                                        <label><input class="uk-checkbox" type="checkbox"> Red</label>
                                        <label><input class="uk-checkbox" type="checkbox"> Gold</label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box_2 uk-height-1-1">
                                    <h4 class="title uk-text-uppercase">size</h4>
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Please select...</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="btn5 uk-button uk-button-default uk-text-capitalize uk-width-1-1" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box_2 uk-height-1-1">
                                    <h4 class="title uk-text-uppercase">filter price</h4>
                                    <div class="uk-margin-bottom" id="slider-range"></div>
                                    <div class="uk-text-center">
                                        <input class="uk-width-1-1" type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box_2 uk-height-1-1">
                                    <h4 class="title uk-text-uppercase">tag</h4>
                                    <div>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">shirt</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">dress</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">skirt</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">acessories</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">hot</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">shoes</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">mix set</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">jacket</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">promotion</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">sales</a>
                                        <a href="#" class="uk-button tag1 uk-button-default uk-text-capitalize">trousers</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-text-center">
                                <a href="mycart.php" class="uk-button uk-button-default">cancel</a>
                                <a href="payment.php" class="uk-button uk-button-secondary">filter</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt1" uk-form-custom="target: > * > span:first-child">
                    <select>
                        <option value="">Sort by name (a-z)</option>
                        <option value="1">Option 01</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <button class="uk-button btn6 uk-button-default uk-text-capitalize uk-text-truncate uk-width-1-1" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section-small uk-visible@m">
    <div class="uk-grid uk-grid-small uk-flex-center" uk-margin>
        <div class="uk-width-1-2@m">
            <div class="uk-card card2 uk-transition-toggle">
                <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                    <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/product-list1.png'); padding-top: calc(120% + 15px);"></div>
                    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                    <div class=" uk-transition-fade uk-position-center uk-text-center uk-padding-small">
                        <a href="#" class="btn_add_cart uk-button uk-button-large uk-button-default bg-white uk-flex-inline uk-flex-middle uk-flex-center"><span uk-icon="cart"></span> add to cart</a>
                    </div>
                    <div class="product-item-action uk-position-top-right">
                        <a href="#"><span uk-icon="heart"></span></a>
                        <a href="#"><span uk-icon="plus"></span></a>
                        <a href="#"><span uk-icon="link"></span></a>
                    </div>
                </div>
                <div class="uk-card-body uk-text-center uk-position-bottom uk-flex uk-flex-middle uk-flex-between uk-overlay uk-overlay-default">
                    <h3 class="uk-card-title"><a href="#">Velvet backpack</a></h3>
                    <div class="price"><span>235.000 VND</span></div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2@m">
            <div class="uk-grid uk-grid-small uk-child-width-1-2@m" uk-margin>
                <?php for ($i=2; $i<=5; $i++) { ?>
                <div>
                    <div class="uk-card card2 uk-transition-toggle">
                        <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                            <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/product-list<?php echo $i; ?>.png'); padding-top: calc(122% + 0px);"></div>
                            <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                            <div class=" uk-transition-fade uk-position-center uk-text-center uk-padding-small">
                                <a href="#" class="btn_add_cart uk-button uk-button-default bg-white uk-flex-inline uk-flex-middle uk-flex-center"><span uk-icon="cart"></span> add to cart</a>
                            </div>
                            <div class="product-item-action uk-position-top-right">
                                <a href="#"><span uk-icon="heart"></span></a>
                                <a href="#"><span uk-icon="plus"></span></a>
                                <a href="#"><span uk-icon="link"></span></a>
                            </div>
                        </div>
                        <div class="uk-card-body uk-padding-small uk-text-center uk-position-bottom uk-flex uk-flex-middle uk-flex-between">
                            <h3 class="uk-card-title"><a href="#">Velvet backpack</a></h3>
                            <div class="price"><span>235.000 VND</span></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="uk-width-1-2@m">
            <div class="uk-grid uk-grid-small uk-child-width-1-2@m" uk-margin>
                <?php for ($i=6; $i<=9; $i++) { ?>
                    <div>
                        <div class="uk-card card2 uk-transition-toggle">
                            <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/product-list<?php echo $i; ?>.png'); padding-top: calc(122% + 0px);"></div>
                                <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                                <div class=" uk-transition-fade uk-position-center uk-text-center uk-padding-small">
                                    <a href="#" class="btn_add_cart uk-button uk-button-default bg-white uk-flex-inline uk-flex-middle uk-flex-center"><span uk-icon="cart"></span> add to cart</a>
                                </div>
                                <div class="product-item-action uk-position-top-right">
                                    <a href="#"><span uk-icon="heart"></span></a>
                                    <a href="#"><span uk-icon="plus"></span></a>
                                    <a href="#"><span uk-icon="link"></span></a>
                                </div>
                            </div>
                            <div class="uk-card-body uk-padding-small uk-text-center uk-position-bottom uk-flex uk-flex-middle uk-flex-between">
                                <h3 class="uk-card-title"><a href="#">Velvet backpack</a></h3>
                                <div class="price"><span>235.000 VND</span></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="uk-width-1-2@m">
            <div class="uk-card card2 uk-transition-toggle">
                <div class="uk-inline-clip uk-width-1-1 uk-position-relative">
                    <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url('imgs/product-list10.png'); padding-top: calc(120% + 15px);"></div>
                    <div class="uk-overlay uk-overlay-primary uk-position-cover uk-transition-fade"></div>
                    <div class=" uk-transition-fade uk-position-center uk-text-center uk-padding-small">
                        <a href="#" class="btn_add_cart uk-button uk-button-large uk-button-default bg-white uk-flex-inline uk-flex-middle uk-flex-center"><span uk-icon="cart"></span> add to cart</a>
                    </div>Showing 1–10 of 28 results
                    <div class="product-item-action uk-position-top-right">
                        <a href="#"><span uk-icon="heart"></span></a>
                        <a href="#"><span uk-icon="plus"></span></a>
                        <a href="#"><span uk-icon="link"></span></a>
                    </div>
                </div>
                <div class="uk-card-body uk-text-center uk-padding-small uk-position-bottom uk-flex uk-flex-middle uk-flex-between">
                    <h3 class="uk-card-title"><a href="#">Velvet backpack</a></h3>
                    <div class="price"><span>235.000 VND</span></div>
                </div>
            </div>
        </div>
        <div>
            <a href="#" class="uk-button uk-button-secondary btn-readmore">load more</a>
        </div>
    </div>
</div>
<div class="uk-section-small uk-padding-remove-top uk-hidden@m">
    <div class="uk-container">
        <div class="uk-grid uk-grid-small uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-6@l uk-flex-center" uk-margin>
            <?php for ($i=1; $i<=8; $i++) { ?>
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
            <div class="uk-text-center">
                <a href="#" class="uk-button uk-button-secondary btn-readmore">load more</a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
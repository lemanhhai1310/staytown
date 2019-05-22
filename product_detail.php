<?php include('header.php'); ?>
<?php include('breadcrumb1.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid uk-flex-center uk-margin-medium">
            <div class="uk-width-4-5@m">
                <div class="uk-child-width-1-2@m uk-grid">
                    <div>
                        <div class="uk-position-relative" uk-slideshow="animation: pull; ratio: 472:571">

                            <div class="uk-position-relative" uk-lightbox>
                                <ul class="uk-slideshow-items uk-margin">
                                    <?php for ($i=0; $i<=6; $i++) { ?>
                                        <li>
                                            <img class="uk-width-1-1" src="imgs/img<?php echo $i + 1; ?>.png" alt="" uk-cover>
                                            <a href="imgs/img<?php echo $i + 1; ?>.png" class="uk-position-bottom-right" style="right: 15px; bottom: 15px"><img src="imgs/btn-zoom.png" alt=""></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                                <a href="https://www.youtube.com/watch?v=YE7VzlLtp-4" style="left: 15px; bottom: 15px" class="uk-position-bottom-left btn-play"><img src="imgs/btn-play.png" alt=""></a>
                            </div>
                            <div class="uk-padding uk-padding-remove-top">
                                <div uk-slider="finite: false; center: true">

                                    <div class="uk-position-relative">

                                        <div class="uk-slider-container uk-light">
                                            <ul id="thumb1" class="uk-slider-items uk-child-width-1-3 uk-child-width-1-3@s uk-child-width-1-3@m uk-grid-small" uk-grid>
                                                <?php for ($i=0; $i<=6; $i++) { ?>
                                                    <li class="item11" uk-slideshow-item="<?php echo $i; ?>"><a href="#"><img class="uk-width-1-1" src="imgs/img<?php echo $i + 1; ?>.png" alt=""></a></li>
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

                                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin" hidden></ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box_5">
                            <h1 class="title">Late shoulder shirt</h1>
                            <p class="price"><span>205.000 VND</span></p>
                            <p class="desc">The Spring Summer 2018 collection draws inspiration from the House archives as well as from diverse cultures and periods</p>
                        </div>
                        <form class="uk-form-stacked">
                            <div class="uk-grid uk-child-width-1-2@s">
                                <div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-text">SIZE</label>
                                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                            <select>
                                                <option value="">Medium Size (M)</option>
                                                <option value="1">Option 01</option>
                                                <option value="2">Option 02</option>
                                                <option value="3">Option 03</option>
                                                <option value="4">Option 04</option>
                                            </select>
                                            <button class="uk-button uk-button-default uk-text-capitalize uk-width-1-1" type="button" tabindex="-1">
                                                <span></span>
                                                <span uk-icon="icon: chevron-down"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="uk-grid uk-child-width-1-2@s uk-grid-medium" uk-margin>
                                <div>
                                    <div class="box_6">
                                        <input id="spinner" class="uk-input" type="text" placeholder="" value="1">
                                    </div>
                                </div>
                                <div>

                                </div>
                                <div>
                                    <a href="#" id="addcart" class="uk-button uk-button-default uk-width-1-1 uk-button-large"><img src="imgs/shopping-cart%20(1).png" alt=""> add to cart</a>
                                </div>
                                <div>
                                    <a href="#" id="store" class="uk-button uk-button-secondary uk-width-1-1 uk-button-large"><img src="imgs/location1.png" alt=""> find store</a>
                                </div>
                            </div>
                            <hr>
                            <div class="box_7">
                                <a href="#">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    Add to Favorite
                                </a>
                            </div>
                            <ul class="uk-margin uk-child-width-auto uk-grid-small list_social uk-grid" uk-grid="">
                                <li class="uk-first-column"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                            <div>
                                <span>PRODUCT: SHIRT</span>
                            </div>
                        </form>
                    </div>
                </div>
                <ul uk-tab>
                    <li><a class="uk-text-capitalize" href="#">Description</a></li>
                    <li><a class="uk-text-capitalize" href="#">Details</a></li>
                    <li><a class="uk-text-capitalize" href="#">Reviews(2)</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li>
                        <article>
                            <p>Introducing the Gucci-Dapper Dan collection for Fall Winter 2018. In the ‘80s and ‘90s, Dapper Dan, a well-known Harlem designer invented his own creations by reconstructing luxury brands' motifs into personalized coveted pieces. Now, through his and Alessandro Michele’s artistic vision, a contemporary interpretation of streetwear and accessories has been developed for a new generation. A mix of unisex, men’s and women’s styles and accessories are introduced in specially produced materials.</p>
                            <ul class="uk-list uk-list-bullet">
                                <li>Off-white technical nylon with beige GG pattern and green nylon details</li>
                                <li>Rubber Gucci patch</li>
                                <li>Embroidered dragon and metallic gold leather Gucci appliqués on the back</li>
                                <li>Unlined</li>
                                <li>Contrast knit rib trims</li>
                                <li>Front pockets</li>
                                <li>Interior green and red Web Gucci-Dapper Dan label</li>
                                <li>Zipper closure</li>
                                <li>Oversize fit</li>
                                <li>100% nylon</li>
                                <li>Made in Italy</li>
                                <li>This style is unisex. The male model is 6'2" tall, the female model is 5'10" tall and they are both wearing a size small</li>
                                <li>This item will be delivered in special edition Gucci-Dapper Dan packaging.</li>
                            </ul>
                        </article>
                    </li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                </ul>
            </div>
        </div>
        <div class="uk-child-width-1-2@l uk-grid">
            <div>

            </div>
            <div>
                1
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
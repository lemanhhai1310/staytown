<?php include('header.php'); ?>
<?php include('breadcrumb.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid-medium" uk-grid>
            <div class="uk-width-expand@m">
                <div class="top_product uk-margin uk-flex uk-flex-middle uk-flex-between">
                    <div>
                        <span class="txt2">550+ pieces</span>
                    </div>
                    <div class="order_by" uk-form-custom="target: true">
                        <select>
                            <option value="1">Sort by</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <span></span>
                    </div>
                </div>
                <div class="box_fil uk-margin">
                    <button href="#" class="uk-button uk-button-default uk-position-relative">
                        Black
                        <a class="uk-alert-close uk-position-center-right" uk-close></a>
                    </button>
                    <button href="#" class="uk-button uk-button-default uk-position-relative">
                        1017 alyx 9sm
                        <a class="uk-alert-close uk-position-center-right" uk-close></a>
                    </button>
                </div>
                <div class="uk-grid uk-grid-small uk-child-width-1-2 uk-child-width-1-3@m" uk-margin>
                    <?php
                    $cars = array
                    (
                        array(
                            'img1' => 'https://cdn-images.farfetch-contents.com/13/78/41/64/13784164_17139813_300.jpg',
                            'img2' => 'https://cdn-images.farfetch-contents.com/13/78/41/64/13784164_17139824_300.jpg',
                        ),
                        array(
                            'img1' => 'https://cdn-images.farfetch-contents.com/13/84/95/07/13849507_17354086_300.jpg',
                            'img2' => 'https://cdn-images.farfetch-contents.com/13/84/95/07/13849507_17354088_300.jpg',
                        ),
                        array(
                            'img1' => 'https://tpc.googlesyndication.com/pagead/imgad?id=CICAgKD75JuNJhABGAEyCDAQOTY39VQr',
                            'img2' => 'https://cdn-images.farfetch-contents.com/13/84/95/07/13849507_17354088_300.jpg',
                        ),
                        array(
                            'img1' => 'https://cdn-images.farfetch-contents.com/13/84/96/63/13849663_17354132_300.jpg',
                            'img2' => 'https://cdn-images.farfetch-contents.com/13/84/96/63/13849663_17354134_300.jpg',
                        ),
                        array(
                            'img1' => 'https://cdn-images.farfetch-contents.com/13/60/88/29/13608829_17536673_300.jpg',
                            'img2' => 'https://cdn-images.farfetch-contents.com/13/60/88/29/13608829_17536692_300.jpg',
                        ),
                        array(
                            'img1' => 'https://cdn-images.farfetch-contents.com/13/88/28/96/13882896_17462231_300.jpg',
                            'img2' => 'https://cdn-images.farfetch-contents.com/13/88/28/96/13882896_17462234_300.jpg',
                        ),
                    );
                    foreach ($cars as $key => $value) { ?>
                    <div>
                        <div class="uk-card card9 uk-text-center">
                            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                                <img class="uk-position-top-right uk-position-z-index fc849e" src="imgs/download.svg" alt="">
                                <img src="<?php echo $value['img1']; ?>" alt="">
                                <img class="uk-transition-scale-up uk-position-cover" src="<?php echo $value['img2']; ?>" alt="">
                            </div>
                            <div class="uk-card-body uk-padding-small">
                                <span class="brand1">New Season</span>
                                <h3 class="title1 uk-text-uppercase">Duskii</h3>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="uk-width-1-4@m uk-flex-first@m">
                <ul class="sidebar-left-product" uk-accordion="multiple: true">
                    <li class="uk-open">
                        <a class="uk-accordion-title" href="#"><span>Category</span></a>
                        <div class="uk-accordion-content">
                            <ul class="uk-list menu1">
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Activewear</a></li>
                                <li><a href="#">Bags</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Demi-Fine Jewelry</a></li>
                                <li><a href="#">Fine Jewelry</a></li>
                                <li><a href="#">Jewelry</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Vintage</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span>Designer</span></a>
                        <div class="uk-accordion-content">
                            <div class="uk-margin uk-margin-top">
                                <form class="uk-search uk-search-default uk-width-1-1">
                                    <span uk-search-icon></span>
                                    <input class="uk-search-input" type="search" placeholder="Search...">
                                </form>
                            </div>
                            <div class="uk-height-max-medium uk-overflow-auto">
                                <b class="txt3">0-9</b>
                                <div class="uk-grid-collapse uk-grid" uk-grid>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> 1017 alyx 9sm</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> 3.1 phillip lim</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> 7 for all mankind</label>
                                    </div>
                                </div>
                                <b class="txt3">A</b>
                                <div class="uk-grid-collapse uk-grid" uk-grid>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> a.f.vandevorst</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> a_plan_application</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> acne studios</label>
                                    </div>

                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> alanui</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> aleksandre akhalkatsishvili</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> alessandra rich</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> alevì</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> alexander mcqueen</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> alexander wang</label>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <label class="uk-display-block hi1"><input class="uk-checkbox" type="checkbox"> alexandre birman</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span>Colour</span></a>
                        <div class="uk-accordion-content uk-height-max-large uk-overflow-auto">
                            <div class="uk-margin color1">
                                <label><input class="uk-radio" type="radio" name="radio2" checked> Black</label>
                            </div>
                            <div class="uk-margin color1">
                                <label><input class="uk-radio" type="radio" name="radio2"> Blue</label>
                            </div>
                            <div class="uk-margin color1">
                                <label><input class="uk-radio" type="radio" name="radio2"> Brown</label>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#"><span>Price</span></a>
                        <div class="uk-accordion-content">
                            <div class="uk-margin">
                                <div class="uk-margin-top uk-margin-bottom" id="slider-range"></div>
                                <input class="uk-width-1-1" type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
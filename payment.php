<?php include('header.php'); ?>
<?php include('breadcrumb2.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#payment</h2>
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-3-5@m">
                <ul class="payment_tab uk-subnav uk-subnav-pill uk-child-width-expand uk-grid-collapse" uk-grid uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                    <li><a href="#">info shipping</a></li>
                    <li><a href="#">payment method</a></li>
                    <li class="uk-active"><a href="#">check out</a></li>
                </ul>
                <ul class="uk-switcher uk-margin">
                    <li>
                        <div class="uk-card card_sign uk-card-default uk-card-body uk-width-1-1 uk-text-center">
                            <div class="uk-grid uk-flex-center">
                                <div class="uk-width-3-5@m">
                                    <form class="uk-form-stacked uk-margin-large uk-grid-small" uk-grid>
                                        <div class="uk-width-1-1 sign_txt uk-margin-medium">
                                            <h1 class="title uk-text-uppercase">SHIPPING INFORMATION</h1>
                                            <p class="desc">Check your info to shipping</p>
                                        </div>
                                        <div class="uk-width-1-1 uk-text-left">
                                            <label class="uk-form-label" for="form-stacked-text">Full name</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="" value="Vu Huy Chuong" disabled>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-text-left">
                                            <label class="uk-form-label" for="form-stacked-text">Email</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="" value="hai.lemanh.1310@gmail.com" disabled>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-text-left">
                                            <label class="uk-form-label" for="form-stacked-text">Phone</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="tel" placeholder="" value="0989172546" disabled>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-text-left">
                                            <label class="uk-form-label" for="form-stacked-text">Address</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="" value="81/8 Chu Van An" disabled>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2@s uk-text-left">
                                            <label class="uk-form-label" for="form-stacked-text">City</label>
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select disabled>
                                                    <option value="">Ho Chi Minh</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1 uk-text-capitalize uk-text-truncate" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-2@s uk-text-left">
                                            <label class="uk-form-label" for="form-stacked-text">District</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="text" placeholder="" value="Binh Thanh" disabled>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-between">
                                            <button uk-switcher-item="next" type="button" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> Next</button>
                                            <a href="editinfo.php" class="uk-button uk-button-default uk-text-capitalize uk-flex uk-flex-middle">edit info</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-card card_sign c11 uk-card-default uk-grid-collapse uk-grid-divider uk-margin" uk-grid>
                            <div class="uk-width-2-5@m uk-visible@m">
                                <div class="uk-card-secondary uk-position-left uk-width-small width1"></div>
                                <label class="uk-display-block uk-padding-small uk-position-relative pay1">
                                    <input class="uk-radio" type="radio" name="radio2" checked>
                                    <span class="uk-position-cover">VISA / MASTER CARD</span>
                                </label>
                                <label class="uk-display-block uk-padding-small uk-position-relative pay1">
                                    <input class="uk-radio" type="radio" name="radio2">
                                    <span class="uk-position-cover">ATM BANKING</span>
                                </label>
                                <label class="uk-display-block uk-padding-small uk-position-relative pay1">
                                    <input class="uk-radio" type="radio" name="radio2">
                                    <span class="uk-position-cover">NAPAS</span>
                                </label>
                                <label class="uk-display-block uk-padding-small uk-position-relative pay1">
                                    <input class="uk-radio" type="radio" name="radio2">
                                    <span class="uk-position-cover">MOMO</span>
                                </label>
                                <label class="uk-display-block uk-padding-small uk-position-relative pay1">
                                    <input class="uk-radio" type="radio" name="radio2">
                                    <span class="uk-position-cover">ZALO PAY</span>
                                </label>
                                <label class="uk-display-block uk-padding-small uk-position-relative pay1">
                                    <input class="uk-radio" type="radio" name="radio2">
                                    <span class="uk-position-cover">COD</span>
                                </label>
                            </div>
                            <div class="uk-width-expand@m">
                                <div class="uk-card-body body1">
                                    <div class="sign_txt uk-margin-medium uk-text-center">
                                        <h1 class="title uk-text-uppercase">Payment methods</h1>
                                        <p class="desc">Choose form of payment</p>
                                        <div class="uk-margin uk-hidden@m">
                                            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">VISA / MASTER CARD</option>
                                                    <option value="1">ATM BANKING</option>
                                                    <option value="2">NAPAS</option>
                                                    <option value="3">MOMO</option>
                                                    <option value="4">ZALO PAY</option>
                                                </select>
                                                <button class="uk-button uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span uk-icon="icon: chevron-down"></span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="uk-flex uk-flex-center uk-flex-bottom uk-margin">
                                            <span style="margin-right: 10px;">We accept</span>
                                            <div>
                                                <img src="imgs/visa.png" alt="">
                                                <img src="imgs/mastercard.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-grid-small" uk-grid>
                                        <div class="uk-width-1-1">
                                            <label class="uk-form-label" for="form-stacked-text">Number Card</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="uk-width-2-3">
                                            <label class="uk-form-label" for="form-stacked-text">Date</label>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-1-2">
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="MM">
                                                    </div>
                                                </div>
                                                <div class="uk-width-1-2">
                                                    <div class="uk-form-controls">
                                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-width-1-3">
                                            <label class="uk-form-label" for="form-stacked-text">CSV</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1">
                                            <label class="uk-form-label" for="form-stacked-text">Full Name</label>
                                            <div class="uk-form-controls">
                                                <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                            </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-margin uk-grid-small uk-flex-center uk-flex uk-child-width-auto uk-grid">
                                            <label><input class="uk-checkbox" type="checkbox"> Invoice receipt</label>
                                        </div>
                                        <div class="uk-width-1-1 uk-flex-center uk-flex">
                                            <button uk-switcher-item="next" type="button" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box_cart1 card_sign box_checkout">
                            <div class="box_header uk-text-white uk-padding-small uk-flex uk-flex-middle uk-flex-between">
                                <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">product</h3>
                                <span>3 product in your cart</span>
                            </div>
                            <div class="box_body uk-padding-small">
                                <div class="uk-grid uk-flex-center">
                                    <div class="uk-width-4-5@l">
                                        <?php for ($i=1; $i<=3; $i++) { ?>
                                            <div class="uk-card card8 uk-margin card1 uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex-middle" uk-grid>
                                                <div>
                                                    <img class="uk-width-1-1" src="imgs/img1.png" alt="">
                                                </div>
                                                <div>
                                                    <div class="uk-card-body">
                                                        <h3 class="uk-card-title"><a href="#">Late shoulder shirt</a></h3>
                                                        <table class="uk-table uk-table-middle table1 uk-margin-small-bottom">
                                                            <tbody>
                                                            <tr>
                                                                <td>Amount</td>
                                                                <td>
                                                                    <div uk-form-custom="target: > * > span:first-child">
                                                                        <select>
                                                                            <?php for ($j=1; $j<=3; $j++) { ?>
                                                                                <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                        <button class="uk-button uk-button-default btn2" type="button" tabindex="-1">
                                                                            <span></span>
                                                                            <span uk-icon="icon: chevron-down"></span>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Size</td>
                                                                <td>Medium Size</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Color</td>
                                                                <td>Black and White</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Price</td>
                                                                <td>250,000 VNĐ</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <a href="#" class="uk-button remove_cart1 uk-button-default uk-text-capitalize">Remove Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="box_1 uk-text-white">
                                <div class="uk-grid uk-child-width-1-2@l uk-flex-center">
                                    <div>
                                        <table class="uk-table uk-table-divider">
                                            <tbody>
                                            <tr>
                                                <td>PRICE</td>
                                                <td class="uk-text-right">750,000 VND</td>
                                            </tr>
                                            <tr>
                                                <td>SHIP FEE</td>
                                                <td class="uk-text-right">0 VND</td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL</td>
                                                <td class="uk-text-right">750,000 VND</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="box_footer uk-padding-small uk-text-center">
                                <a href="mycart.php" class="uk-button uk-button-default">add voucher code</a>
                                <a href="payment.php" class="uk-button uk-button-secondary">payment</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
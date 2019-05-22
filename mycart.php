<?php include('header.php'); ?>
<?php include('breadcrumb1.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#my cart</h2>
        <div class="uk-grid uk-grid-small" uk-margin>
            <div class="uk-width-3-4@l">
                <div class="uk-card uk-card-default card7">
                    <div class="uk-card-header uk-card-secondary uk-flex uk-flex-middle uk-flex-between">
                        <h3 class="title uk-h6 uk-text-uppercase uk-margin-remove">PRODUCT</h3>
                        <span>3 product in your cart</span>
                    </div>
                    <div class="uk-card-body">
                        <?php for ($i=1; $i<=3; $i++) { ?>
                            <div class="uk-card uk-margin card1 uk-grid-collapse uk-margin uk-flex-middle" uk-grid>
                                <div class="uk-width-1-6@s">
                                    <img class="uk-width-1-1" src="imgs/img1.png" alt="">
                                </div>
                                <div class="uk-width-expand@s">
                                    <div class="uk-flex uk-flex-middle uk-flex-between uk-flex-column uk-flex-row@m uk-card-body uk-padding-remove-right@s uk-padding-remove-top@s uk-padding-remove-bottom@s">
                                        <h3 class="uk-card-title uk-text-nowrap uk-margin-remove@m"><a class="uk-link-reset" href="#">Late shoulder shirt</a></h3>
                                        <table class="uk-table uk-table-middle table1 uk-margin-small-bottom uk-hidden@s">
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
                                        <table class="uk-table uk-table-middle uk-text-center table2 uk-visible@s">
                                            <thead>
                                            <tr>
                                                <th class="uk-text-center">Amount</th>
                                                <th class="uk-text-center">Size</th>
                                                <th class="uk-text-center">Color</th>
                                                <th class="uk-text-center">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
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
                                                <td>M</td>
                                                <td>White</td>
                                                <td>250,000VND</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <a href="#" class="uk-button uk-width-1-1 uk-width-auto@s uk-text-nowrap remove_cart1 uk-button-default uk-text-capitalize">Remove Cart</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@l">
                <div class="uk-card uk-card-default card7">
                    <div class="uk-card-header uk-card-secondary uk-flex uk-flex-middle uk-flex-between">
                        <h3 class="title uk-h6 uk-text-uppercase uk-margin-remove">voucher code</h3>
                        <span uk-icon="plus-circle"></span>
                    </div>
                    <div class="uk-card-body" uk-margin>
                        <table class="uk-table uk-table-divider uk-margin-remove">
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
                        <a href="payment.php" class="uk-button uk-button-secondary uk-width-1-1">payment</a>
                        <a href="." class="uk-button uk-button-default uk-width-1-1">continue shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
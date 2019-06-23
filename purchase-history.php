<?php include('header.php'); ?>
<?php include('breadcrumb2.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#Purchase history</h2>
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-1-1@m">
                <div class="box_cart1 card_sign box_checkout">
                    <div class="box_header uk-text-white uk-padding-small uk-flex uk-flex-middle uk-flex-between">
                        <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">#3</h3>
                        <span>17/05/2019</span>
                    </div>
                    <div class="box_body uk-padding-small">
                        <div class="uk-grid uk-child-width-1-2@m" uk-grid>
                            <?php for ($i=1; $i<=3; $i++) { ?>
                                <div>
                                    <div class="uk-card card8 uk-margin card1 uk-grid-collapse uk-child-width-1-2 uk-margin uk-flex-middle" uk-grid>
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
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="box_1 uk-text-white">
                        <div class="uk-grid uk-child-width-1-1@l uk-flex-center">
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
                        <a href="#" class="uk-button uk-button-default">REMOVE LIST</a>
                        <a href="#" class="uk-button uk-button-secondary">print order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
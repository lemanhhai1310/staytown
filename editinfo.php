<?php include('header.php'); ?>
<?php include('breadcrumb2.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-medium-bottom">#payment</h2>
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-3-5@m">
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
                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="" value="Vu Huy Chuong">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="" value="hai.lemanh.1310@gmail.com">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Phone</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="tel" placeholder="" value="0989172546">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Address</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="" value="81/8 Chu Van An">
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">City</label>
                                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                        <select>
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
                                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="" value="Binh Thanh">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-between">
                                    <a href="payment.php" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> update info</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
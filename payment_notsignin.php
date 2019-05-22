<?php include('header.php'); ?>
<?php include('breadcrumb2.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <h2 class="title_h uk-text-uppercase uk-text-center uk-margin-large-bottom">#payment</h2>
        <div class="uk-grid uk-child-width-1-2@l uk-grid-small uk-grid-divider pay2 uk-visible@m" uk-margin>
            <div>
                <div class="uk-card card_sign uk-card-default uk-card-body uk-width-1-1 uk-height-1-1 uk-text-center">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-2-3@m">
                            <form class="uk-form-stacked uk-margin-large">
                                <div class="sign_txt uk-margin-medium">
                                    <h1 class="title uk-text-uppercase">sign in</h1>
                                    <p class="desc">Enter your info to sign in on Stay town</p>
                                </div>
                                <div class="uk-margin uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-margin uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="password" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <button type="submit" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> sign in</button>
                                </div>

                            </form>
                            <hr>
                            <div class="uk-margin-small">
                                <a href="#"><img src="imgs/fb-logo.png" alt=""></a>
                            </div>
                            <div class="uk-margin-small">
                                <a href="#"><img src="imgs/google.png" alt=""></a>
                            </div>
                            <hr>
                            <a href="signup.php" class="link_create_acc uk-link-reset">Create a Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card card_sign uk-card-default uk-card-body uk-width-1-1 uk-height-1-1 uk-text-center">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-2-3@m">
                            <form class="uk-form-stacked uk-margin-large uk-grid-small" uk-grid>
                                <div class="uk-width-1-1 sign_txt uk-margin-medium">
                                    <h1 class="title uk-text-uppercase">guest</h1>
                                    <p class="desc">Enter your info to payment</p>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Full name</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Phone</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Address</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
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
                                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-between">
                                    <a href="payment.php" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> next</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-hidden@m">
            <ul class="payment_tab uk-subnav uk-subnav-pill uk-child-width-expand uk-grid-collapse" uk-grid uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                <li><a href="#">sign in</a></li>
                <li class="uk-active"><a href="#">guest</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-card card_sign uk-card-default uk-card-body uk-width-1-1 uk-height-1-1 uk-text-center">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-2-3@m">
                                <form class="uk-form-stacked uk-margin-large">
                                    <div class="sign_txt uk-margin-medium">
                                        <h1 class="title uk-text-uppercase">sign in</h1>
                                        <p class="desc">Enter your info to sign in on Stay town</p>
                                    </div>
                                    <div class="uk-margin uk-text-left">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin uk-text-left">
                                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="password" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <button type="submit" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> sign in</button>
                                    </div>

                                </form>
                                <hr>
                                <div class="uk-margin-small">
                                    <a href="#"><img src="imgs/fb-logo.png" alt=""></a>
                                </div>
                                <div class="uk-margin-small">
                                    <a href="#"><img src="imgs/google.png" alt=""></a>
                                </div>
                                <hr>
                                <a href="signup.php" class="link_create_acc uk-link-reset">Create a Account</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="uk-card card_sign uk-card-default uk-card-body uk-width-1-1 uk-height-1-1 uk-text-center">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-2-3@m">
                                <form class="uk-form-stacked uk-margin-large uk-grid-small" uk-grid>
                                    <div class="uk-width-1-1 sign_txt uk-margin-medium">
                                        <h1 class="title uk-text-uppercase">guest</h1>
                                        <p class="desc">Enter your info to payment</p>
                                    </div>
                                    <div class="uk-width-1-1 uk-text-left">
                                        <label class="uk-form-label" for="form-stacked-text">Full name</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-text-left">
                                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-text-left">
                                        <label class="uk-form-label" for="form-stacked-text">Phone</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-text-left">
                                        <label class="uk-form-label" for="form-stacked-text">Address</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
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
                                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-width-1-1 uk-flex uk-flex-middle uk-flex-between">
                                        <a href="payment.php" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> next</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
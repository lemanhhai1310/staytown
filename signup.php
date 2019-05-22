<?php include('header.php'); ?>
<?php include('breadcrumb2.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-3-5@m">
                <div class="uk-card card_sign uk-card-default uk-card-body uk-width-1-1 uk-text-center">
                    <div class="uk-grid uk-flex-center">
                        <div class="uk-width-1-2@m">
                            <form class="uk-form-stacked uk-margin-large">
                                <div class="sign_txt uk-margin-medium">
                                    <h1 class="title uk-text-uppercase">sign up</h1>
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
                                <div class="uk-margin uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Fullname</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-margin uk-text-left">
                                    <label class="uk-form-label" for="form-stacked-text">Phone</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" id="form-stacked-text" type="tel" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <button type="submit" class="uk-button uk-button-secondary uk-text-capitalize uk-flex uk-flex-middle"><span uk-icon="check"></span> Create account</button>
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
                            <a href="signin.php" class="link_create_acc uk-link-reset">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
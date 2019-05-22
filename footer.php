<div class="uk-section block1">
    <div class="uk-container">
        <div class="uk-grid uk-grid-medium@m uk-grid-small uk-flex-middle">
            <div class="uk-width-1-3@m">
                <div class="box1 uk-text-center uk-text-left@m uk-margin-bottom uk-margin-remove@m">
                    <h3 class="title">OUR NEWSLETTER</h3>
                    <p>Sale up to 20% off for your next purchase in this month!</p>
                </div>
            </div>
            <div class="uk-width-expand">
                <input class="txt1 uk-input uk-form-large@m bg-transparent" type="text" placeholder="">
            </div>
            <div class="uk-width-auto">
                <button type="submit" class="btn1 uk-button uk-button-secondary uk-button-large@m">submit</button>
            </div>
        </div>
        <div class="uk-grid uk-flex-between@m uk-flex-center">
            <div>
                <ul class="uk-child-width-auto uk-grid-small list_social uk-grid" uk-grid="">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div>
                <ul class="uk-child-width-auto uk-grid-small list_social uk-grid" uk-grid="">
                    <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="top uk-section">
        <div class="uk-container">
            <div class="uk-grid uk-child-width-auto@m">
                <div class="uk-width-1-3@m">
                    <figure class="uk-text-center uk-logo_f">
                        <a href="."><img src="imgs/logo.svg" alt=""></a>
                        <figcaption>
                            We live not according to reason, <br>
                            but according to fashion
                        </figcaption>
                    </figure>
                </div>
                <?php for ($i=1; $i<=3; $i++) { ?>
                <div class="uk-width-expand@m uk-visible@m">
                    <h3 class="title_f uk-text-uppercase">product</h3>
                    <ul class="uk-list list1_f">
                        <li><a href="#">Shirt</a></li>
                        <li><a href="#">Trousers</a></li>
                        <li><a href="#">Skirt</a></li>
                        <li><a href="#">Shoes</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <?php } ?>
                <div class="uk-width-expand@m uk-visible@m">
                    <h3 class="title_f uk-text-uppercase">Certification</h3>
                    <div class="uk-margin"><a href="#"><img src="imgs/baobct.svg" alt=""></a></div>
                    <div class="uk-margin"><a href="#"><img src="imgs/dkybct.svg" alt=""></a></div>
                </div>
                <div class="uk-hidden@m">
                    <ul class="uk-margin-top accordion_f" uk-accordion>
                        <?php for ($i=1; $i<=3; $i++) { ?>
                        <li>
                            <a class="uk-accordion-title" href="#"><h3 class="title_f uk-text-uppercase uk-margin-remove">product</h3></a>
                            <div class="uk-accordion-content">
                                <ul class="uk-list list1_f">
                                    <li><a href="#">Shirt</a></li>
                                    <li><a href="#">Trousers</a></li>
                                    <li><a href="#">Skirt</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Accessories</a></li>
                                </ul>
                            </div>
                        </li>
                        <?php } ?>
                        <li class="uk-open">
                            <a class="uk-accordion-title" href="#"><h3 class="title_f uk-text-uppercase">certification</h3></a>
                            <div class="uk-accordion-content uk-margin-remove">
                                <div class="uk-grid uk-grid-small uk-child-width-1-2">
                                    <div><a href="#"><img src="imgs/baobct.svg" alt=""></a></div>
                                    <div><a href="#"><img src="imgs/dkybct.svg" alt=""></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="uk-container">
            <div class="uk-flex uk-flex-middle uk-flex-between uk-flex-column uk-flex-row@m uk-flex-row">
                <span>© 2018 Stay Town. All Rights Reserved.</span>
                <ul class="uk-breadcrumb uk-margin-remove site_map">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="back-to-top">
    <a href="javascript:void(0);" class="uk-button uk-button-default uk-flex uk-flex-middle bg-white"><span class="uk-visible@m">Go to top</span> <img src="imgs/Arrow%203.svg" alt=""></a>
</div>
</section>
</body>
</html>
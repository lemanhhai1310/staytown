<?php include('header.php'); ?>
<?php include('slide_home.php'); ?>
<div class="uk-section-small">
    <div class="uk-container">
        <div class="uk-grid uk-grid-collapse" uk-margin>
            <div class="uk-width-expand@m">
                <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14893.212867816494!2d105.81003855228278!3d21.06054840291492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1551242955818" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="uk-width-1-3@m uk-flex-first@m">
                <div class="uk-card uk-card-default uk-height-1-1 card6">
                    <div class="uk-card-header uk-card-secondary uk-text-uppercase">find store</div>
                    <div class="uk-card-body uk-padding-remove uk-height-max-medium@m">
                        <?php for ($i=1; $i<=3; $i++) { ?>
                        <a class="uk-link-reset <?php if($i == 1) echo "uk-active" ?>" href="#">
                            <div class="uk-padding">
                                <h3 class="uk-card-title uk-text-uppercase">stay town phố huế</h3>
                                <ul class="uk-list uk-margin-remove">
                                    <li><span uk-icon="location"></span> 316A Phố Huế, Hai Bà Trưng, Hà Nội</li>
                                    <li><span uk-icon="receiver"></span> 0868 670 316</li>
                                    <li><span uk-icon="clock"></span> 9:00 - 22:00</li>
                                </ul>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
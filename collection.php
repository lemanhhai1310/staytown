<?php include('header.php'); ?>
<?php include('slide_home.php'); ?>
<?php include('breadcrumb.php'); ?>
<div class="uk-section-small block_collect">
    <div class="uk-container">
        <?php for ($i=1; $i<=4; $i++) { ?>
        <div class="uk-position-relative box_3 uk-margin-medium">
            <div class="uk-grid <?php if($i%2==0){echo 'uk-flex-right';}else{echo 'uk-flex-left';}?>">
                <div class="uk-width-5-6 uk-width-2-3@s">
                    <div class="box_4 uk-margin <?php if($i%2==0){echo 'uk-text-right uk-text-left@m';}else{echo 'uk-text-left uk-text-left@m';}?>">
                        <h3 class="title">YOUNG GIRL</h3>
                        <p class="desc">L’Estrange Is Challenging</p>
                    </div>
                    <img src="imgs/colect<?php echo $i; ?>-1.png" alt="">
                </div>
                <div class="uk-width-5-6 uk-width-1-2@s uk-padding-remove <?php if($i%2==0){echo 'uk-position-bottom-left';}else{echo 'uk-position-bottom-right';}?>">
                    <img class="" src="imgs/colect<?php echo $i; ?>-2.png" alt="">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include('footer.php'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Staytown - Trang chủ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="assets/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/fancybox-master/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
    <script src="assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $( function() {
            var spinner = $( "#spinner" ).spinner();
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 1500000,
                values: [ 0, 500000 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val(ui.values[ 0 ] + " VND" + " - " + ui.values[ 1 ] + " VND");
                }
            });
            $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) + " VND" + " - " + $( "#slider-range" ).slider( "values", 1 ) + " VND");
        } );
    </script>
</head>
<body>
<section id="root" class="uk-height-viewport uk-offcanvas-content">
<?php include('menumobile-reveal.php'); ?>
<header id="header" uk-sticky>
    <div class="uk-container">
        <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
            <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

                <div class="uk-navbar-item uk-width-expand uk-padding-remove">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input" type="search" placeholder="Tìm kiếm..." autofocus>
                    </form>
                </div>

                <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

            </div>
            <div class="uk-navbar-left nav-overlay">
                <a class="uk-navbar-toggle uk-hidden@m uk-padding-remove-left" href="#">
                    <div id="m_nav_menu" class="m_nav menu" uk-toggle="target: #offcanvas-reveal">
                        <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                        <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                    </div>
                    <span class="uk-margin-small-left" hidden>Menu</span>
                </a>
                <a class="uk-navbar-toggle uk-padding-remove-left" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                <ul class="uk-navbar-nav">
                    <li class="uk-visible@m menu_txt"><a href="catalog.php">catalog</a></li>
                    <li class="uk-visible@m menu_txt">
                        <a href="product-list.php">product <span uk-icon="icon: chevron-down"></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="uk-visible@m menu_txt">
                        <a href="collection.php">collection <span uk-icon="icon: chevron-down"></span></a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-center nav-overlay">
                <a class="uk-navbar-item uk-logo" href="."><img src="imgs/logo.svg" alt=""></a>
            </div>
            <div class="uk-navbar-right nav-overlay">
                <ul class="uk-navbar-nav">
                    <li class="uk-visible@m menu_txt"><a href="news.php">news</a></li>
                    <li class="uk-visible@m menu_txt"><a href="about_us.php">about us</a></li>
                    <li class="uk-visible@m menu_txt"><a href="store.php">store</a></li>
                    <li class="cart">
                        <a class="icon_cart" href="mycart.php">
                            <span class="uk-position-relative" uk-icon="cart">
                                <span class="uk-badge bg-white uk-position-top-right uk-position-z-index">3</span>
                            </span>
                        </a>
                        <div class="uk-navbar-dropdown uk-padding-remove uk-margin-remove uk-width-large uk-visible@m">
                            <div class="box_cart1">
                                <div class="box_header uk-text-white uk-padding-small uk-flex uk-flex-middle uk-flex-between">
                                    <h3 class="uk-card-title uk-text-uppercase uk-margin-remove">product</h3>
                                    <span>3 product in your cart</span>
                                </div>
                                <div class="box_body uk-padding-small">
                                    <div class="uk-height-max-medium uk-overflow-auto">
                                        <?php for ($i=1; $i<=3; $i++) { ?>
                                            <div class="uk-card uk-margin card1 uk-grid-collapse uk-child-width-1-2@s uk-margin uk-flex-middle" uk-grid>
                                                <div>
                                                    <img src="imgs/img1.png" alt="">
                                                </div>
                                                <div>
                                                    <div class="uk-card-body uk-padding-remove-right uk-padding-remove-top uk-padding-remove-bottom">
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
                                                        <a href="#" class="uk-button uk-width-1-1 remove_cart1 uk-button-default uk-text-capitalize">Remove Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="box_footer uk-padding-small uk-text-center">
                                    <a href="mycart.php" class="uk-button uk-button-default">check my cart</a>
                                    <a href="payment.php" class="uk-button uk-button-secondary">payment</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="user uk-visible@m">
                        <a href="#" class="uk-padding-remove-right"><span uk-icon="user"></span></a>
                        <div class="uk-navbar-dropdown uk-padding-remove uk-margin-remove uk-width-small menu_acc">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">welcome Nguyen</a></li>
                                <li><a href="account.php">account</a></li>
                                <li><a href="#">favorite LIST</a></li>
                                <li><a href="signin.php">sign in</a></li>
                                <li><a href="signup.php">sign up</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
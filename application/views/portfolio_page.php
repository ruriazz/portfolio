<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vCard template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- iOS meta tags & icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="SISDABIMA">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/icons/Icon-192.png'); ?>">

    <meta name="author" content="ruriazz | warkopwarawiri.id">
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon" />
    <link rel="manifest" href="<?php echo base_url('manifest.json'); ?>">

    <meta name="theme-color" content="#100f3a" />
    <title>ruriazz | Portfolio</title>
    
    <link rel="stylesheet" type="text/css" href="A.styles%2c%2c_bootstrap-4.1.2%2c%2c_bootstrap.min.css%2bplugins%2c%2c_font-awesome-4.7.0%2c%2c_css%2c%2c_font-awesome.min.css%2bplugins%2c%2c_mCustomScrollbar%2c%2c_jquery.mCustomScrollbar.css%2cM" />
    <link rel="stylesheet" type="text/css" href="styles/portfolio.css%2bportfolio_responsive.css.pagespeed.cc.kghi_PH-P-.css" />
    <?php if (isset($src) && $src->css) echo '<link rel="stylesheet" type="text/css" href="'.$src->css.'">'; ?>
</head>

<body>
    <div class="super_container">
        <?php $this->load->view('templates/header'); ?>
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">
                <?php $this->load->view('templates/main_menu'); ?>
                <div class="main_content">
                    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                        <div class="main_subtitle">What I am good at</div>
                        <div class="main_title">My Portfolio</div>
                    </div>

                    <div class="portfolio_categories button-group filters-button-group">
                        <ul>
                            <li class="portfolio_category active is-checked" data-filter="*">All</li>
                            <li class="portfolio_category" data-filter=".p_design">Design</li>
                            <li class="portfolio_category" data-filter=".p_photography">Photography</li>
                            <li class="portfolio_category" data-filter=".p_brand">Brand Identity</li>
                        </ul>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">
                        <div class="portfolio_grid grid clearfix">

                            <div class="grid-item portfolio_item p_design">
                                <img src="images/portfolio_1.jpg" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">Design</div>
                                    <div class="portfolio_item_link"><a href="#">See More</a></div>
                                </div>
                            </div>

                            <div class="grid-item portfolio_item p_photography">
                                <img src="images/portfolio_2.jpg" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">Photography</div>
                                    <div class="portfolio_item_link"><a href="#">See More</a></div>
                                </div>
                            </div>

                            <div class="grid-item portfolio_item p_brand">
                                <img src="images/portfolio_3.jpg" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">Brand Identity</div>
                                    <div class="portfolio_item_link"><a href="#">See More</a></div>
                                </div>
                            </div>

                            <div class="grid-item portfolio_item p_design">
                                <img src="images/portfolio_4.jpg" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">Design</div>
                                    <div class="portfolio_item_link"><a href="#">See More</a></div>
                                </div>
                            </div>

                            <div class="grid-item portfolio_item p_photography">
                                <img src="images/portfolio_5.jpg" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">Photography</div>
                                    <div class="portfolio_item_link"><a href="#">See More</a></div>
                                </div>
                            </div>

                            <div class="grid-item portfolio_item p_brand">
                                <img src="images/portfolio_6.jpg" alt="">
                                <div class="portfolio_item_content d-flex flex-column align-items-center justify-content-center">
                                    <div class="portfolio_item_title">Brand Identity</div>
                                    <div class="portfolio_item_link"><a href="#">See More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('templates/footer'); ?>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
    <script src="plugins%2c_easing%2c_easing.js%2bplugins%2c_Isotope%2c_isotope.pkgd.min.js%2bplugins%2c_Isotope%2c_fitcolumns.js%2bplugins%2c_parallax-js-master%2c_parallax.min.js%2bjs%2c_portfolio.js.page"></script>
    <script>
        eval(mod_pagespeed_JeFeMLgLr7);
        eval(mod_pagespeed_w2bI0YGXh_);
        eval(mod_pagespeed_E2Y7jJL6RN);
        eval(mod_pagespeed_RL09Ilmv43);
        eval(mod_pagespeed_YV$dzOXUzd);
    </script>
    <?php if (isset($src) && $src->js) echo '<script type="module" src="' . $src->js . '"></script>'; ?>
</body>
</html>
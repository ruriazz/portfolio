<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- iOS meta tags & icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#100f3a">
    <meta name="apple-mobile-web-app-title" content="ruriazz">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/icons/Icon-192.png'); ?>">

    <meta name="author" content="ruriazz | warkopwarawiri.id">
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" type="image/x-icon" />
    <link rel="manifest" href="<?php echo base_url('manifest.json'); ?>">

    <meta name="theme-color" content="#100f3a" />
    <title>ruriazz | Experience</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('A.styles,,_bootstrap-4.1.2,,_bootstrap.min.css+plugins,,_font-awesome-4.7.0,,_css,,_font-awesome.min.css+plugins,,_mCustomScrollbar,,_jquery.mCustomScrollbar.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/A.experience.css+experience_responsive.css,Mcc.8b_7x0WPEA.css.pagespeed.cf.TqxgkuP_Fe.css'); ?>" />
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
                        <div class="main_title">My Experience</div>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                        <div class="experience">

                            <div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div>
                                    <div class="exp_time">2020-Present</div>
                                </div>
                                <div class="exp_content">
                                    <div class="exp_title_container">
                                        <div class="exp_title">Web Programmer</div>
                                        <div class="exp_subtitle">PT Togu Inovasi Teknologi</div>
                                    </div>
                                    <div class="exp_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div>
                                    <div class="exp_time">2016-2018</div>
                                </div>
                                <div class="exp_content">
                                    <div class="exp_title_container">
                                        <div class="exp_title">Teknisi Lapangan</div>
                                        <div class="exp_subtitle">PT Sentra Bisnis Lamuda</div>
                                    </div>
                                    <div class="exp_text">
                                        <p>Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div>
                                    <div class="exp_time">2015-2016</div>
                                </div>
                                <div class="exp_content">
                                    <div class="exp_title_container">
                                        <div class="exp_title">Technician</div>
                                        <div class="exp_subtitle">Ponorogo Jaya Motor</div>
                                    </div>
                                    <div class="exp_text">
                                        <p>Consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="exp_item d-flex flex-md-row flex-column align-items-start justify-content-start">
                                <div>
                                    <div class="exp_time">2013-2015</div>
                                </div>
                                <div class="exp_content">
                                    <div class="exp_title_container">
                                        <div class="exp_title">Junior Technician</div>
                                        <div class="exp_subtitle">Pasuruan Motor Pulogadung</div>
                                    </div>
                                    <div class="exp_text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Proin vitae tortor nec risus tristique efficitur. Aliquam luctus est urna, id aliquam orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('templates/footer'); ?>
        </div>
    </div>
    <script src="<?php echo base_url('js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('styles/bootstrap-4.1.2/popper.js'); ?>"></script>
    <script src="<?php echo base_url('styles/bootstrap-4.1.2/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('plugins/mCustomScrollbar/jquery.mCustomScrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('plugins,_easing,_easing.js+plugins,_parallax-js-master,_parallax.min.js+js,_experience.js.pagespeed.jc.k8Mmx6KXIN.js'); ?>"></script>
    <script>
        eval(mod_pagespeed_JeFeMLgLr7);
        eval(mod_pagespeed_RL09Ilmv43);
        eval(mod_pagespeed_6nPsaHdPI8);
    </script>
    <?php if (isset($src) && $src->js) echo '<script type="module" src="' . $src->js . '"></script>'; ?>
</body>

</html>

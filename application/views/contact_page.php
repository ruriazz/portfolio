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
    <title>ruriazz | Contact</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('A.styles,,_bootstrap-4.1.2,,_bootstrap.min.css+plugins,,_font-awesome-4.7.0,,_css,,_font-awesome.min.css+plugins,,_mCustomScrollbar,,_jquery.mCustomScrollbar.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/A.contact.css+contact_responsive.css,Mcc.hRUy9gy2gJ.css.pagespeed.cf.2JaDqfjHwP.css'); ?>" />
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
                        <div class="main_subtitle">What clients say</div>
                        <div class="main_title">Contact me</div>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                        <div class="contact">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-xl-6">
                                        <div class="contact_text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit ame. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien.</p>
                                        </div>
                                        <div class="contact_form_container">
                                            <form action="#" id="contact_form" class="contact_form clearfix">
                                                <div><input type="text" class="contact_input" placeholder="Name" required></div>
                                                <div><input type="email" class="contact_input" placeholder="E-mail" required></div>
                                                <input type="text" class="contact_input" placeholder="Subject" required>
                                                <textarea class="contact_input contact_textarea" placeholder="Message" required></textarea>
                                                <button class="contact_button">Send Message</button>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="contact_map" style="background-image: url(<?php echo base_url('images/generals/profile.jpg'); ?>)"></div>
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
    <script src="<?php echo base_url('plugins,_easing,_easing.js+plugins,_parallax-js-master,_parallax.min.js+js,_contact.js.pagespeed.jc.mUHUan8tjF.js'); ?>"></script>
    <script>
        eval(mod_pagespeed_JeFeMLgLr7);
        eval(mod_pagespeed_RL09Ilmv43);
    </script>
    <?php if (isset($src) && $src->js) echo '<script type="module" src="' . $src->js . '"></script>'; ?>
</body>
</html>

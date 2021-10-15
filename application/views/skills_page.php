<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
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
    <title>ruriazz | Skills</title>
    
    <link rel="stylesheet" type="text/css" href="A.styles%2c%2c_bootstrap-4.1.2%2c%2c_bootstrap.min.css%2bplugins%2c%2c_font-awesome-4.7.0%2c%2c_css%2c%2c_font-awesome.min.css%2bplugins%2c%2c_mCustomScrollbar%2c%2c_jquery.mCustomScrollbar.css%2cM" />
    <link rel="stylesheet" type="text/css" href="styles/A.skills.css%2bskills_responsive.css%2cMcc.xGqKkXsFFx.css.pagespeed.cf.ZBDiOhstKN.css" />
    <?php if (isset($src) && $src->css) echo '<link rel="stylesheet" type="text/css" href="'.$src->css.'">'; ?>
</head>

<body>
    <div class="super_container">
        <?php $this->load->view('templates/header') ?>
        <div class="content_container">
            <div class="main_content_outer d-flex flex-xl-row flex-column align-items-start justify-content-start">
                <?php $this->load->view('templates/main_menu'); ?>
                <div class="main_content">
                    <div class="main_title_container d-flex flex-column align-items-start justify-content-end">
                        <div class="main_subtitle">What I am good at</div>
                        <div class="main_title">My Skills</div>
                    </div>
                    <div class="main_content_scroll mCustomScrollbar" data-mcs-theme="minimal-dark">

                        <div class="skills">
                            <div class="skills_text">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit.</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <p>Phasellus vitae sapien porttitor, dignissim quam sit amet, aliquam lorem. Fusce id ligula non risus mollis consectetur. Nam lobortis, erat quis pulvinar dignissim, velit ligula ullamcorper ipsum, at sodales elit odio at velit. Sed a est a quam mattis suscipit. Proin et faucibus diam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="progress_bars">
                                <div class="container-fluid">
                                    <div class="row">

                                        <div class="col-xl-4 col-lg-6 pb_col">
                                            <div class="pb_item">
                                                <div class="p_bar_title">Developement</div>
                                                <div id="skill_1_pbar" class="skill_bars" data-perc="0.70" data-name="skill_1_pbar" data-color-start="#79ccff" data-color-end="#9b74ff"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 pb_col">
                                            <div class="pb_item">
                                                <div class="p_bar_title">Developement</div>
                                                <div id="skill_2_pbar" class="skill_bars" data-perc="0.60" data-name="skill_2_pbar" data-color-start="#ff4646" data-color-end="#ff26d9"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 pb_col">
                                            <div class="pb_item">
                                                <div class="p_bar_title">Developement</div>
                                                <div id="skill_3_pbar" class="skill_bars" data-perc="0.75" data-name="skill_3_pbar" data-color-start="#0054ff" data-color-end="#ff23d3"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 pb_col">
                                            <div class="pb_item">
                                                <div class="p_bar_title">Developement</div>
                                                <div id="skill_4_pbar" class="skill_bars" data-perc="1.0" data-name="skill_4_pbar" data-color-start="#79ff7c" data-color-end="#ffbd4a"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 pb_col">
                                            <div class="pb_item">
                                                <div class="p_bar_title">Developement</div>
                                                <div id="skill_5_pbar" class="skill_bars" data-perc="0.90" data-name="skill_5_pbar" data-color-start="#79ff8f" data-color-end="#7b74ff"></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 pb_col">
                                            <div class="pb_item">
                                                <div class="p_bar_title">Developement</div>
                                                <div id="skill_6_pbar" class="skill_bars" data-perc="1.0" data-name="skill_6_pbar" data-color-start="#ff2d72" data-color-end="#ffab79"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="milestones clearfix">

                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/icon_6.png" alt=""></div>
                                    <div class="milestone_counter" data-end-value="14">0</div>
                                    <div class="milestone_text">Years of Experience</div>
                                </div>

                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/icon_7.png" alt=""></div>
                                    <div class="milestone_counter" data-end-value="1000" data-sign-before="+">0</div>
                                    <div class="milestone_text">Happy Clients</div>
                                </div>

                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/icon_8.png" alt=""></div>
                                    <div class="milestone_counter" data-end-value="14" data-sign-after="k">0</div>
                                    <div class="milestone_text">Followers on FB</div>
                                </div>

                                <div class="milestone text-center">
                                    <div class="milestone_icon"><img src="images/icon_9.png" alt=""></div>
                                    <div class="milestone_counter" data-end-value="732">0</div>
                                    <div class="milestone_text">Finished Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('templates/footer') ?>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock%2c_TimelineMax.min.js%2bscrollmagic%2c_ScrollMagic.min.js%2bgreensock%2c_animation.gsap.min.js%2bgreensock%2c_ScrollToPlugin.min.js.pagespeed.jc.wtdVidDD2e.17"></script>
    <script>
        eval(mod_pagespeed_VKQ0LG0$ZI);
        eval(mod_pagespeed_jXpAJz1XpV);
        eval(mod_pagespeed_479Yn8bvzx);
        eval(mod_pagespeed_cQz899P46w);
    </script>
    <script src="plugins/progressbar/progressbar.js"></script>
    <script src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.js"></script>
    <script src="plugins%2c_easing%2c_easing.js%2bplugins%2c_parallax-js-master%2c_parallax.min.js%2bjs%2c_skills.js.pagespeed.jc.2IZHCv7LVg.js"></script>
    <script>
        eval(mod_pagespeed_JeFeMLgLr7);
        eval(mod_pagespeed_RL09Ilmv43);
        eval(mod_pagespeed_4n6WSHGpTp);
    </script>
    <?php if (isset($src) && $src->js) echo '<script type="module" src="' . $src->js . '"></script>'; ?>
</body>
</html>
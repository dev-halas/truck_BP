<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_search()): ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php endif; ?>

    <?php wp_head(); ?>
    <title><?php
    echo bloginfo('name');
    echo ' - ';
    bloginfo('description');
    ?></title>

    <meta charset="<?php bloginfo('charset'); ?>" />

    <!-- Stylesheets-->
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>public/main.css">
</head>


<body <?php body_class(); ?>>

        <?php 
			$facebook = get_field('facebook_link', 'options');
			$instagram = get_field('instagram_link', 'options');
			$youtube = get_field('youtube_link', 'options');
		?>

    <header class="header">
        <div class="header--inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                <img src="<?php echo THEME_URL; ?>_dev/img/logo.png" alt="logo">
            </a>
            <nav class="navLinks">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="homeLink">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#ffffff;">    
                        <path d="M 12 2 A 1 1 0 0 0 11.289062 2.296875 L 1.203125 11.097656 A 0.5 0.5 0 0 0 1 11.5 A 0.5 0.5 0 0 0 1.5 12 L 4 12 L 4 20 C 4 20.552 4.448 21 5 21 L 9 21 C 9.552 21 10 20.552 10 20 L 10 14 L 14 14 L 14 20 C 14 20.552 14.448 21 15 21 L 19 21 C 19.552 21 20 20.552 20 20 L 20 12 L 22.5 12 A 0.5 0.5 0 0 0 23 11.5 A 0.5 0.5 0 0 0 22.796875 11.097656 L 12.716797 2.3027344 A 1 1 0 0 0 12.710938 2.296875 A 1 1 0 0 0 12 2 z"></path>
                    </svg>
                </a>
                <?php wp_nav_menu([
                    'theme_location' => 'main_nav',
                ]); ?>
            </nav>
            <div class="secondNav">
                <div class="headerSocial--icons">
                    <a href="<?php echo $facebook; ?>" class="headerSocial--icon" target="_blank">
                        <svg id="_x30_1._Facebook" xmlns="http://www.w3.org/2000/svg" width="7.561" height="14.018" viewBox="0 0 7.561 14.018">
                            <path id="Icon_11_" d="M30.505,18.012H28.768c-.281,0-.368-.105-.368-.368V15.521c0-.281.105-.368.368-.368h1.737V13.609a3.9,3.9,0,0,1,.474-1.982,2.911,2.911,0,0,1,1.561-1.3,3.9,3.9,0,0,1,1.351-.228h1.719c.246,0,.351.105.351.351v2c0,.246-.105.351-.351.351-.474,0-.947,0-1.421.018a.633.633,0,0,0-.719.719c-.018.526,0,1.035,0,1.579h2.035c.281,0,.386.105.386.386v2.123c0,.281-.088.368-.386.368H33.47v5.719c0,.3-.088.4-.4.4H30.874c-.263,0-.368-.105-.368-.368Z" transform="translate(-28.4 -10.1)" fill="#fff"/>
                        </svg>
                    </a>
                    <a href="<?php echo $instagram; ?>" class="headerSocial--icon" target="_blank">
                        <svg id="instagram" xmlns="http://www.w3.org/2000/svg" width="14.015" height="14.018" viewBox="0 0 14.015 14.018">
                            <path id="Path_6" data-name="Path 6" d="M14.428,4.121a5.122,5.122,0,0,0-.326-1.7A3.591,3.591,0,0,0,12.051.37a5.135,5.135,0,0,0-1.7-.326C9.6.008,9.362,0,7.459,0S5.317.008,4.57.041a5.124,5.124,0,0,0-1.7.326,3.42,3.42,0,0,0-1.243.811,3.451,3.451,0,0,0-.808,1.24,5.136,5.136,0,0,0-.326,1.7c-.036.75-.044.989-.044,2.892S.457,9.152.49,9.9a5.122,5.122,0,0,0,.326,1.7,3.59,3.59,0,0,0,2.051,2.051,5.136,5.136,0,0,0,1.7.326c.747.033.986.041,2.889.041s2.141-.008,2.889-.041a5.121,5.121,0,0,0,1.7-.326A3.585,3.585,0,0,0,14.1,11.6a5.139,5.139,0,0,0,.326-1.7c.033-.748.041-.986.041-2.889s0-2.141-.036-2.889ZM13.165,9.844a3.842,3.842,0,0,1-.241,1.3,2.325,2.325,0,0,1-1.331,1.331,3.856,3.856,0,0,1-1.3.241c-.739.033-.961.041-2.831.041s-2.095-.008-2.831-.041a3.84,3.84,0,0,1-1.3-.241,2.157,2.157,0,0,1-.805-.523A2.179,2.179,0,0,1,2,11.148a3.856,3.856,0,0,1-.241-1.3c-.033-.739-.041-.961-.041-2.831s.008-2.095.041-2.831A3.84,3.84,0,0,1,2,2.884a2.131,2.131,0,0,1,.526-.805,2.176,2.176,0,0,1,.805-.523,3.858,3.858,0,0,1,1.3-.241c.739-.033.961-.041,2.831-.041s2.095.008,2.831.041a3.842,3.842,0,0,1,1.3.241,2.155,2.155,0,0,1,.805.523,2.179,2.179,0,0,1,.523.805,3.858,3.858,0,0,1,.241,1.3c.033.739.041.961.041,2.831s-.008,2.089-.041,2.829Zm0,0" transform="translate(-0.449 0)" fill="#fff"/>
                            <path id="Path_7" data-name="Path 7" d="M128.55,124.5a3.6,3.6,0,1,0,3.6,3.6A3.6,3.6,0,0,0,128.55,124.5Zm0,5.937a2.336,2.336,0,1,1,2.336-2.336A2.336,2.336,0,0,1,128.55,130.437Zm0,0" transform="translate(-121.54 -121.091)" fill="#fff"/>
                            <path id="Path_8" data-name="Path 8" d="M364.131,89.442a.841.841,0,1,1-.841-.841A.841.841,0,0,1,364.131,89.442Zm0,0" transform="translate(-352.537 -86.176)" fill="#fff"/>
                        </svg>
                    </a>
                    <a href="<?php echo $youtube; ?>" class="headerSocial--icon" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.142" height="9.902" viewBox="0 0 14.142 9.902">
                            <path id="youtube" d="M13.851-4.533A1.772,1.772,0,0,0,12.6-5.779a41.394,41.394,0,0,0-5.533-.3,43.006,43.006,0,0,0-5.533.291A1.808,1.808,0,0,0,.292-4.533,18.668,18.668,0,0,0,0-1.131a18.6,18.6,0,0,0,.291,3.4A1.772,1.772,0,0,0,1.538,3.517a41.469,41.469,0,0,0,5.533.3A43.006,43.006,0,0,0,12.6,3.528a1.772,1.772,0,0,0,1.247-1.246,18.674,18.674,0,0,0,.291-3.4,17.721,17.721,0,0,0-.291-3.413ZM5.662.989v-4.24l3.681,2.12Zm0,0" transform="translate(-0.001 6.082)" fill="#fff"/>
                        </svg>
                    </a>
                </div>
                <div class="headerLangs">
                    <a href="#" class="activeLang">PL</a>
                    <a href="#">EN</a>
                    <a href="#">RU</a>
                </div>
                
            </div>

        </div>

        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>
    <div class="headerSpace"></div>
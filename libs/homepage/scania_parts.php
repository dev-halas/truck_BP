<div class="parts scania" id="scania">
    <div class="partsColumn animate fadeInLeft d-400">
        <div class="parts--wrapper">
            <img src="<?php echo THEME_URL; ?>_dev/img/scania-logo.png" alt="" class="parts--logo">
            <div class="parts--links">
                <a href="https://allegro.pl/uzytkownik/piotrek7500" target="_blank">
                    <img src="<?php echo THEME_URL; ?>_dev/img/allegro.png" alt="" class="allegro">
                </a>
                <a href="https://truckbp.otomoto.pl/inventory" target="_blank">
                    <img src="<?php echo THEME_URL; ?>_dev/img/otomoto.png" alt="" class="otomoto">
                </a>
            </div>
        </div>
        <div class="parts--image">
            <img src="<?php echo THEME_URL; ?>_dev/img/scania-parts.png" alt="">
        </div>
    </div>
    <?php if (have_rows('scania_parts')): ?>
    <div class="partsGrid animate fadeInRight d-200">
        <?php while (have_rows('scania_parts')):

            the_row();
            $icon = get_sub_field('scania_parts_icon');
            $name = get_sub_field('scania_parts_name');
            $link = get_sub_field('scania_parts_link');
			$bg = get_sub_field('scania_parts_bg');
            ?>
        <a href="<?php echo $link; ?>" target="_blank" class="parts--item"
            style="background-image: url('<?php if ( !$bg ) { echo THEME_URL.'_dev/img/category_bg.jpg'; } else { echo $bg['url']; } ?>')">

            <div class="parts--itemIcon">
                <img src="<?php echo esc_url($icon['url']); ?>" alt="engine" />
            </div>
            <div class="parts--itemText">
                <span><?php echo $name; ?></span>
                <div class="arrow"></div>
            </div>
        </a>
        <?php
        endwhile; ?>

    </div>
    <?php endif; ?>

</div>
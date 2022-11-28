<?php
$redTitle = get_field('title_red');
$whiteTitle = get_field('title_white');
$link = get_field('link');
$img = get_field('image');
?>

<div class="pageHeader">
    <div class="pageHeader--inner">
        <div class="pageHeader--title">
            <h1 class="title--red"><?php echo $redTitle; ?></h1>
            <h1 class="title"><?php echo $whiteTitle; ?></h1>
            <a href="<?php echo $link['url']; ?>" class="button--whiteOutline">
                <?php echo $link['title']; ?>
            </a>

            <?php if (have_rows('numery_telefonu')): ?>
            <div class="pageHeader--phones">
                <?php while (have_rows('numery_telefonu')):

                   the_row();
                   $name = get_sub_field('truck_name');
                   $phoneLink = get_sub_field('numer_telefonu');
                   $flags = get_sub_field_object('flag');
                   $flagsValues = $flags['value'];
                   ?>
                <div class="footer--contactItem">
                    <img src="<?php echo THEME_URL; ?>_dev/img/user.jpeg" alt="">
                    <div>
                        <span>
                            <b><?php echo $name; ?></b>

                            <?php if ($flagsValues): ?>
                            <div class="footer--langFlags">
                                <?php foreach ($flagsValues as $flagsValue): ?>
                                <div class="flag--<?php echo $flags['choices'][$flagsValue]; ?>"></div>
                                <?php endforeach; ?>
                            </div>
                            <?php endif; ?>

                        </span>
                        <a href="tel: <?php echo $phoneLink['url']; ?>"><?php echo $phoneLink['title']; ?></a>
                    </div>
                </div>
                <?php
                endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="pageHeader--image">
            <img src="<?php echo $img['url']; ?>" alt="">
        </div>
    </div>
    <div class="redBlur heroBlur"></div>
</div>
<div class="separator--twoColor-rtl"></div>
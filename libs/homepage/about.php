<?php 
    $aboutText = get_field('about-text');
    $aboutImg = get_field('about-img');
?>

<div class="about" id="about">
    <div class="about--left">
        <p>Firma</p>
        <span class="title--red">
            TruckBP
        </span>
        <span class="title">poleca</span>
        <?php echo $aboutText; ?>
    </div>
    <div class="about--right">
        <div class="aboutSlider">
            <div class="aboutSlide">
                <img src="<?php echo $aboutImg['url']; ?>" alt="">
            </div>
        </div>
    </div>
    <div class="redBlur aboutBlur"></div>
</div>
<?php 
    $textMechanic = get_field('mechanik-text');
    $imgMechanic = get_field('mechanic-img');
    $linkMechanic = get_field('mechanic-link');

?>
<div class="home-mechanic container">
    <div class="home-mechanic--left">
        <span></span>
        <img src="<?php echo $imgMechanic['url'] ?>" alt="">
    </div>
    <div class="home-mechanic--right">
        <?php echo $textMechanic; ?>
        <a href="<?php echo $linkMechanic['url']; ?>" target="_blank" class="button--blackOutline">
            <?php echo $linkMechanic['title']; ?>
        </a>
    </div>
</div>
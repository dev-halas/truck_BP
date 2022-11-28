<?php 
    $imgLeft = get_field('article_img_left');
    $imgRight = get_field('article_img_right');
    $textLeft = get_field('article_text_left');
    $textRight = get_field('article_text_right');
?>
<div class="homeBlog container">
    <div class="homeBlog--articles">
        <div class="homeBlog--article animate fadeIn d-200">
            <div class="homeBlog--img">
                <img src="<?php echo $imgLeft['url']; ?>" alt="">
            </div>
            <div class="homeBlog--content">
                <?php echo $textLeft; ?>
            </div>
        </div>
        <div class="homeBlog--article animate fadeIn d-200">
            <div class="homeBlog--img">
                <img src="<?php echo $imgRight['url']; ?>" alt="">
            </div>
            <div class="homeBlog--content">
                <?php echo $textRight; ?>
            </div>
        </div>
    </div>
</div>

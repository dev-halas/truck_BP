<?php 
    $niezawdone = get_field('niezawodne');
?>
<div class="homeBlog container">
    <div class="homeBlog--desc">
        <div class="homeBlog--descLeft">
            <?php echo $niezawdone; ?>
        </div>
        <div class="homeBlog--descRight">
        
        </div>
    </div>
    <?php get_template_part('/libs/showArticles'); ?>
</div>
<?php
/* 
    TEMPLATE NAME: Skup 
    */
get_header(); ?>


<main>
    <?php get_template_part('/libs/page-header'); ?>
    <?php get_template_part('/libs/purchaseTemplate/purchase_template'); ?>
    <?php get_template_part('/libs/showArticles'); ?>
    <div class="separator--twoColor"></div>
    <?php get_template_part('/libs/homepage/map'); ?>
</main>

<?php get_footer(); ?>

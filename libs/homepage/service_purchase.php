<?php 
    $purchase_title = get_field('purchase_title');
    $purchase_left = get_field('purchase_left');
    $purchase_right = get_field('purchase_right');
?>
<div class="service__purchase">
    <div class="container">
        <div class="service__purchase--title">
            <p>
                <b><?php echo $purchase_title; ?></b>
            </p>
        </div>
        <div class="service__purchase--inner">
            <div class="service__purchase--left">
                <?php echo $purchase_left; ?>
            </div>
            <div class="service__purchase--right">
                <?php echo $purchase_right; ?>
            </div>
            </div>
        </div>
</div>
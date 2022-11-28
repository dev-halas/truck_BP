<?php 
    $textTop = get_field('serwis_text_top');
    $textBottom = get_field('serwis_text_bottom');
?>

<div class="serviceContent" id="more">
    <div class="container service--text">
        <?php echo $textTop; ?>
    </div>
    <div class="serviceIcons">
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/break-red.png" alt="">
            <span>hamulców</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/engine-red.png" alt="">
            <span>silnika</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/gearshift-red.png" alt="">
            <span>skrzynia biegów</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/exhaust-pipe-red.png" alt="">
            <span>układ wydechowy</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/differential-red.png" alt="">
            <span>dyferencjałów</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/suspension-red.png" alt="">
            <span>zawieszenia</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/car-battery-red.png" alt="">
            <span>osprzętu elektrycznego</span>
        </div>
        <div class="serviceIcon">
            <img src="<?php echo THEME_URL; ?>_dev/img/parts_icons/oil-red.png" alt="">
            <span>układu chłodzenia</span>
        </div>
    </div>
    <div class="container service--text">
        <?php echo $textBottom; ?>
    </div>
    <a href="#" class="scrollDown--dark">
        <svg xmlns="http://www.w3.org/2000/svg" width="16.362" height="45.181" viewBox="0 0 16.362 45.181">
            <g id="right-arrow_1_" data-name="right-arrow (1)" transform="translate(515.287 -4) rotate(90)">
                <g id="Group_4" data-name="Group 4" transform="translate(4 498.925)">
                <g id="Group_3" data-name="Group 3" transform="translate(0)">
                    <g id="Group_1" data-name="Group 1">
                    <path id="Path_3" data-name="Path 3" d="M48.247,508.033H4.932a.932.932,0,0,1,0-1.863H46l-5.653-5.653a.932.932,0,1,1,1.319-1.319l7.245,7.245a.928.928,0,0,1,.2,1.016A.937.937,0,0,1,48.247,508.033Z" transform="translate(-4 -498.925)" fill="#191919"/>
                    </g>
                    <g id="Group_2" data-name="Group 2" transform="translate(36.062 7.243)">
                    <path id="Path_4" data-name="Path 4" d="M1243.756,756.844a.918.918,0,0,1-.658-.274.933.933,0,0,1,0-1.319l7.254-7.254a.932.932,0,0,1,1.319,1.319l-7.254,7.254A.93.93,0,0,1,1243.756,756.844Z" transform="translate(-1242.825 -747.725)" fill="#191919"/>
                    </g>
                </g>
                </g>
            </g>
        </svg>
    </a>
</div>
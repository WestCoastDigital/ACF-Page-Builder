<?php

	$image 			= get_sub_field('background_image');
	$colorchoice    = get_sub_field('background_color');
	$choosecolor    = get_sub_field('choose_color');
	$themecolor     = get_sub_field('theme_color');

	if ( $colorchoice == 'choose' ) {
        $color = $choosecolor;
    } else {
        $color = $themecolor;
    }

    $classes    = 'card';

    $styles      = 'background-color: ' . $color . ';';
    $styles     .= (get_sub_field('background_image')) ? ' background-image: url(' . $image['url'] . ');' : '';

?>
<li>
	<div class="<?=$classes?>" style="<?=$styles?>">
		<div class="card-inner">
			<?php cfb_template('blocks/parts/block-media', get_row_layout()); ?>
			<header><h3><?php the_sub_field('title'); ?></h3></header>
			<article>
				<div class="card-content">
					<?php the_sub_field('content'); ?>
				</div>
            			<?php cfb_template('blocks/parts/block-cta', get_row_layout()); ?>
			</article>
		</div>
	</div>
</li>

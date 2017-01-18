<?php
	
	global $post;
	$kin_num = get_post_meta( $post->ID, '_1320_kin_num', true );
	$kin_color = get_post_meta( $post->ID, '_1320_kin_color', true );
	$kin_tone = get_post_meta( $post->ID, '_1320_kin_tone', true );
	$kin_glyph = get_post_meta( $post->ID, '_1320_kin_glyph', true );
	$kin_img_url = get_post_meta( $post->ID, '_1320_kin_img_url', true );	
	$kin_description = get_post_meta( $post->ID, '_1320_kin_description', true );		

?>

<div class="kin-container single">

	<p><?php echo $kin_description; ?></p>

	<img src="<?php echo $kin_img_url; ?>" alt="<?php the_title(); ?>">

</div>


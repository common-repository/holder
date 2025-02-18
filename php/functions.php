<?php

/**
 * Display or retrieve Holder image.
 *
 * Args accept: width, height (pixels or percent), theme (name), background, foreground (hex colors), text, font family.
 *
 * @param array $args
 * @param bool  $show
 *
 * @return string img tag for the image
 */
function holder( $args = array(), $show = true ) {

	$img = R_Holder::get_img( $args );

	if( $show )
		echo $img;

	return $img;
}

/**
 * Add Holder theme to use.
 *
 * @param string $name       of theme
 * @param string $background color in hex
 * @param string $foreground color in hex
 * @param int    $size       of font
 * @param string $text       default for theme
 * @param string $font       font-family to use
 */
function holder_add_theme( $name, $background, $foreground, $size = 12, $text = '', $font = '' ) {

	// TODO refactor into accepting array with backwards compat?
	R_Holder::add_theme( $name, $background, $foreground, $size, $text, $font );
}
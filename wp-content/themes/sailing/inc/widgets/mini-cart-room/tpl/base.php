<?php

$title = '';
if($instance['title'] <> ''){
	$title = $instance['title'];
}

if(!class_exists('TP_Hotel_Booking')) {
	return;
}

$html = '[hotel_booking_mini_cart][/hotel_booking_mini_cart]';

if($title <> ''){
	echo '<div class="wrapper-line-heading">';
	echo '<h3 class="heading__primary">'.esc_attr($title).'</h3>';
	echo '<hr class="new-line-heading">';
	echo '</div>';
}
echo do_shortcode($html);

?>
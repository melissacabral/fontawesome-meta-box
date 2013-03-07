<?php
/*
Plugin Name: Icon Meta Box
Plugin URI: http://wordpress.melissacabral.com/
Description: adds admin panel meta boxes for Fontawesome Icons
Version: 1
Author: Melissa Cabral
Author URI: http://melissacabral.com
License: GPL
*/
//source: http://www.deluxeblogtips.com/2010/04/how-to-create-meta-box-wordpress-post.html 
//TODO 
//this needs an update to fix debug errors


//don't conflict with other plugins
$prefix = 'wcm_';

//set up the box and teh fields inside
$meta_box = array(
	'id' => 'icon-meta-box',
	'title' => 'Font Awesome Icon', //title of box
	'page' => 'post', //what type of post will this appear on. accepts custom post types
	'context' => 'side', //normal, advanced or side
	
	'fields' => array(  //and now for the custom fields in the box
		
		array(
			'name' => 'Icon',
			'id' => $prefix . 'icon',
			'type' => 'select',
			'options' => array('icon-adjust' ,
								'icon-align-center' ,
								'icon-align-justify' ,
								'icon-align-left' ,
								'icon-align-right' ,
								'icon-ambulance',
								'icon-angle-down',
								'icon-angle-left',
								'icon-angle-right',
								'icon-angle-up',
								'icon-arrow-down' ,
								'icon-arrow-left' ,
								'icon-arrow-right' ,
								'icon-arrow-up' ,
								'icon-asterisk' ,
								'icon-backward' ,
								'icon-ban-circle' ,
								'icon-bar-chart' ,
								'icon-barcode' ,
								'icon-beaker' ,
								'icon-beer',
								'icon-bell' ,
								'icon-bell-alt',
								'icon-bold' ,
								'icon-bolt' ,
								'icon-book' ,
								'icon-bookmark' ,
								'icon-bookmark-empty' ,
								'icon-briefcase' ,
								'icon-building',
								'icon-bullhorn' ,
								'icon-calendar' ,
								'icon-camera' ,
								'icon-camera-retro' ,
								'icon-caret-down' ,
								'icon-caret-left' ,
								'icon-caret-right' ,
								'icon-caret-up' ,
								'icon-certificate' ,
								'icon-check' ,
								'icon-check-empty' ,
								'icon-chevron-down' ,
								'icon-chevron-left' ,
								'icon-chevron-right' ,
								'icon-chevron-up' ,
								'icon-circle',
								'icon-circle-arrow-down' ,
								'icon-circle-arrow-left' ,
								'icon-circle-arrow-right' ,
								'icon-circle-arrow-up' ,
								'icon-circle-blank',
								'icon-cloud' ,
								'icon-cloud-download',
								'icon-cloud-upload',
								'icon-coffee',
								'icon-cog' ,
								'icon-cogs' ,
								'icon-columns' ,
								'icon-comment' ,
								'icon-comment-alt' ,
								'icon-comments' ,
								'icon-comments-alt' ,
								'icon-copy' ,
								'icon-credit-card' ,
								'icon-cut' ,
								'icon-dashboard' ,
								'icon-desktop',
								'icon-double-angle-down',
								'icon-double-angle-left',
								'icon-double-angle-right',
								'icon-double-angle-up',
								'icon-download' ,
								'icon-download-alt' ,
								'icon-edit' ,
								'icon-eject' ,
								'icon-envelope' ,
								'icon-envelope-alt' ,
								'icon-exchange',
								'icon-exclamation-sign' ,
								'icon-external-link' ,
								'icon-eye-close' ,
								'icon-eye-open' ,
								'icon-facebook' ,
								'icon-facebook-sign' ,
								'icon-facetime-video' ,
								'icon-fast-backward' ,
								'icon-fast-forward' ,
								'icon-fighter-jet',
								'icon-file' ,
								'icon-file-alt',
								'icon-film' ,
								'icon-filter' ,
								'icon-fire' ,
								'icon-flag' ,
								'icon-folder-close' ,
								'icon-folder-close-alt',
								'icon-folder-open' ,
								'icon-folder-open-alt',
								'icon-font' ,
								'icon-food',
								'icon-forward' ,
								'icon-fullscreen' ,
								'icon-gift' ,
								'icon-github' ,
								'icon-github-alt',
								'icon-github-sign' ,
								'icon-glass' ,
								'icon-globe' ,
								'icon-google-plus' ,
								'icon-google-plus-sign' ,
								'icon-group' ,
								'icon-h-sign',
								'icon-hand-down' ,
								'icon-hand-left' ,
								'icon-hand-right' ,
								'icon-hand-up' ,
								'icon-hdd' ,
								'icon-headphones' ,
								'icon-heart' ,
								'icon-heart-empty' ,
								'icon-home' ,
								'icon-hospital',
								'icon-inbox' ,
								'icon-indent-left' ,
								'icon-indent-right' ,
								'icon-info-sign' ,
								'icon-italic' ,
								'icon-key' ,
								'icon-laptop',
								'icon-leaf' ,
								'icon-legal' ,
								'icon-lemon' ,
								'icon-lightbulb',
								'icon-link' ,
								'icon-linkedin' ,
								'icon-linkedin-sign' ,
								'icon-list' ,
								'icon-list-alt' ,
								'icon-list-ol' ,
								'icon-list-ul' ,
								'icon-lock' ,
								'icon-magic' ,
								'icon-magnet' ,
								'icon-map-marker' ,
								'icon-medkit',
								'icon-minus' ,
								'icon-minus-sign' ,
								'icon-mobile-phone',
								'icon-money' ,
								'icon-move' ,
								'icon-music' ,
								'icon-off' ,
								'icon-ok' ,
								'icon-ok-circle' ,
								'icon-ok-sign' ,
								'icon-paper-clip' ,
								'icon-paste' ,
								'icon-pause' ,
								'icon-pencil' ,
								'icon-phone' ,
								'icon-phone-sign' ,
								'icon-picture' ,
								'icon-pinterest' ,
								'icon-pinterest-sign' ,
								'icon-plane' ,
								'icon-play' ,
								'icon-play-circle' ,
								'icon-plus' ,
								'icon-plus-sign' ,
								'icon-plus-sign-alt',
								'icon-print' ,
								'icon-pushpin' ,
								'icon-qrcode' ,
								'icon-question-sign' ,
								'icon-quote-left',
								'icon-quote-right',
								'icon-random' ,
								'icon-refresh' ,
								'icon-remove' ,
								'icon-remove-circle' ,
								'icon-remove-sign' ,
								'icon-reorder' ,
								'icon-repeat' ,
								'icon-reply',
								'icon-resize-full' ,
								'icon-resize-horizontal' ,
								'icon-resize-small' ,
								'icon-resize-vertical' ,
								'icon-retweet' ,
								'icon-road' ,
								'icon-rss' ,
								'icon-save' ,
								'icon-screenshot' ,
								'icon-search' ,
								'icon-share' ,
								'icon-share-alt' ,
								'icon-shopping-cart' ,
								'icon-sign-blank' ,
								'icon-signal' ,
								'icon-signin' ,
								'icon-signout' ,
								'icon-sitemap' ,
								'icon-sort' ,
								'icon-sort-down' ,
								'icon-sort-up' ,
								'icon-spinner',
								'icon-star' ,
								'icon-star-empty' ,
								'icon-star-half' ,
								'icon-step-backward' ,
								'icon-step-forward' ,
								'icon-stethoscope',
								'icon-stop' ,
								'icon-strikethrough' ,
								'icon-suitcase',
								'icon-table' ,
								'icon-tablet',
								'icon-tag' ,
								'icon-tags' ,
								'icon-tasks' ,
								'icon-text-height' ,
								'icon-text-width' ,
								'icon-th' ,
								'icon-th-large' ,
								'icon-th-list' ,
								'icon-thumbs-down' ,
								'icon-thumbs-up' ,
								'icon-time' ,
								'icon-tint' ,
								'icon-trash' ,
								'icon-trophy' ,
								'icon-truck' ,
								'icon-twitter' ,
								'icon-twitter-sign' ,
								'icon-umbrella' ,
								'icon-underline' ,
								'icon-undo' ,
								'icon-unlock' ,
								'icon-upload' ,
								'icon-upload-alt' ,
								'icon-user' ,
								'icon-user-md' ,
								'icon-user-md',
								'icon-volume-down' ,
								'icon-volume-off' ,
								'icon-volume-up' ,
								'icon-warning-sign' ,
								'icon-wrench' ,
								'icon-zoom-in' ,
								'icon-zoom-out'							
 )
		)
	)
);

add_action('admin_menu', 'mytheme_add_box');

// Add meta box
function mytheme_add_box() {
	global $meta_box;
	
	add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function mytheme_show_box() {
	global $meta_box, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
			case 'textarea':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
			case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>';
				break;
			case 'radio':
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option['value'], '"', $meta == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
				}
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />';
				break;
		}
		echo 	'<td>';
		echo '<i style="font-size:1.4em;" class="icon-large '.$meta.'"></i>';
		echo	'</td></tr>';
	}
	
	echo '</table>';
}

add_action('save_post', 'mytheme_save_data');

// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
function mytheme_head(){
	$style_url = plugins_url('stylesheets/font-awesome.css', __FILE__);
	?>
<link rel="stylesheet" type="text/css" href="<?php echo $style_url; ?>" />
<?php	
}
add_action('admin_head','mytheme_head');
add_action('wp_head','mytheme_head');

/**
 * Template tag
 */
function fontawesome_icon(){
	 $icon = get_post_meta($post->ID, 'wcm_icon', true); ?>
		 
	<?php if($icon):?> 
			 <i class="<?php echo get_post_meta($post->ID, 'wcm_icon', true);?> icon-large"></i> 			
	<?php endif;
}
?>

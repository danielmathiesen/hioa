<?php

// creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_RegisterSubscriber', 'RegisterSubscriber' );
add_action( 'wp_ajax_RegisterSubscriber', 'RegisterSubscriber' );

function RegisterSubscriber(){
	// wp_mail("daniel.mathiesen@gmail.com", "viten+praksis", $_POST["email"]);
	die("1");
}




function my_custom_post_product() {
  $labels = array(
    'name'               => _x( 'Videos', 'post type general name' ),
    'singular_name'      => _x( 'Video', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'video' ),
    'add_new_item'       => __( 'Add New Video' ),
    'edit_item'          => __( 'Edit Video' ),
    'new_item'           => __( 'New Video' ),
    'all_items'          => __( 'All Videos' ),
    'view_item'          => __( 'View Video' ),
    'search_items'       => __( 'Search Videos' ),
    'not_found'          => __( 'No videos found' ),
    'not_found_in_trash' => __( 'No videos found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Videos'
  );

  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor',),
    'has_archive'   => true,
  );

  register_post_type( 'video', $args ); 
}

add_action( 'init', 'my_custom_post_product' );

// Add the Meta Box
function add_video_meta_box() {
    add_meta_box(
        'video_box', // $id
        'Video', // $title 
        'show_video_meta_box', // $callback
        'video', // $page
        'normal', // $context
        'high'); // $priority
}

add_action('add_meta_boxes', 'add_video_meta_box');

function show_video_meta_box(){
	global $post;

	$custom_meta_fields = array(
	    array('label'=> 'Video', 'desc'  => 'YouTube embed id.', 'id'    => 'video', 'type'  => 'text')
	);

	wp_nonce_field( basename( __FILE__ ), 'video_meta_box_nonce' );

	for ($i=0; $i < count($custom_meta_fields); $i++) { 
		$custom_meta_field = $custom_meta_fields[$i];
		$meta = get_post_meta($post->ID, $custom_meta_field['id'], true);
		addTextInput($custom_meta_field['id'], $custom_meta_field['desc'], $meta);
	}
}

function addTextInput($id, $label, $meta){
    echo '<input type="text" name="'. $id .'" id="'. $id .'" value="'. $meta .'" size="50" />
        <br /><span class="description">'. $label .'</span>';
}

add_action('save_post', 'save_video_meta');

function save_video_meta($post_id) {
    // global $custom_meta_fields;
     
	$custom_meta_fields = array(
	    array(
	        'label'=> 'Videos',
	        'desc'  => 'Videos.',
	        'id'    => 'video',
	        'type'  => 'text'
	    )
	);

    // verify nonce
    if (!isset($_POST['video_meta_box_nonce']) || !wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__))) 
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }
     
    // loop through fields and save the data
    foreach ($custom_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}

function getVideos(){
	$videos = array();

	$type = 'video';
	$args=array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  'caller_get_posts'=> 1
	  );

	$my_query = null;
	$my_query = new WP_Query($args);

	if( $my_query->have_posts() ) {
	  while ($my_query->have_posts()) : $my_query->the_post();

	  $video = array();

	  $video['title'] = the_title('', '', false);
	  $video['content'] = get_the_content();

	  $meta_value = get_post_meta(get_the_ID(), 'video', true );

	  $video['video'] = $meta_value;

	  $videos[] = $video;

	  endwhile;
	}

	return $videos;
}

?>
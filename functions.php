<?php

add_action('init','create_post_type');
function create_post_type(){
  register_post_type('recette',
    array(
      'labels'=>array(
        'name' => __('Recettes'),
        'singular_name' => __('Recette')
        ),
      'public' => true,
      'supports' => array('title','editor','thumbnail'),
      'has_archive' => true
      )
    );

  register_post_type('ingrédient',
    array(
      'labels'=>array(
        'name' => __('Ingrédients'),
        'singular_name' => __('Ingrédient')
        ),
      'public' => true,
      'supports' => array('title'),
      )
    );

  register_post_type('equipe',
    array(
      'labels'=>array(
        'name' => __("L'Equipe"),
        'singular_name' => __("L'Equipe")
        ),
      'public' => true,
      'supports' => array('title', 'thumbnail'),
      )
    );

  register_taxonomy(
    'type',
    'recette',
    array(
      'label' => __('Type'),
      'hierarchical' => true,
    )
  );
};

add_theme_support('post-thumbnails');
add_image_size('img_liste', 270, 220, array('center','top')); 
add_image_size('home', 370, 220, true); 
add_image_size('slider', 1500, 600, true);
add_image_size('otherArticles', 50, 50, true);

// Changer page login 
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/sass/libs/login-style.css" />';
}
add_action('login_head', 'my_custom_login');

// Obtenir les post les plus consultés
// 

function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

?>

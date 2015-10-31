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
add_image_size('slider', 1500, 600, array('center', 'top'));
?>

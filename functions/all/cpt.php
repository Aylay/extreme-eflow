<?php
function codex_custom_init() {

  // Cas Client
  $labelsCasClient = array (
    'name'                  => 'Cas client',
    'singular_name'         => 'Cas client',
    'add_new'               => 'Ajouter un cas client',
    'add_new_item'          => 'Ajouter un nouveau cas client',
    'edit_item'             => 'Editer un cas client',
    'new_item'              => 'Nouveau cas client',
    'all_items'             => 'Tous les cas client',
    'view_item'             => 'Voir un cas client',
    'search_items'          => 'Chercher un cas client',
    'not_found'             => 'Aucun cas client trouvé',
    'not_found_in_trash'    => 'Aucun cas client trouvé dans la poubelle',
    'parent_item_colon'     => '',
    'menu_name'             => 'Cas client',
);
  $argsCasClient = array(
    'labels'                => $labelsCasClient,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'query_var'             => true,
    'rewrite'               => array('slug' => 'cas-client'),
    'with_front'            => false,
    'capability_type'       => 'post',
    'has_archive'           => false,
    'hierarchical'          => false,
    'menu_position'         => null,
    'menu_icon'             => 'dashicons-id-alt',
    'supports'              => array('title', 'thumbnail', 'revisions')
  );
  // register_post_type('cas-client', $argsCasClient);

}

add_action('init', 'codex_custom_init');
<?php 

function registrar_cpt_transacao(){
  register_post_type('transacao', array(
    'label' => 'transacao',
    'description' => 'transacao',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'transacao', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'puclicly_queryable' => true
  ));
}

add_action('init', 'registrar_cpt_transacao');
?>
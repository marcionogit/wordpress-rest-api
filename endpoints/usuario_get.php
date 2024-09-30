<?php

function api_usuario_get($request){

$user = wp_get_current_user();
$user_id = $user->ID;

if($user_id > 0){
  $user_meta = get_user_meta($user_id);

  $response = array(
    "id" => 
  )
}

  return rest_ensure_response($user_meta);
}

function registrar_api_usuario_get(){
  register_rest_route('api', '/usuario', array(
    array(
      'methods' => WP_REST_Server::READABLE,
      'callback' => 'api_usuario_get',
    ),
  ));
}

add_action('rest_api_init', 'registrar_api_usuario_get');

?>
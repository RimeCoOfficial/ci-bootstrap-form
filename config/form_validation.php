<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Form Validation Settings
| -------------------------------------------------------------------------
|
*/

$config = array(
    // 'controller/method'         => ['value1', 'value2'],

    'action/people/invite'      => ['email'],
    'action/comment/add'        => ['comment', 'url_id'],
    'action/url/add'            => ['url'],
    'action/like/add'           => ['url_id'],

    'auth/create_account'       => ['full_name', 'username', 'user_email'],
    'auth/request_sign_in'      => ['email'],
    'auth/request_invite'       => ['full_name', 'email'],
    
    'settings/account'          => ['full_name', 'bio', 'location', 'time_zone'],
    'settings/email'            => ['user_email'],
    'settings/username'         => ['username'],
    'settings/notifications'    => ['notification', 'newsletter', 'announcement', 'tips'],

    'search'                    => ['q'],

    'people/invite'             => ['q'],

    'tool/newsletter/index'     => ['date_picker'],

    'guest/search_by_service'   => ['q', 'actor_id'],
);

function fill_element($config)
{
    $CI =& get_instance();
    $CI->config->load('form_element', TRUE);

    foreach ($config as $path => $elem_arr) foreach ($elem_arr as $key => $id)
    {
        $element = $CI->config->item($id, 'form_element');
        $element = array(
            'field' => $id,
            'label' => $element['label'],
            'rules' => $element['rules'],
        );

        $config[ $path ][ $key ] = $element;
    }

    return $config;
}

$config = fill_element($config);
// var_dump($config); die();
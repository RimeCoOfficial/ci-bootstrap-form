<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Form Elements
| -------------------------------------------------------------------------
|
| input:     username, email, login, full_name, location
| textarea:  bio, comment
| password:  password, old_password, confirm_password
| checkbox:  remember
| dropdown:  time_zone
|
*/

$username_max_length    =   32;

$email_max_length       =  256;

$full_name_max_length   =   50;
$bio_max_length         =  200;
$location_max_length    =   50;

$url_max_length         = 1024; // 3072;

$comment_max_length     =  150;

$search_max_length      =  255;

$date_picker_length     =   19; // 'YYYY-MM-DD HH:MM AM'

include "time_zone.php";

$config = array(
    // input
    'username'  => array(
        'label'         => 'Username',
        'rules'         => 'max_length['.$username_max_length.']|trim|alpha_dash|required|is_username_available',

        'max_length'    => $username_max_length,
        
        'l-addon'       => 'icon-email', // '<i class="icon-email"></i>', // '@',

        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Don\'t worry, you can change it later.',
        'required'      => 1,
    ),
    'user_email' => array(
        'label'         => 'Email Address',
        'rules'         => 'strtolower|max_length['.$email_max_length.']|valid_email|trim|required|is_email_available',

        'max_length'    => $email_max_length,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'What\'s your email address? Email will not be publicly displayed.',
        'type'          => 'email',
        'required'      => 1,
    ),
    'login' => array(
        'label'         => 'Username or Email',
        'rules'         => 'max_length['.max($email_max_length, $username_max_length).']|strip_tags|trim|required',

        'max_length'    => max($username_max_length, $email_max_length),
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Enter your login.',
        // 'required'      => 1,
    ),
    'full_name' => array(
        'label'         => 'Full name',
        'rules'         => 'max_length['.$full_name_max_length.']|strip_tags|trim|required',

        'max_length'    => $full_name_max_length,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Enter your real name, so people you know can recognize you.',
        'required'      => 1,
    ),
    'location' => array(
        'label'         => 'Location',
        'rules'         => 'max_length['.$location_max_length.']|strip_tags|trim',

        'max_length'    => $location_max_length,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Where in the world are you?',
    ),
    'url' => array(
        'label'         => 'URL',
        'rules'         => 'max_length['.$url_max_length.']|trim|valid_url|required',
        
        'max_length'    => $url_max_length,

        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Enter an URL',
        'required'      => 1,
        'type'          => 'url',
    ),
    'url_id' => array(
        'label'         => 'URL Hash',
        'rules'         => 'numeric|trim|required',
    ),
    'email' => array(
        'label'         => 'Email',
        'rules'         => 'strtolower|max_length['.$email_max_length.']|valid_email|trim|required',
        'max_length'    => $email_max_length,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Type an email address',
        'type'          => 'email',
        'required'      => 1,
    ),
    'emails' => array(
        'label'         => 'Emails',
        'rules'         => 'strtolower|valid_emails|trim|required',
        // 'max_length'    => $email_max_length,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Type emails separated by comma',
    ),
    'q' => array(
        'label'         => 'Search',
        'rules'         => 'max_length['.$search_max_length.']|trim', // required

        'max_length'    => $search_max_length,

        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Type here to search',
        // 'required'      => 1,
    ),
    'date_picker' => array(
        'label'         => 'Date time',
        'rules'         => 'max_length['.$date_picker_length.']|trim|required',

        'max_length'    => $date_picker_length,

        'r-addon'       => 'icon-calendar', // '<i class="icon-calendar"></i>',

        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'Set a later date!',
        // 'type'          => 'datetime', // doesn't work
        'required'      => 1,
    ),

    // check box
    'remember'      => array('label' => 'Remember me',   'rules' => 'integer'),

    'newsletter'    => array('label' => 'Newsletter',    'rules' => 'integer|required'),
    'promotion'     => array('label' => 'Promotion',     'rules' => 'integer|required'),
    'notification'  => array('label' => 'Notification',  'rules' => 'integer|required'),
    'announcement'  => array('label' => 'Announcement',  'rules' => 'integer|required'),
    'tips'          => array('label' => 'Tips',          'rules' => 'integer|required'),

    // text area
    'bio' => array(
        'label'         => 'Bio',
        'rules'         => 'max_length['.$bio_max_length.']|htmlspecialchars|trim',

        'max_length'    => $bio_max_length,
        'rows'          => 4,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'About yourself in '.$bio_max_length.' characters or less.',
    ),
    'comment' => array(
        'label'         => 'Comment',
        'rules'         => 'max_length['.$comment_max_length.']|htmlspecialchars|trim|required',

        'max_length'    => $comment_max_length,
        'rows'          => 3,
        
        // html5 tag - not supported in Internet Explorer 9 and earlier versions.
        'placeholder'   => 'in '.$comment_max_length.' characters',
        'required'      => 1,
    ),

    'actor_id'  => array(
        'label'         => 'Account',
        'rules'         => 'required',

        'options'       => array(),
    ),
);
<?php if (!defined('FW')) die('Forbidden');
$options = array(
    'btn_text' => array(
        'type'        => 'text',
        'label'       => __('Button text', 'ust'),
        'description' => __('Button text', 'ust')
    ),

    'popup_title' => array(
        'type'        => 'text',
        'label'       => __('Popup title', 'ust'),
        'description' => __('Popup title', 'ust')
    ),

    'popup_text' => array(
        'type'        => 'wp-editor',
        'label'       => __('Popup text', 'ust'),
        'description' => __('Popup text', 'ust')
    )
);
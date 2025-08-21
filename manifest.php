<?php

if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'WordPress Shortcodes', 'fw' );
$manifest['slug']        = 'unysonplus-wp-shortcodes';
$manifest['description'] = __( 
    'Lets you insert Unyson shortcodes inside any WordPress editor.', 
    'fw' 
);

$manifest['version']     = '1.0.8';
$manifest['display']     = true;
$manifest['standalone']  = true;

// Requirements
$manifest['requirements'] = array(
    'extensions' => array(
        'shortcodes' => array(
            'min_version' => '1.3.17'
        )
    )
);

// Repo Info
$manifest['github_update'] = 'UnysonPlus/UnysonPlus-WP-Shortcodes-Extension';
$manifest['github_repo']   = 'https://github.com/UnysonPlus/UnysonPlus-WP-Shortcodes-Extension';
$manifest['github_branch'] = 'master';

// Author Info
$manifest['author']     = 'UnysonPlus';
$manifest['author_uri'] = 'https://www.lastimosa.com.ph/unysonplus';

// Extra Meta
$manifest['license']      = 'GPL-2.0-or-later';
$manifest['text_domain']  = 'fw';
$manifest['requires_php'] = '7.4';
$manifest['requires_wp']  = '5.8';

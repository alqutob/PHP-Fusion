<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: user_aim_include.php
| Author: PHP-Fusion Development Team
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
    die("Access Denied");
}
include __DIR__.'/locale/'.LANGUAGE.'.php';

$icon = "<img src='".INCLUDES."user_fields/public/user_aim/images/aim.svg' title='Aim' alt='Aim'/>";
// Display user field input
if ($profile_method == "input") {
    $options = [
            'inline'           => TRUE,
            'max_length'       => 16,
            'regex'            => '[a-z](?=[\w.]{3,31}$)\w*\.?\w*',
            'error_text'       => $locale['uf_aim_error'],
            'regex_error_text' => $locale['uf_aim_error_1'],
            'placeholder'      => $locale['uf_aim'],
            'label_icon'       => $icon
        ] + $options;
    $user_fields = form_text('user_aim', $locale['uf_aim'], $field_value, $options);
    // Display in profile
} else if ($profile_method == "display") {
    $user_fields = [
        'icon'  => $icon,
        'title' => $locale['uf_aim'],
        'value' => $field_value ?: ''
    ];
}

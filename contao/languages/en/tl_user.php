<?php

declare(strict_types=1);

(static function (string $table): void {

    $GLOBALS['TL_LANG'][$table]['shortcut_css'] = ['Show keyboard shortcuts in the backend', 'Displays the browser keyboard shortcuts in the relevant places in the backend.'];
    $GLOBALS['TL_LANG'][$table]['read_more'] = 'More information';
    $GLOBALS['TL_LANG'][$table]['shortcut_options'] = [
        1 => 'Superscript',
        2 => 'Behind as text',
        3 => 'Behind as button',
    ];

})('tl_user');

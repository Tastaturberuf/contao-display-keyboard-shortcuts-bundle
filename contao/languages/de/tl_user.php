<?php

declare(strict_types=1);

(static function (string $table): void {

    $GLOBALS['TL_LANG'][$table]['shortcut_css'] = ['Tastenkürzel im Backend anzeigen', 'Zeigt an betreffenden Stellen im Backend die Tastaturkürzel des Browser an.'];
    $GLOBALS['TL_LANG'][$table]['read_more'] = 'Mehr Informationen';
    $GLOBALS['TL_LANG'][$table]['shortcut_options'] = [
        1 => 'Hochgestellt',
        2 => 'Dahinter als Text',
        3 => 'Dahinter als Taste',
    ];

})('tl_user');

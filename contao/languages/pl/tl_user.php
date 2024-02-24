<?php

declare(strict_types=1);

(static function (string $table): void {

    $GLOBALS['TL_LANG'][$table]['shortcut_css'] = ['Pokaż skróty klawiaturowe w zapleczu', 'Pokazuje skróty klawiaturowe przeglądarki w odpowiednich miejscach w zapleczu'];
    $GLOBALS['TL_LANG'][$table]['read_more'] = 'Więcej informacji';
    $GLOBALS['TL_LANG'][$table]['shortcut_options'] = [
        1 => 'Za jako tekst',
        2 => 'Za jako klucz',
        3 => 'Superscript'
    ];

})('tl_user');

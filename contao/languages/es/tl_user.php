<?php

declare(strict_types=1);

(static function (string $table): void {

    $GLOBALS['TL_LANG'][$table]['shortcut_css'] = ['Mostrar atajos de teclado en el backend', 'Muestra los atajos de teclado del navegador en los lugares relevantes del backend'];
    $GLOBALS['TL_LANG'][$table]['read_more'] = 'Más información';
    $GLOBALS['TL_LANG'][$table]['shortcut_options'] = [
        1 => 'Superíndice',
        2 => 'Detrás como texto',
        3 => 'Detrás como botón',
    ];

})('tl_user');

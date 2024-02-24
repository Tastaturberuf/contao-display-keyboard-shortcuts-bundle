<?php

declare(strict_types=1);

(static function (string $table): void {

    $GLOBALS['TL_LANG'][$table]['shortcut_css'] = ['Afficher les raccourcis clavier dans le backend', 'Affiche les raccourcis clavier du navigateur aux endroits appropriés dans le backend'];
    $GLOBALS['TL_LANG'][$table]['read_more'] = 'Plus d\'informations';
    $GLOBALS['TL_LANG'][$table]['shortcut_options'] = [
        1 => 'En exposant',
        2 => 'Derrière sous forme de texte',
        3 => 'Derrière comme touche',
    ];

})('tl_user');

<?php // with ♥ and Contao

declare(strict_types=1);

use Contao\CoreBundle\DataContainer\PaletteManipulator;
use Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle\CssFilesEnum;

(static function (string $table): void {

    $GLOBALS['TL_DCA'][$table]['fields']['shortcut_css'] = [
        'label' => &$GLOBALS['TL_LANG'][$table]['shortcut_css'],
        'inputType' => 'select',
        'options' => CssFilesEnum::getValues(),
        'reference' => &$GLOBALS['TL_LANG'][$table]['shortcut_options'],
        'eval' => [
            'includeBlankOption' => true,
            'tl_class' => 'w50'
        ],
        'sql' => "tinyint(1) NOT NULL default 0"
    ];


    PaletteManipulator::create()
        ->addField('shortcut_css', 'backend_legend', PaletteManipulator::POSITION_APPEND)
        ->applyToPalette('login', $table)
        ->applyToPalette('admin', $table)
        ->applyToPalette('default', $table)
        ->applyToPalette('group', $table)
        ->applyToPalette('extend', $table)
        ->applyToPalette('custom', $table);


    // add read more to field description
    #$href = 'https://to.contao.org/docs/shortcuts';
    #$label = &$GLOBALS['TL_LANG'][$table]['read_more'];
    #$GLOBALS['TL_DCA'][$table]['fields']['shortcut_css']['label'][1] .= sprintf(' <a href="%s" target="blank">%s</a>', $href, $label);

})('tl_user');


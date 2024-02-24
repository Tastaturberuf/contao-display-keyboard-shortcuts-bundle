<?php

declare(strict_types=1);

namespace Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle;

enum CssFilesEnum: int
{
    case SUPER = 1;
    case TEXT = 2;
    case KEY = 3;

    public function getPath(): string
    {
        return match ($this) {
            self::TEXT => 'contao-shortcuts.css',
            self::KEY => 'contao-shortcuts-key.css',
            self::SUPER => 'contao-shortcuts-super.css'
        };
    }

    public static function getValues(): array
    {
        $arr = [];
        foreach (self::cases() as $case) {
            $arr[] = $case->value;
        }

        return $arr;
    }

}

<?php

declare(strict_types=1);

namespace Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TastaturberufContaoDisplayKeyboardShortcutsBundle extends Bundle
{

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

}

<?php

declare(strict_types=1);

namespace Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle\TastaturberufContaoDisplayKeyboardShortcutsBundle;


class Plugin implements BundlePluginInterface
{

    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(TastaturberufContaoDisplayKeyboardShortcutsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }

}

<?php

declare(strict_types=1);

namespace Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle\EventListener;

use Contao\BackendUser;
use Contao\CoreBundle\Routing\ScopeMatcher;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\Asset\PathPackage;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Security\Core\Security;
use Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle\CssFilesEnum;
use ValueError;


class AddCssToBackendListener
{

    public function __construct(
        private readonly ScopeMatcher $scopeMatcher,
        private readonly PathPackage  $pathPackage,
        private readonly Security     $security
    )
    {
    }

    #[NoReturn]
    public function __invoke(RequestEvent $event): void
    {
        $isBackendRequest = $this->scopeMatcher->isBackendRequest($event->getRequest());
        $user = $this->security->getUser();
        $fileId = (int)($user?->shortcut_css ?? 0);

        if (!$isBackendRequest || !$user instanceof BackendUser || $fileId === 0) {
            return;
        }

        try {
            $file = CssFilesEnum::from($fileId)->getPath();
        } catch (ValueError) {
            return;
        }

        $GLOBALS['TL_CSS'][] = $this->pathPackage->getUrl($file);
    }

}

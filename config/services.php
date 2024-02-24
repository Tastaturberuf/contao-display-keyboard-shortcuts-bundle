<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;


use Contao\CoreBundle\Routing\ScopeMatcher;
use Symfony\Component\HttpKernel\KernelEvents;
use Tastaturberuf\ContaoDisplayKeyboardShortcutsBundle\EventListener\AddCssToBackendListener;

/**
 * @Formatter:off
 */
return static function (ContainerConfigurator $container) {

    $container->services()
        ->set(AddCssToBackendListener::class)
            ->args([
                service(ScopeMatcher::class),
                service('assets._package_tastaturberuf_contao_display_keyboard_shortcuts'),
                service('security.helper')
            ])
            ->tag('kernel.event_listener', ['event' => KernelEvents::REQUEST])
    ;

};

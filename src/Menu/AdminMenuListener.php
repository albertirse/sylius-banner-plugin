<?php
/**
 * Created by.
 *
 * User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin\Menu;

use Knp\Menu\ItemInterface;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * Admin Menu Listener.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
final class AdminMenuListener
{

    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        /** @var ItemInterface $menu */
        $menu = $event->getMenu();

        /** @var ItemInterface $catalogMenu */
        $catalogMenu = $menu->getChild('catalog');

        $catalogMenu
            ->addChild('banner', [
                'route' => 'albertirse_sylius_banner_admin_banner_index',
            ])
            ->setLabel('albertirse_sylius_banner.ui.banners')
            ->setLabelAttribute('icon', 'images outline')
        ;
    }
}

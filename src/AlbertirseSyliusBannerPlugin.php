<?php
/**
* User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Albertirse Sylius Banner Plugin.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
final class AlbertirseSyliusBannerPlugin extends Bundle
{
    use SyliusPluginTrait;
}

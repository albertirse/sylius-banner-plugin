<?php
/**
* User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Albertirse Sylius Banner Extension.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
final class AlbertirseSyliusBannerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container): void
    {
        $config = $this->processConfiguration($this->getConfiguration([], $container), $config);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $loader->load('services.yaml');
    }
}

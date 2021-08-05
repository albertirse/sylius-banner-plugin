<?php
/**
 * Created by.
 *
 * User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin\Entity;

use Sylius\Component\Core\Model\ImagesAwareInterface;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * Interface BannerInterface.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
interface BannerInterface extends ResourceInterface, ImagesAwareInterface, CodeAwareInterface
{

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;
}

<?php
/**
 * Created by.
 *
 * User: Albertirse <web.dg.st@gmail.com>
 */

namespace Albertirse\SyliusBannerPlugin\Entity;

use Sylius\Component\Core\Model\ImageInterface;

/**
 * Interface Banner Image.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
interface BannerImageInterface extends ImageInterface
{
 /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string|null 
     *
     * @return void
     */
    public function setDescription(?string $description): void;

    /**
     * @return bool
     */
    public function getTitle(): ?string;

    /**
     * @return string|null
     */
    public function setTitle(?string $title): void;

    /**
     * @return bool
     */
    public function hasLink(): bool;

    /**
     * @return string|null
     */
    public function getLink(): ?string;
}

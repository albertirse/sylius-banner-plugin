<?php
/**
 * Created by.
 *
 * User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin\Entity;

use Sylius\Component\Core\Model\Image;

/**
 * Banner Image.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
class BannerImage extends Image implements BannerImageInterface
{

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

   /**
     * {@inheritdoc}
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }


    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $name
     *
     * @return void
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    /**
     * {@inheritdoc}
     */
    public function hasLink(): bool
    {
        return !empty($this->type);
    }

    /**
     * {@inheritdoc}
     */
    public function getLink(): ?string
    {
        return $this->type;
    }

}

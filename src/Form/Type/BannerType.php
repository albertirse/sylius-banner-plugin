<?php
/**
 * Created by.
 *
 * User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\EventSubscriber\AddCodeFormSubscriber;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Banner Type.
 *
 * @author Albertirse <web.dg.st@gmail.com>
 */
final class BannerType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'sylius.ui.name',
            ])
            ->add('images', CollectionType::class, [
                'entry_type' => BannerImageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label' => 'sylius.form.product.images',
            ])
        ;

        $builder->addEventSubscriber(new AddCodeFormSubscriber());
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix(): string
    {
        return 'albertirse_sylius_banner';
    }
}

<?php
/**
 * Created by.
 *
 * User: Albertirse <web.dg.st@gmail.com>
 */

declare(strict_types=1);

namespace Albertirse\SyliusBannerPlugin\Repository;

use Doctrine\ORM\NonUniqueResultException;
use Albertirse\SyliusBannerPlugin\Entity\Banner;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * @method Banner|null find($id, $lockMode = null, $lockVersion = null)
 * @method Banner|null findOneBy(array $criteria, array $orderBy = null)
 * @method Banner[]    findAll()
 * @method Banner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BannerRepository extends EntityRepository
{
    /**
     * @param string $code
     *
     * @return Banner|null
     */
    public function getOneByCode(string $code): ?Banner
    {
        $qb = $this->createQueryBuilder('b');

        $qb
            ->addSelect('i')
            ->join('b.images', 'i')
            ->where('b.code = :code')
            ->setParameter('code', $code)
        ;

        try {
            $result = $qb->getQuery()->getOneOrNullResult();
        } catch (NonUniqueResultException $exception) {
            $result = null;
        }

        return $result;
    }
}

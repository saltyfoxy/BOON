<?php

namespace App\Repository;

use App\Entity\Store;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Store|null find($id, $lockMode = null, $lockVersion = null)
 * @method Store|null findOneBy(array $criteria, array $orderBy = null)
 * @method Store[]    findAll()
 * @method Store[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoreRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Store::class);
    }

    public function search($criteria)
    {
        $qb = $this->createQueryBuilder('s');
        if (!empty($criteria['search'])) {
            $qb->where('s.name LIKE :string')
                ->orWhere('s.adress LIKE :string')
                ->orWhere('s.description LIKE :string')
                ->setParameter(':string', '%' . $criteria['search'] . '%');
        }

        $query = $qb->getQuery();

        return $query->execute();
    }

    public function getStore($sid)
    {
        return $this->createQueryBuilder('s')
            ->join('s.product', 'p')
            ->addSelect('p')
            ->andWhere('s.id = :sid')
            ->orderBy('p.name', 'ASC')
            ->setParameter('sid', $sid)
            ->getQuery()
            ->getResult();
    }

    public function findOneBySomeField($value): ?Store
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.picture1 = :val')
            ->andWhere('s.picture2 = :val')
            ->andWhere('s.picture2 = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult();
    }
}

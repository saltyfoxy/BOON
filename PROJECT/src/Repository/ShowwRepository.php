<?php

namespace App\Repository;

use App\Entity\Showw;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Showw|null find($id, $lockMode = null, $lockVersion = null)
 * @method Showw|null findOneBy(array $criteria, array $orderBy = null)
 * @method Showw[]    findAll()
 * @method Showw[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowwRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Showw::class);
    }

    public function getShowwsWithArtists()
    {
        $qb = $this->createQueryBuilder('showw')
            ->leftJoin('showw.artist', 'artist')
            ->addSelect('artist')
            ->where('artist.id = :id')
            ->getQuery();

        return $qb->execute();
    }
    // /**
    //  * @return Showw[] Returns an array of Showw objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Showw
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

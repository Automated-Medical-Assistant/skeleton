<?php

namespace App\Repository;

use App\Entity\NumberList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method NumberList|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumberList|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumberList[]    findAll()
 * @method NumberList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumberListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NumberList::class);
    }

    // /**
    //  * @return NumberList[] Returns an array of NumberList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NumberList
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

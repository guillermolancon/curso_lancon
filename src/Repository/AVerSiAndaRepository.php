<?php

namespace App\Repository;

use App\Entity\AVerSiAnda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AVerSiAnda|null find($id, $lockMode = null, $lockVersion = null)
 * @method AVerSiAnda|null findOneBy(array $criteria, array $orderBy = null)
 * @method AVerSiAnda[]    findAll()
 * @method AVerSiAnda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AVerSiAndaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AVerSiAnda::class);
    }

    // /**
    //  * @return AVerSiAnda[] Returns an array of AVerSiAnda objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AVerSiAnda
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\HealthData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HealthData|null find($id, $lockMode = null, $lockVersion = null)
 * @method HealthData|null findOneBy(array $criteria, array $orderBy = null)
 * @method HealthData[]    findAll()
 * @method HealthData[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HealthDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HealthData::class);
    }

    // /**
    //  * @return HealthData[] Returns an array of HealthData objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HealthData
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

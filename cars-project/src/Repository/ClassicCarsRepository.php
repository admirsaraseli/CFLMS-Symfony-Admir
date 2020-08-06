<?php

namespace App\Repository;

use App\Entity\ClassicCars;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ClassicCars|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassicCars|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassicCars[]    findAll()
 * @method ClassicCars[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassicCarsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClassicCars::class);
    }

    // /**
    //  * @return ClassicCars[] Returns an array of ClassicCars objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ClassicCars
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

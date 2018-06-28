<?php

namespace App\Repository;

use App\Entity\Bergeries;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bergeries|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bergeries|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bergeries[]    findAll()
 * @method Bergeries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BergeriesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bergeries::class);
    }

//    /**
//     * @return Bergeries[] Returns an array of Bergeries objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bergeries
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

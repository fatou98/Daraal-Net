<?php

namespace App\Repository;

use App\Entity\Betes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Betes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Betes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Betes[]    findAll()
 * @method Betes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BetesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Betes::class);
    }

//    /**
//     * @return Betes[] Returns an array of Betes objects
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
    public function findOneBySomeField($value): ?Betes
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

<?php

namespace App\Repository;

use App\Entity\TweetPost;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TweetPost|null find($id, $lockMode = null, $lockVersion = null)
 * @method TweetPost|null findOneBy(array $criteria, array $orderBy = null)
 * @method TweetPost[]    findAll()
 * @method TweetPost[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TweetPostRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TweetPost::class);
    }

    // /**
    //  * @return TweetPost[] Returns an array of TweetPost objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TweetPost
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\SessionsCandidats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SessionsCandidats>
 *
 * @method SessionsCandidats|null find($id, $lockMode = null, $lockVersion = null)
 * @method SessionsCandidats|null findOneBy(array $criteria, array $orderBy = null)
 * @method SessionsCandidats[]    findAll()
 * @method SessionsCandidats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionsCandidatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SessionsCandidats::class);
    }

//    /**
//     * @return SessionsCandidats[] Returns an array of SessionsCandidats objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SessionsCandidats
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

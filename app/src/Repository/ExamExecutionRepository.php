<?php

namespace App\Repository;

use App\Entity\ExamExecution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ExamExecution>
 *
 * @method ExamExecution|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExamExecution|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExamExecution[]    findAll()
 * @method ExamExecution[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExamExecutionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExamExecution::class);
    }

//    /**
//     * @return ExamExecution[] Returns an array of ExamExecution objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ExamExecution
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

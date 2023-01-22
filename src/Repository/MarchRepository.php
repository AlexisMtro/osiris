<?php

namespace App\Repository;

use App\Entity\March;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<March>
 *
 * @method March|null find($id, $lockMode = null, $lockVersion = null)
 * @method March|null findOneBy(array $criteria, array $orderBy = null)
 * @method March[]    findAll()
 * @method March[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, March::class);
    }

    public function save(March $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(March $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function nbMarches($user): array
    {
        return $this->createQueryBuilder('m')
            ->select('m')
            ->where('m.id_user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    public function countMarches($user): int
    {
        return $this->createQueryBuilder('m')
            ->select('count(m)')
            ->where('m.id_user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countCommanders1(): array
    {
        return $this->createQueryBuilder('c')
            ->select('count(c.id_commander_1), c')
            ->groupBy('c.id_commander_1')
            ->getQuery()
            ->getResult();
    }

    public function countCommanders2(): array
    {
        return $this->createQueryBuilder('c')
            ->select('count(c.id_commander_2), c')
            ->groupBy('c.id_commander_2')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return March[] Returns an array of March objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?March
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

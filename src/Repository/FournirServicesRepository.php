<?php

namespace App\Repository;

use App\Entity\FournirServices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FournirServices>
 *
 * @method FournirServices|null find($id, $lockMode = null, $lockVersion = null)
 * @method FournirServices|null findOneBy(array $criteria, array $orderBy = null)
 * @method FournirServices[]    findAll()
 * @method FournirServices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournirServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FournirServices::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(FournirServices $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(FournirServices $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return FournirServices[] Returns an array of FournirServices objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FournirServices
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

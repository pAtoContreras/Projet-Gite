<?php

namespace App\Repository;

use App\Entity\FournirEquipements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FournirEquipements>
 *
 * @method FournirEquipements|null find($id, $lockMode = null, $lockVersion = null)
 * @method FournirEquipements|null findOneBy(array $criteria, array $orderBy = null)
 * @method FournirEquipements[]    findAll()
 * @method FournirEquipements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournirEquipementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FournirEquipements::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(FournirEquipements $entity, bool $flush = true): void
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
    public function remove(FournirEquipements $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return FournirEquipements[] Returns an array of FournirEquipements objects
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
    public function findOneBySomeField($value): ?FournirEquipements
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

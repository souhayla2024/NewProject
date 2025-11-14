<?php


namespace App\Repository;

use App\Entity\TypeClt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeClt>
 */
class TypeCltRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeClt::class);
    }

    // Exemple de méthode personnalisée
    public function findAllOrderedByLibelle()
    {
        return $this->createQueryBuilder('t')
            ->orderBy('t.libtypeclt', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Add your custom methods here
}

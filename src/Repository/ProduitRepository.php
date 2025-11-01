<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Produit>
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    /**
     * Trouve le dernier code produit (le plus élevé)
     */
    public function findLastProductCode(): ?string
    {
        $result = $this->createQueryBuilder('p')
            ->select('p.codeprod')
            ->where('p.codeprod IS NOT NULL')
            ->andWhere('p.codeprod != :empty')
            ->setParameter('empty', '')
            ->orderBy('p.codeprod', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        return $result ? $result['codeprod'] : null;
    }
}
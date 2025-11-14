<?php

namespace App\Repository;

use App\Entity\Pays;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pays>
 */
class PaysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pays::class);
    }

    /**
     * Trouver un pays par son LIBPAYS
     */
    public function findByLibelle(string $libelle): ?Pays
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.LIBPAYS = :libelle')
            ->setParameter('libelle', $libelle)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Trouver un pays par son CODEPAYS
     */
    public function findByCode(string $code): ?Pays
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.CODEPAYS = :code')
            ->setParameter('code', $code)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Récupérer tous les pays ordonnés par LIBPAYS
     */
    public function findAllOrderedByLibelle(): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.LIBPAYS', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer tous les pays ordonnés par CODEPAYS
     */
    public function findAllOrderedByCode(): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.CODEPAYS', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Rechercher des pays par continent
     */
    public function findByContinent(string $continent): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.CONTINENT = :continent')
            ->setParameter('continent', $continent)
            ->orderBy('p.LIBPAYS', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Récupérer la liste des pays pour les formulaires (format [code => libelle])
     */
    public function getChoicesForForm(): array
    {
        $pays = $this->findAllOrderedByLibelle();
        $choices = [];

        foreach ($pays as $pay) {
            $choices[$pay->getLIBPAYS()] = $pay;
        }

        return $choices;
    }

    /**
     * Récupérer les pays avec code IATA
     */
    public function findWithIataCode(): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.code_iata IS NOT NULL')
            ->andWhere('p.code_iata != :empty')
            ->setParameter('empty', '')
            ->orderBy('p.LIBPAYS', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // /**
    //  * @return Pays[] Returns an array of Pays objects
    //  */
    /*
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pays
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

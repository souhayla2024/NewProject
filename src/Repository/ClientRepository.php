<?php

namespace App\Repository;

use App\Entity\Client;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Client>
 *
 * @method Client|null find($id, $lockMode = null, $lockVersion = null)
 * @method Client|null findOneBy(array $criteria, array $orderBy = null)
 * @method Client[]    findAll()
 * @method Client[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Client::class);
    }
    /**
     * Construit le QueryBuilder filtré (sans limit/offset).
     * @param array $q params GET (seqclt, nomclt, adresse, ville, pays, nomreseau)
     */
    public function qbWithFilters(array $q): QueryBuilder
    {
        $qb = $this->createQueryBuilder('c');

        // normaliser: trim + case-insensitive
        $like = fn(string $v) => '%'.trim($v).'%';

        if (!empty($q['seqclt'])) {
            $qb->andWhere('c.seqclt LIKE :seqclt')->setParameter('seqclt', $like($q['seqclt']));
        }
        if (!empty($q['nomclt'])) {
            $qb->andWhere('c.nomclt LIKE :nomclt')->setParameter('nomclt', $like($q['nomclt']));
        }
        if (!empty($q['adresse'])) {
            $qb->andWhere('c.adresse LIKE :adresse')->setParameter('adresse', $like($q['adresse']));
        }
        if (!empty($q['ville'])) {
            // Assure-toi que ton entité a bien une propriété string "ville"
            $qb->andWhere('c.ville LIKE :ville')->setParameter('ville', $like($q['ville']));
        }
        if (!empty($q['pays'])) {
            $qb->andWhere('c.pays LIKE :pays')->setParameter('pays', $like($q['pays']));
        }
        if (!empty($q['nomreseau'])) {
            $qb->andWhere('c.nomreseau LIKE :nomreseau')->setParameter('nomreseau', $like($q['nomreseau']));
        }

        // tri par défaut
        $qb->orderBy('c.numclt', 'DESC');

        return $qb;
    }
//    /**
//     * @return Client[] Returns an array of Client objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Client
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

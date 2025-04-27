<?php

namespace App\Repository;

use App\Entity\Programme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Programme>
 */
class ProgrammeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programme::class);
    }

    /**
     * Trouve tous les programmes pour un événement donné, triés par heure de début
     */
    public function findByEvenementOrdered($evenementId): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.evenement = :evenementId')
            ->setParameter('evenementId', $evenementId)
            ->orderBy('p.heureDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    // Vous pouvez ajouter d'autres méthodes personnalisées ici
}
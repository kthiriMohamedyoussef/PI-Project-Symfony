<?php

namespace App\Repository;

use App\Entity\Espace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EspaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Espace::class);
    }

    /**
     * Search for espaces based on a keyword.
     *
     * @param string|null $searchTerm The keyword to search for (optional).
     * @return Espace[] Returns an array of Espace entities.
     */
    public function search(?string $searchTerm = null): array
    {
        $qb = $this->createQueryBuilder('e')
            ->orderBy('e.nom', 'ASC'); // Order results by name in ascending order

        if ($searchTerm) {
            $qb->andWhere(
                $qb->expr()->orX(
                    'e.nom LIKE :searchTerm',
                    'e.localisation LIKE :searchTerm',
                    'e.etat LIKE :searchTerm'
                )
            )->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        return $qb->getQuery()->getResult();
    }
}
<?php

namespace App\Repository;

use App\Entity\TypeEspace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class TypeEspaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeEspace::class);
    }

    /**
     * Search for type_espaces based on a keyword.
     *
     * @param string|null $searchTerm The keyword to search for (optional).
     * @return TypeEspace[] Returns an array of TypeEspace entities.
     */
    public function search(?string $searchTerm = null): array
    {
        $qb = $this->createQueryBuilder('te')
            ->orderBy('te.type', 'ASC'); // Order results by type in ascending order

        if ($searchTerm) {
            $qb->andWhere(
                $qb->expr()->orX(
                    'te.type LIKE :searchTerm',
                    'te.description LIKE :searchTerm'
                )
            )->setParameter('searchTerm', '%' . $searchTerm . '%');
        }

        return $qb->getQuery()->getResult();
    }
}
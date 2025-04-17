<?php
namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    public function search(?string $searchTerm = null)
    {
        $qb = $this->createQueryBuilder('e')
            ->orderBy('e.date', 'DESC');
    
        if ($searchTerm) {
            $qb->andWhere('e.titre LIKE :searchTerm')
               ->setParameter('searchTerm', '%'.$searchTerm.'%');
        }
    
        return $qb->getQuery()->getResult();
    }
}
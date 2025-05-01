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
    public function findAllForCalendar(): array
    {
        return $this->createQueryBuilder('e')
            ->select('e.id, e.titre as title, e.date as start, e.statut, e.prix, e.categorie')
            ->orderBy('e.date', 'ASC')
            ->getQuery()
            ->getResult(); // Changed from getArrayResult() to getResult()
    }
}
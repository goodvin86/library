<?php

namespace App\Repository;

use App\Entity\Publisher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Publisher>
 *
 * @method Publisher|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publisher|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publisher[]    findAll()
 * @method Publisher[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublisherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publisher::class);
    }

    public function save(Publisher $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Publisher $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //запрос на получение всех книг данного издателя
    public function findPublishersBook($id): array
    {
        return $this->createQueryBuilder('p')
            ->select('b.name')
            ->innerJoin('p.books','b','with', 'b.publisher=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult()
        ;
    }
    //запрос на поиск издателя по наименованию
    public function findPublisherByName($value): array
    {
        return $this->createQueryBuilder('p')
            ->select('p.id', 'p.name', 'p.address')
            ->andWhere('p.name LIKE :val')
            ->setParameter('val', '%'.$value.'%')
            ->getQuery()
            ->getResult()
        ;
    }
}

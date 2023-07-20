<?php

namespace App\Repository;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Publisher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Book::class);
    }

    public function save(Book $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Book $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAllBook(): array
    {
        //запрос на получение всех книг (+ возвращаем фамилию автора и наименование издательства)
        return $this->createQueryBuilder('b')
            ->select('b.id','b.name','p.name pn','b.year')
            ->addSelect("GROUP_CONCAT(a.lastname SEPARATOR ', ') as lastname")
            ->leftJoin('b.author','a')
            ->leftJoin('b.publisher','p')
            ->groupBy('b.id')
            ->orderBy('b.id','ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    //запрос на поиск издателя по наименованию
    public function findBookByName($value): array
    {
        return $this->createQueryBuilder('b')
            ->select('b.id','b.name','p.name pn','b.year')
            ->addSelect("GROUP_CONCAT(a.lastname SEPARATOR ', ') as lastname")
            ->andWhere('b.name LIKE :val')
            ->leftJoin('b.author','a')
            ->leftJoin('b.publisher','p')
            ->setParameter('val', '%'.$value.'%')
            ->groupBy('b.id')
            ->getQuery()
            ->getResult()
            ;
    }
}

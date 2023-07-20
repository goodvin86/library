<?php

namespace App\Repository;

use App\Entity\Author;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Author>
 *
 * @method Author|null find($id, $lockMode = null, $lockVersion = null)
 * @method Author|null findOneBy(array $criteria, array $orderBy = null)
 * @method Author[]    findAll()
 * @method Author[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Author::class);
    }

    public function save(Author $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Author $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    //запрос на получение всех книг данного автора
    public function findAuthorsBook($id): array
    {
        return $this->createQueryBuilder('a')
            ->select('b.name')
            ->innerJoin('a.books', 'b')
            ->where('a.id=:id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }

    //запрос на поиск автора по фамилии
    public function findAuthorByName($value): array
    {
        return $this->createQueryBuilder('a')
            ->select('a.id', 'a.firstname', 'a.lastname')
            ->andWhere('a.lastname LIKE :val')
            ->setParameter('val', '%'.$value.'%')
            ->getQuery()
            ->getResult()
            ;
    }

    //запрос на получение авторов без книг
    public function findBadAuthors(): array
    {
        return $this->createQueryBuilder('a')
            //->select('a.lastname')
            ->leftJoin('a.books', 'b')
            ->andWhere('b.id is null')
            ->getQuery()
            ->getResult();
    }
}
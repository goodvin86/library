<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Publisher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

//для загрузки данных в БД: bin/console doctrine:fixtures:load
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //массив из 10 издательств
        $publisher_array = [
            ["name"=>'Эксмо',"address"=>'Москва'],
            ["name"=>'АСТ',"address"=>'Москва'],
            ["name"=>'Просвещение (изд.группа)',"address"=>'Москва, Санкт-Петербург'],
            ["name"=>'Азбука-Аттикус (изд. группа)',"address"=>'Санкт-Петербург, Москва'],
            ["name"=>'Стандартинформ',"address"=>'Москва'],
            ["name"=>'Феникс',"address"=>'Ростов-на-Дону'],
            ["name"=>'Дрофа',"address"=>'Москва'],
            ["name"=>'Эгмонт Россия Лтд',"address"=>'Москва'],
            ["name"=>'РИПОЛ классик (изд. группа)',"address"=>'Москва, Санкт-Петербург'],
            ["name"=>'Росмэн',"address"=>'Москва']
        ];
        //массив из 10 авторов
        $author_array = [
            ["firstname"=>'Олег',"lastname"=>'Дроздов'],
            ["firstname"=>'Иван',"lastname"=>'Сухов'],
            ["firstname"=>'Дмитрий',"lastname"=>'Дмитриев'],
            ["firstname"=>'Оксана',"lastname"=>'Самсонова'],
            ["firstname"=>'Стефан',"lastname"=>'Пермский'],
            ["firstname"=>'Анна',"lastname"=>'Петрова'],
            ["firstname"=>'Григорий',"lastname"=>'Гришин'],
            ["firstname"=>'Элеонора',"lastname"=>'Попова'],
            ["firstname"=>'Ричард',"lastname"=>'Гировский'],
            ["firstname"=>'Роза',"lastname"=>'Алая']
        ];
        //добавление записей в таблицы
        foreach ($publisher_array as $i=>$pub) {
            //добавляем 10 издательств в таблицу "publisher"
            $publisher = new Publisher();
            $publisher->setName($pub['name']);
            $publisher->setAddress($pub['address']);
            $manager->persist($publisher);
            //добавляем 10 авторов в таблицу "author"
            $author = new Author();
            $author->setLastname($author_array[$i]['lastname']);
            $author->setFirstname($author_array[$i]['firstname']);
            $manager->persist($author);
            //добавляем 10 книг в таблицу "book"
            $book = new Book();
            $book->setName('книга '.mt_rand(0,100));
            $book->setYear(mt_rand(1990, 2023));
            $book->setPublisher($publisher);
            $book->addAuthor($author);
            $manager->persist($book);
        }

        $manager->flush();
    }
}

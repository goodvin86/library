<?php

namespace App\Command;

use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:delauthor',
    description: 'Удаление авторов без книг',
    hidden: false,
    aliases: ['app:del-author']
)]
class BadAuthor extends Command
{
    protected static $defaultDescription = 'Удаление авторов без книг';

    public function __construct($projectDir, EntityManagerInterface $entityManager, AuthorRepository $authorRepository)
    {
        //для себя: ссылка на папку проекта, хранится в services.yaml, в данном проекте не используется
        //$this->projectDir = $projectDir;
        //$entityManager тоже не исползуется, можно подключить для выхода на любой entity
        //$this->entityManager = $entityManager;

        //создаем объект класса AuthorRepository
        $this->authorRepository = $authorRepository;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setHelp('Эта команда по удалению всех авторов, у которых нет книг');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $authorRepository = $this->authorRepository;
        $authors = $authorRepository->findBadAuthors();

        //если найдены авторы без книг, то они удаляются
        if(!empty($authors)){
            foreach ($authors as $author){
                $authorRepository->remove($author, true);
            }
        }
        $io = new SymfonyStyle($input,$output);
        $io->success('Авторы, у которых нет книг, удалены');
        return Command::SUCCESS;
    }
}
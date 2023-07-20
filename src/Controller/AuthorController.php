<?php

namespace App\Controller;

use App\Entity\Author;
use App\Form\AuthorType;
use App\Repository\AuthorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/author')]
class AuthorController extends AbstractController
{

    #[Route('/', name: 'app_author')]
    public function index(Request $request, AuthorRepository $authorRepository): Response
    {
        //получаем авторов по результатам поиска по наименованию
        $searchTerm = $request->query->get('q');
        $authors = $authorRepository->findAuthorByName(
            $searchTerm
        );

        if ($request->query->get('preview')) {
            return $this->render('author/_searchPreview.html.twig', [
                'authors' => $authors,
            ]);
        }
        //получаем всех авторов
        return $this->render('author/index.html.twig', [
            'authors' => $authorRepository->findAll(),
        ]);
    }

    //добавляем нового автора
    #[Route('/new', name: 'app_newauthor', methods: ['GET', 'POST'])]
    public function new(Request $request, AuthorRepository $authorRepository): Response
    {
        $author = new Author();
        $form = $this->createForm(AuthorType::class, $author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $authorRepository->save($author, true);

            return $this->redirectToRoute('app_author', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('author/form.html.twig', [
            'author' => $author,
            'form' => $form,
            'title'=>'Новый автор',
        ]);
    }

    //редактируем автора
    #[Route('/edit/{id}', name: 'app_author_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Author $author, AuthorRepository $authorRepository): Response
    {
        $form = $this->createForm(AuthorType::class, $author);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $authorRepository->save($author, true);
            return $this->redirectToRoute('app_author', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('author/form.html.twig', [
            'author' => $author,
            'form' => $form,
            'title'=>'Редактирование автора',
        ]);
    }

    //удаляем автора
    #[Route('/delete/{id}', name: 'app_author_delete', methods: ['GET'])]
    public function delete(string $id, Request $request, Author $author, AuthorRepository $authorRepository): Response
    {
        $authorsbook = $authorRepository->findAuthorsBook($id);

        if ($authorsbook) {
            die(json_encode(array('text' => 'Сперва удалите все книги автора',
                'title'=>'Ошибка',
                'button'=>'Хорошо',
                'color'=>'#3085d6'
            )));
        }
        else {
            $authorRepository->remove($author, true);
            die(json_encode(array('text' => 'Автор успешно удален из базы',
                'id'=>$id,
                'title'=>'Результат',
                'button'=>'Отлично!',
                'color'=>'#04bf23'
            )));
        }
    }

}

<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/books')]
class BooksController extends AbstractController
{
    #[Route('/', name: 'app_books')]
    public function index(Request $request, BookRepository $bookRepository): Response
    {
        //получаем книги по результатам поиска по наименованию
        $searchTerm = $request->query->get('q');
        $books = $bookRepository->findBookByName(
            $searchTerm
        );

        if ($request->query->get('preview')) {
            return $this->render('books/_searchPreview.html.twig', [
                'books' => $books,
            ]);
        }

        //получаем все книги (+ возвращаем фамилию автора и наименование издательства)
        return $this->render('books/index.html.twig', [
            'books' => $bookRepository->findAllBook(),
        ]);

        //получаем все книги (+ возвращаем фамилию автора и наименование издательства)
        //в json-формате с правильным отбражением кириллицы
        //$books = $bookRepository->findAllBook();
        //return new Response(json_encode ($books,JSON_UNESCAPED_UNICODE));
    }

    //добавляем новую книгу
    #[Route('/new', name: 'app_newbook', methods: ['GET', 'POST'])]
    public function new(Request $request, BookRepository $bookRepository): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookRepository->save($book, true);

            return $this->redirectToRoute('app_books', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('books/form.html.twig', [
            'book' => $book,
            'form' => $form,
            'title'=>'Новая книга',
        ]);
    }

    //редактируем книгу
    #[Route('/edit/{id}', name: 'app_book_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Book $book, BookRepository $bookRepository): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bookRepository->save($book, true);
            return $this->redirectToRoute('app_books', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('books/form.html.twig', [
            'book' => $book,
            'form' => $form,
            'title'=>'Редактирование книги',
        ]);
    }

    //удаляем книгу
    #[Route('/delete/{id}', name: 'app_book_delete', methods: ['GET'])]
    public function delete(string $id, Request $request, Book $book, BookRepository $bookRepository): Response
    {
        $bookRepository->remove($book, true);
        die(json_encode(array('text' => 'Книга успешно удалена из базы',
            'id'=>$id,
            'title'=>'Результат',
            'button'=>'Отлично!',
            'color'=>'#04bf23'
        )));
    }
}

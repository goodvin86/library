<?php

namespace App\Controller;

use App\Entity\Publisher;
use App\Form\PublisherType;
use App\Repository\PublisherRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/publisher')]
class PublisherController extends AbstractController
{
    #[Route('/', name: 'app_publisher', methods: ['GET'])]
    public function index(Request $request, PublisherRepository $publisherRepository): Response
    {
        //получаем издателей по результатам поиска по наименованию
        $searchTerm = $request->query->get('q');
        $publishers = $publisherRepository->findPublisherByName(
            $searchTerm
        );

        if ($request->query->get('preview')) {
            return $this->render('publisher/_searchPreview.html.twig', [
                'publishers' => $publishers,
            ]);
        }

        //получаем всех издателей
        return $this->render('publisher/index.html.twig', [
            'publishers' => $publisherRepository->findAll(),
        ]);
    }

    //добавляем нового издателя
    #[Route('/new', name: 'app_newpublisher', methods: ['GET', 'POST'])]
    public function new(Request $request, PublisherRepository $publisherRepository): Response
    {
        $publisher = new Publisher();
        $form = $this->createForm(PublisherType::class, $publisher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $publisherRepository->save($publisher, true);

            return $this->redirectToRoute('app_publisher', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publisher/form.html.twig', [
            'publisher' => $publisher,
            'form' => $form,
            'title'=>'Новый издатель',
        ]);
    }

    //редактируем издателя
    #[Route('/edit/{id}', name: 'app_publisher_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Publisher $publisher, PublisherRepository $publisherRepository): Response
    {
        $form = $this->createForm(PublisherType::class, $publisher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $publisherRepository->save($publisher, true);
            return $this->redirectToRoute('app_publisher', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('publisher/form.html.twig', [
            'publisher' => $publisher,
            'form' => $form,
            'title'=>'Редактирование издателя',
        ]);
    }

    //удаляем издателя
    #[Route('/delete/{id}', name: 'app_publisher_delete', methods: ['GET'])]
    public function delete(string $id, Request $request, Publisher $publisher, PublisherRepository $publisherRepository): Response
    {
        $publishersbook = $publisherRepository->findPublishersBook($id);

        if ($publishersbook) {
            die(json_encode(array('text' => 'Сперва удалите все книги издателя',
                'title'=>'Ошибка',
                'button'=>'Хорошо',
                'color'=>'#3085d6'
            )));
        }
        else {
            $publisherRepository->remove($publisher, true);
            die(json_encode(array('text' => 'Издатель успешно удален из базы',
                'id'=>$id,
                'title'=>'Результат',
                'button'=>'Отлично!',
                'color'=>'#04bf23'
            )));
        }
    }
}

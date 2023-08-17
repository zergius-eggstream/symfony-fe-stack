<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ClientRepository;

#[Route('/_turbo-fragments', name: '_fragment_')]
class FragmentsController extends AbstractController
{
    #[Route('/client-list', name: 'client_list')]
    public function clientList(
        Request $request,
        ClientRepository $clientRepository
    ): Response {
        $offset = $request->query->getInt('offset', 0);
        $count = $request->query->getInt('count', 50);
        $paginator = $clientRepository->getClientsPaginator($offset);
        
        // $clients = $clientRepository->findAll();

        return $this->render('_turbo-fragments/client-list.html.twig', [
            'clients' => $paginator,
            'previous' => $offset - $count,
            'next' => $offset + $count,
            'offset' => $offset,
            'count' => $count,
        ]);
    }

}
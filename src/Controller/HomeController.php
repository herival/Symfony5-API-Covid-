<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function index(CallApiService $callApiService): Response
    {
        // dump($callApiService->getFranceData());
        return $this->render('home/index.html.twig', [
            'data' => $callApiService->getFranceData(),
        ]);
    }
}

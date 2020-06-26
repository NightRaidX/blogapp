<?php

namespace App\Controller;

use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(BlogRepository $blogRepository)
    {


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'blog' => $blogRepository->findby(['frontpage' => true])
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="Index_page")
     */
    public function index()
    {
        return $this->render('pages/index.html.twig', [
        ]);
    }
}

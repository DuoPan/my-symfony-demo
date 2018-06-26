<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoolController extends Controller
{
    /**
     * @Route("/cool", name="cool")
     */
    public function index()
    {
        return $this->render('cool/index.html.twig', [
            'controller_name' => 'CoolController',
        ]);
    }
}

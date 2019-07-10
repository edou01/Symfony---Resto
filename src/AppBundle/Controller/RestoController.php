<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RestoController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('resto/index.html.twig');
    }

    /**
     * @Route("/ajouter", name="add_homepage")
     */
    public function ajouterAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('resto/add.html.twig');
    }
}

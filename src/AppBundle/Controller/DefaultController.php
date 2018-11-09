<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    
    /**
     * @Route("/template", name="template")
     */
    public function templateAction(Request $request)
    {
        // ruta para ver el template
        return $this->render('layout.adminlte.html.twig');
    }
}

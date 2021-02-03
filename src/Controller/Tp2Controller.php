<?php
// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp2Controller extends AbstractController
{
     /**
      * @Route("/tp2")
      */

    public function notifications(): Response
    {   $prueba = TRUE;
        return $this->render('tp2.html.twig',[
            'salio' => $prueba,
            
        ]);
    }
}
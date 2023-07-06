<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
       // die('je suis la requete /first');
        return $this->render('first/index.html.twig', [
            'name'=> 'desombre',
            'firstname'=>'alain'
            //'controller_name' => 'FirstController',
        ]);
    }
    #[Route('/sayHello', name: 'say.hello')]
    public function sayHello(): Response
    {
      $rand =rand(0,10);
      echo($rand);
      if ($rand % 2 == 0){
        return $this->redirectToRoute('first');
      }
        return $this->forward('App\Controller\FirstController::index');
    }

}

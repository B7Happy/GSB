<?php

namespace PPEPharBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;


class CommandeController extends Controller
{
    /**
     * @Route("/coom" , name="commandee")
     */
    public function indexAction(Request $request)
    {
      $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
      if (!$session->has('commande'))
      $commande = new Commande();
      else
      $commande = $em->getRepository('PPEPharBundle:Commande')
      ->find($session->get('commande'));

      $commande->setDate(new \DateTime());
      $commande->setClient($this->getNom());
      $commande->setTTPrix($this->getTTPrix());

    }
}

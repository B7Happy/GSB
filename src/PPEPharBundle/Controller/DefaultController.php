<?php

namespace PPEPharBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/" , name="hhh")
     */
    public function indexAction(Request $request)
    {
  $session = $request->getSession();

        $login = $session->get('login');


        return $this->render('PPEPharBundle:Default:index.html.twig',array(
          'var' => "active"
        ));
    }
}

<?php

namespace PPEPharBundle\Controller;

use PPEPharBundle\Entity\client;
use PPEPharBundle\Entity\Medicament;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProduitController extends Controller
  {
  /**
   * @Route("/produit", name="produit")
   */
  public function indexAction()
  {
    $Medicament = $this->getDoctrine()
    ->getRepository('PPEPharBundle:Medicament')
    ->findAll();

      return $this->render('PPEPharBundle:Produit:index.html.twig', array (
      'Medicament' => $Medicament
    ));
  }
  /**
   * @Route("/nous", name="nous")
   */

  public function somAction()
  {

      return $this->render('PPEPharBundle:Produit:som.html.twig');
  }

  /**
   * @Route("/prepanier", name="prep")
   */

  public function prepanierAction()
  {

      return $this->render('PPEPharBundle:Produit:prepanier.html.twig');
  }
  /**
   * @Route("/ajouterpanier/{id}", name="apanier")
   */

  public function ajouterpanierAction( $id,Request $request)
  {
      $session = $request->getSession();
      if (!$session->has('panier')) $session->set('panier',array());
      $panier = $session->get('panier');

      if (array_key_exists($id, $panier)){
        if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte') ;
      } else {
        if ($request->query->get('qte') != null){
        $panier[$id] = $request->query->get('qte');
      }  else {
          $panier[$id] = 1;
        }
      }
      $session->set('panier',$panier);
      return $this->render('PPEPharBundle:Produit:prepanier.html.twig');
  }

 /**
   * @Route("/panier", name="panier")
   */

 public function panierAction(Request $request)
  {
    $session = $request->getSession();
    $panier = $session->get('panier');
    $Medicament = $this->getDoctrine()
  ->getRepository('PPEPharBundle:Medicament')
    ->findArray(array_keys($session->get('panier')));

    return $this->render('PPEPharBundle:Produit:panier.html.twig',array (
      'Medicament' => $Medicament,
      'panier' => $panier
    ));


 }

 /**
  * @Route("/suppanier/{id}", name="span")
  */

 public function supprepanierAction($id,Request $request)
 {
   $session = $request->getSession();
   $panier = $session->get('panier');
   $Medicament = $this->getDoctrine()
 ->getRepository('PPEPharBundle:Medicament')
   ->findArray(array_keys($session->get('panier')));
   if (array_key_exists($id, $panier))
   {
     unset($panier[$id]);
     $session->set('panier',$panier);

   }


   return $this->redirect($this->generateUrl('panier'));
 }

 /**
  * @Route("/livraison", name="liv")
  */

 public function livraisonAction()
 {


     return $this->render('PPEPharBundle:Produit:livraison.html.twig');
 }

 /**
  * @Route("/payer", name="payer")
  */

 public function payerAction()
 {


     return $this->render('PPEPharBundle:Produit:payer.html.twig');
 }

 /**
  * @Route("/confirmer", name="confirmer")
  */

 public function confirmerAction()
 {
   $message = \Swift_Message::newInstance()
   ->setSubject('Valitation de votre commande')
   ->setFrom(array('saly.moubarak@gmail.com' => "GSB-BHappy"))
   ->setTo('saly.moubarak@gmail.com')
   ->setCharset('utf-8')
   ->setContentType('text/html')
   ->setBody($this->renderView('PPEPharBundle:Produit:validationmail.html.twig'));

   $this->get('mailer')->send($message);


     return $this->render('PPEPharBundle:Produit:confirmer.html.twig');
 }




}

<?php

namespace PPEPharBundle\Controller;

use PPEPharBundle\Entity\Medicament;
use PPEPharBundle\Entity\client;
use PPEPharBundle\Entity\admin;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AdminController extends Controller
  {
  /**
   * @Route("/admin", name="adminhome")
   */
  public function indexAction()
  {
    $Medicament = $this->getDoctrine()
    ->getRepository('PPEPharBundle:Medicament')
    ->findAll();

      return $this->render('PPEPharBundle:Admin:index.html.twig', array (
      'Medicament' => $Medicament
    ));
  }

  /**
   * @Route("/admin/create" , name="cc")
   */
  public function createAction(Request $request)
  {
    $Medicament = new Medicament;

    $form = $this->createFormBuilder($Medicament)
    ->add('Type', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Nom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Effet', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Precaution', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Prix', IntegerType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Save', SubmitType::class, array('label' => 'Ajoute un Medicament ','attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
    ->getForm();

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        // Get Data
        $Type = $form['Type']->getData();
        $Nom = $form['Nom']->getData();
        $Effet = $form['Effet']->getData();
        $Precaution = $form['Precaution']->getData();
        $Prix = $form['Prix']->getData();

        $Medicament->setType($Type);
        $Medicament->setNom($Nom);
        $Medicament->setEffet($Effet);
        $Medicament->setPrecaution($Precaution);
        $Medicament->setPrix($Prix);

        $em = $this->getDoctrine()->getManager();

        $em->persist($Medicament);
        $em->flush();

        $this->addFlash(
        'notice',
        'Medicament Ajoute'
      );

      return $this->redirectToRoute('home');
    }
      return $this->render('PPEPharBundle:Admin:create.html.twig', array(
        'form' => $form->createView()
      ));
  }

  /**
   * @Route("/admin/edit/{id}")
   */
  public function editAction($id, Request $request)
  {
    $Medicament = $this->getDoctrine()
    ->getRepository('PPEPharBundle:Medicament')
    ->find($id);

    $Medicament->setType($Medicament->getType());
    $Medicament->setNom($Medicament->getNom());
    $Medicament->setEffet($Medicament->getEffet());
    $Medicament->setPrecaution($Medicament->getPrecaution());
    $Medicament->setPrix($Medicament->getPrix());

    $form = $this->createFormBuilder($Medicament)
    ->add('Type', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Nom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Effet', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Precaution', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Prix', IntegerType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
    ->add('Save', SubmitType::class, array('label' => 'Update Medicament ','attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
    ->getForm();

    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()){
        // Get Data
        $Type = $form['Type']->getData();
        $Nom = $form['Nom']->getData();
        $Effet = $form['Effet']->getData();
        $Precaution = $form['Precaution']->getData();
        $Prix = $form['Prix']->getData();

        $em = $this->getDoctrine()->getManager();
        $Medicament = $em->getRepository('PPEPharBundle:Medicament')->find($id);

        $Medicament->setType($Type);
        $Medicament->setNom($Nom);
        $Medicament->setEffet($Effet);
        $Medicament->setPrecaution($Precaution);
        $Medicament->setPrix($Prix);




        $em->flush();

        $this->addFlash(
        'notice',
        'Medicament Update'
      );

      return $this->redirectToRoute('home');
    }

      return $this->render('PPEPharBundle:Admin:edit.html.twig', array(
        'medicament' => $Medicament,
        'form' => $form->createView()
      ));
  }

  /**
   * @Route("/admin/delete/{id}")
   */
  public function deleteAction($id)
  {
      $em = $this->getDoctrine()->getManager();
      $Medicament = $em->getRepository('PPEPharBundle:Medicament')->find($id);

      $em->remove($Medicament);
      $em->flush();

      $this->addFlash(
        'notice',
        'Medicament Removed'

      );

      return $this->redirectToRoute('home');
  }

  /**
     * @Route("/admin/client", name="chome")
     */
    public function cliindexAction(Request $request)
    {
    $Client  = $this->getDoctrine()
      ->getRepository('PPEPharBundle:client')
      ->findAll();

      $Commande = $this->getDoctrine()
      ->getRepository('PPEPharBundle:Commande')
      ->findAll();

        return $this->render('PPEPharBundle:Admin:cliindex.html.twig', array (
        'Client' => $Client,
        'Commande' => $Commande
      ));
    }


      /**
       * @Route("/admin/login" , name="adminlogin")
       */
      public function loginAction(Request $request)
      {

        $session = $request->getSession();
       $em = $this->getDoctrine()->getManager();
       $repository = $em->getRepository('PPEPharBundle:admin');
       if($request->getMethod()=='POST'){

         $session->clear();
         $iden=$request->get('iden');
         $mp=$request->get('mp');
         $remember=$request->get('remember');

         $admin = $repository->findOneBy(array('iden'=>$iden,'mp'=>$mp));

         if (!$admin) {
     $this->get('session')->getFlashBag()->add('error', 'Mauvais nom ou mot de passe !');
     return $this->redirect($this->generateUrl('adminlogin'));
   }

         $id = $admin->getid();
         $session->set('id',$id);
         $session->set('iden', $iden);
           $session->set('mp', $mp);
         $session->set('admin', $admin);

         if ($admin){
           if ($remember == 'remember-me' ){

             $login = new login();
             $login->setIdentifiant($iden);
             $login->setMp($mp);
             $session->set('login', $login) ;

           }




       } else{
           return $this->render('PPEPharBundle:login:index.html.twig');
         }


   }  else {
     if($session->has('login')){
       $login = $session->get('login');
       $iden = $login->getIden();
       $mp = $login->getMp();
       $client = $repository->findOneBy(array('iden'=>$iden,'mp'=>$mp));



     }
       return $this->render('PPEPharBundle:Admin:login.html.twig');
     }

     if ($admin){
       $Medicament = $this->getDoctrine()
       ->getRepository('PPEPharBundle:Medicament')
       ->findAll();


       return $this->render ('PPEPharBundle:Admin:index.html.twig', array (
       'Medicament' => $Medicament
     ));
     }


      }



}

<?php

namespace PPEPharBundle\Controller;

use PPEPharBundle\Entity\client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use PPEPharBundle\Modals\login;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="homelogin")
     */
    public function indexAction(Request $request)
    {
       $session = $request->getSession();
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository('PPEPharBundle:client');
      if($request->getMethod()=='POST'){

        $session->clear();
        $identifiant=$request->get('identifiant');
        $mp=$request->get('mp');
        $remember=$request->get('remember');

        $client = $repository->findOneBy(array('identifiant'=>$identifiant,'mp'=>$mp));

        if (!$client) {
    $this->get('session')->getFlashBag()->add('error', 'Mauvais nom ou mot de passe !');
    return $this->redirect($this->generateUrl('homelogin'));
  }

        $id = $client->getid();
        $session->set('id',$id);
        $session->set('identifiant', $identifiant);
          $session->set('mp', $mp);
        $session->set('client', $client);

        if ($client){
          if ($remember == 'remember-me' ){

            $login = new login();
            $login->setIdentifiant($identifiant);
            $login->setMp($mp);
            $session->set('login', $login) ;

          }

          return $this->render('PPEPharBundle:Compte:index.html.twig', array('nom' => $client-> getNom(), 'prenom' => $client->getPrenom()));
          return $this->render('PPEPharBundle:Compte:perso.html.twig', array('id' => $client-> getId()));

      } else{
          return $this->render('PPEPharBundle:login:index.html.twig');
        }


  }  else {
    if($session->has('login')){
      $login = $session->get('login');
      $identifiant = $login->getIdentifiant();
      $mp = $login->getMp();
      $client = $repository->findOneBy(array('identifiant'=>$identifiant,'mp'=>$mp));

      if ($client){
        return $this->render ('PPEPharBundle:Compte:index.html.twig', array ('nom' => $client->getNom(), 'prenom' => $client->getPrenom()));
        return $this->render ('PPEPharBundle:Default:index.html.twig', array ('var' => 'active'));
      }

    }
      return $this->render('PPEPharBundle:Login:index.html.twig');
    }

}
    /**
     * @Route("/signup", name="signup")
     */
    public function signupAction(Request $request)
    {

      $client = new client;

      $form = $this->createFormBuilder($client)
      ->add('identifiant', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('Mp', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('Nom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('prenom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('adresse', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('codePostal', IntegerType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('Ville', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('telephone', IntegerType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
      ->add('Save', SubmitType::class, array('label' => 'Inscription ','attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
      ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
          // Get Data
          $identifiant= $form['identifiant']->getData();
          $mp= $form['Mp']->getData();
          $Nom = $form['Nom']->getData();
          $prenom = $form['prenom']->getData();
          $adresse = $form['adresse']->getData();
          $codePostal = $form['codePostal']->getData();
          $Ville = $form['Ville']->getData();
          $telephone= $form['telephone']->getData();


          $client->setIdentifiant($identifiant);
          $client->setMp($mp);
          $client->setNom($Nom);
          $client->setPrenom($prenom);
          $client->setAdresse($adresse);
          $client->setCodePostal($codePostal);
          $client->setVille($Ville);
          $client->setTelephone($telephone);


          $em = $this->getDoctrine()->getManager();

          $em->persist($client);
          $em->flush();

          $this->addFlash(
          'notice',
          'compte cree'
        );

        return $this->redirectToRoute('homelogin');
      }
        return $this->render('PPEPharBundle:Login:signup.html.twig', array(
          'form' => $form->createView()
        ));


    }

    /**
     * @Route("/signout", name="deco")
     */
    public function signoutAction(Request $request)
    {

      $session = $request->getSession();
      $session->clear();
       return $this->redirect($this->generateUrl('homelogin'));

    }
}

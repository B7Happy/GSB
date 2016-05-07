<?php

namespace PPEPharBundle\Controller;

use PPEPharBundle\Entity\client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class CompteController extends Controller
{
    /**
     * @Route("/compte", name="compteh")
     */
    public function indexAction(Request $request)
    {
      $session = $request->getSession();

        return $this->render('PPEPharBundle:Compte:index.html.twig',array('nom' => $client-> getNom(), 'prenom' => $client->getPrenom()));
    }

    /**
     * @Route("/compte/perso", name="cperso")
     */
    public function perosAction( Request $request)
    {
      $session = $request->getSession();
       $identifiant =$session->get('identifiant');
       $mp = $session->get('mp');
       $id = $session->get('id');
      $client = $this->getDoctrine()
    ->getRepository('PPEPharBundle:client')
->find($id);

//$client = new client;

  $client->setNom($client->getNom());
  $client->setPrenom($client->getPrenom());
  $client->setIdentifiant($client->getIdentifiant());
  $client->setAdresse($client->getAdresse());
  $client->setCodePostal($client->getCodePostal());
  $client->setVille($client->getVille());
  $client->setTelephone($client->getTelephone());

  $form = $this->createFormBuilder($client)
  ->add('Nom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('Prenom', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('identifiant', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('adresse', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('codePostal', IntegerType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('Ville', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('Telephone', IntegerType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('Save', SubmitType::class, array('label' => 'Editer mon compte ','attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
  ->add('Annuler', ResetType::class, array('label' => 'Annuler ','attr' => array('class' => 'btn btn-danger', 'style' => 'margin-right:15px')))
  ->getForm();

  $form->handleRequest($request);

  if($form->isSubmitted() && $form->isValid()){
      // Get Data
      $Nom = $form['Nom']->getData();
      $Prenom = $form['Prenom']->getData();
      $identifiant= $form['identifiant']->getData();
      $adresse = $form['adresse']->getData();
      $codePostal = $form['codePostal']->getData();
      $Ville = $form['Ville']->getData();
      $Telephone = $form['Telephone']->getData();

      $em = $this->getDoctrine()->getManager();
      $Medicament = $em->getRepository('PPEPharBundle:client')->find($id);


      $client->setNom($Nom);
      $client->setPrenom($Prenom);
      $client->setIdentifiant($identifiant);
      $client->setAdresse($adresse);
      $client->setCodePostal(  $codePostal);
      $client->setVille($Ville);
      $client->setTelephone($Telephone);

      $em->flush();

      $this->addFlash(
      'notice',
      'Profil Update'
    );

    return $this->redirectToRoute('compteh');
  }

    return $this->render('PPEPharBundle:Compte:perso.html.twig', array(
      'client' => $client,
      'form' => $form->createView()
    ));
}

    /**
     * @Route("/compte/mp", name="cmp")
     */
    public function mpAction(Request $request)
    {
      $session = $request->getSession();
       $identifiant =$session->get('identifiant');
       $mp = $session->get('mp');
       $id = $session->get('id');
      $client = $this->getDoctrine()
    ->getRepository('PPEPharBundle:client')
->find($id);

//$client = new client;

  $client->setMp($client->getMp());


  $form = $this->createFormBuilder($client)
  ->add('Mp', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
  ->add('Save', SubmitType::class, array('label' => 'Update Mot de passe ','attr' => array('class' => 'btn btn-primary','style' => 'margin-bottom:15px' )))
  ->add('Annuler', ResetType::class, array('label' => 'Annuler ','attr' => array('class' => 'btn btn-danger', 'style' => 'margin-right:15px')))


  ->getForm();

  $form->handleRequest($request);

  if($form->isSubmitted() && $form->isValid()){
      // Get Data
      $mp = $form['mp']->getData();


      $em = $this->getDoctrine()->getManager();
      $Medicament = $em->getRepository('PPEPharBundle:client')->find($id);


      $client->setMp($mp);


      $em->flush();

      $this->addFlash(
      'notice',
      'Profil Update'
    );

    return $this->redirectToRoute('compteh');
  }

    return $this->render('PPEPharBundle:Compte:mp.html.twig', array(
      'client' => $client,
      'form' => $form->createView()
    ));

    }

    /**
     * @Route("/compte")
     */
    public function orderAction()
    {
        return $this->render('PPEPharBundle:Compte:index.html.twig');
    }

}

<?php
namespace App\Controller;

use App\Entity\Vehicule;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\DateTime;


class IndexController extends AbstractController
{

          /**
     *@Route("/",name="vehicule_list")
     */
  public function home()
  {
    //récupérer tous les vehicules de la table article de la BD
    // et les mettre dans le tableau $vehicules
    $vehicules= $this->getDoctrine()->getRepository(Vehicule::class)->findAll();
    return  $this->render('vehicule/index.html.twig',['vehicules' => $vehicules]);  
  }

   /**
      * @Route("/vehicule/save")
      */
     public function save() {
       $entityManager = $this->getDoctrine()->getManager();

       $vehicule = new Vehicule();
       $vehicule->setType('Scooter');
       $vehicule->setMarque("BMW");
       $vehicule->setModele("2");
       $vehicule->setNumero_Serie("dezcn1342");
       $vehicule->setCouleur("blanc");
       $vehicule->setPLaque_Immatriculation("12-BMW-34");
       $vehicule->setNb_Kilometre(12045);
       $vehicule->setDate_Achat('2012-09-01');
       $vehicule->setPrix_Achat(19999);
       $vehicule->setDuree_Location(2);

      
       $entityManager->persist($vehicule);
       $entityManager->flush();

       return new Response('Article enregisté avec id   '.$vehicule->getId());
        }

    }
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
use App\Form\Vehicule1Type;
use App\Repository\VehiculeRepository;

class IndexController extends AbstractController
{

    /**
     * @Route("/", name="vehicule_index", methods={"GET"})
     */
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
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
       $vehicule->setNumeroSerie("dezcn1342");
       $vehicule->setCouleur("blanc");
       $vehicule->setPLaqueImmatriculation("12-BMW-34");
       $vehicule->setNbKilometre(12045);
       $vehicule->setDateAchat('2012-09-01');
       $vehicule->setPrixAchat(19999);
       $vehicule->setDureeLocation(2);

      
       $entityManager->persist($vehicule);
       $entityManager->flush();

       return new Response('Article enregisté avec id   '.$vehicule->getId());
        }

    }
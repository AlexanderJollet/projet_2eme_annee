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
        return $this->render('vehicule/indexall.html.twig', [
            'vehicules' => $vehiculeRepository->findAll(),
        ]);
    }

     /**
     * @Route("vehicule/voiture", name="voituredispo", methods={"GET"})
     */
    public function voituredispo(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/indexvoiture.html.twig', [
            'vehicules' => $vehiculeRepository->findBy(['type' => 'voiture']),
        ]);
    }


    /**
     * @Route("vehicule/scooter", name="scooterdispo", methods={"GET"})
     */
    public function scooterdispo(VehiculeRepository $vehiculeRepository): Response
    {
        return $this->render('vehicule/indexscooter.html.twig', [
            'vehicules' => $vehiculeRepository->findBy(['type' => 'Scooter']),
        ]);
    }


}

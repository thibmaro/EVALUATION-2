<?php

namespace App\Controller;

use App\Repository\DegreeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DegreeDetailsController extends AbstractController
{
    /**
     * @Route("/degree/details", name="degree_details")
     */
    public function index(DegreeRepository $degreeRepository)
    {

        $degreeDetails = $degreeRepository ->findAll();

        return $this->render('degree_details/index.html.twig', [
            'degrees' => '$DegreeDetails',
        ]);
    }
}

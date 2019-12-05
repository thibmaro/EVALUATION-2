<?php

namespace App\Controller;

use App\Entity\Degree;
use App\Repository\DegreeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DegreeDetailsController extends AbstractController
{
    /**
     * @Route("admin/degree", name="degree_details")
     */
    public function index(DegreeRepository $degreeRepository)
    {

        $degreeDetails = $degreeRepository ->findAll();

        return $this->render('degree_details/index.html.twig', [
            'degrees' => $degreeDetails
        ]);
    }

    /**
     * @Route("admin/degree/{id}", name="degree_details.showdetails")
     */
    public function showdetails(Degree $degree)
    {
        return $this->render('degree_details/showDetails.html.twig', [
            'degree' => $degree
        ]);
    }
}


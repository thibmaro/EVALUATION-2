<?php

namespace App\DataFixtures;

use App\Entity\Degree;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class DegreeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $degrees = [
          'Aptitude à la manipulation des fluides frigorigènes',
          'ASR - Attestation de Sécurité Routière',
          'CAP CBAB - Constructeur en Béton Armé du Bâtiment',
          'Développeur JAVA J2EE',
          'Titre professionnel Développeur(se) web /webmobile',
          'Titre professionnel Formateur pour adultes'
        ];

        foreach ($degrees as $index => $degreeName) {
            $entity = new Degree();
            $entity -> setName($degreeName);
            $entity -> setRepository("https://www.banque.di.afpa.fr/EspaceEmployeursCandidatsActeurs/EGPResultat.aspx?cr=D%C3%A9veloppeur%20web&cd=&ct=01280m03&type=t");
            $manager -> persist($entity);

            $this -> addReference("Degree_$index", $entity);
        }

        $manager->flush();
    }
}

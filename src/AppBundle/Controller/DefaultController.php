<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction($name = "Papile", $firstname="Thomas" )
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:Formation');
        $formations = $repo->findAll();
        
        $repo = $this->getDoctrine()->getRepository('AppBundle:Experience');
        $experiences = $repo->findAll();
        
        $repo = $this->getDoctrine()->getRepository('AppBundle:Competences');
        $competences = $repo->findAll();
        
        return array(
            'name' => $name,
            'firstname' => $firstname,
            'formations' => $formations,
            'experiences' => $experiences,
            'competences' => $competences,
          
        );
    }
    /**
     * @Route("/create/formation", name="create_formation")
     * @Template()
     */
    public function createAction()
    {
        $form = new Formation();
        $form->setName("Ma formation");
        $form->setDateDebut(New \DateTime());
        $form->setDateFin(New \DateTime());
        $form->setLieu("Grenoble, France");
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
        return array ();
       
    }
}

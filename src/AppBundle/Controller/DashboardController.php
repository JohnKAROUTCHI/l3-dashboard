<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
  *
  * @Route("dashboard")
  *
  */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */
    public function dashboardAction()
    {
      $em = $this->getDoctrine()->getManager();

      $fiches = $em->getRepository('AppBundle:Fiche')->findAll();
      $managers = $em->getRepository('AppBundle:Manager')->findAll();
      $projets = $em->getRepository('AppBundle:Projet')->findAll();

      return $this->render('dashboard/index.html.twig', array(
          'fiches' => $fiches,
          'managers' => $managers,
          'projets' => $projets,
      ));
    }
  }

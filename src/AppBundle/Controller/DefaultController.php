<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
      $entityManager = $this->container
              ->get('doctrine.orm.entity_manager');
      $fiches = $entityManager
              ->getRepository('AppBundle:Fiche')
              ->creatQueryBuilder('f')
              ->where('f.ficheDate > :date')
              ->setParameter('date', new \DateTime())
              ->orderBy('f.ficheDate', 'DESC')
              ->getQuery()
              ->getResult();
      dump($fiches);

//Requête SQL, à placer dans le Repository associé à l'Entité
  // $em = $this->getDoctrine()->getManager();
  //     $query = $em->createQuery
  //     'SELECT f
  //      FROM'
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/hello/{prenom}", name="prenom")
     */
    public function helloAction(Request $request, $prenom)
    {
        // replace this example code with whatever you need
        return $this->render('default/hello.html.twig', [
            'name' => $prenom
        ]);
    }
}

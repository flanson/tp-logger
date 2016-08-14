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
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/exercise-1", name="exercise_1")
     */
    public function exerciseOneAction()
    {
        $exercise1Service = $this->get('exercise1.service');
        $totoQueryString = $exercise1Service->getTotoQueryString();
        // replace this example code with whatever you need
        return $this->render('default/exercise-1.html.twig', [
            'toto_query_String' => $totoQueryString ? $totoQueryString : 'No query String Found',
        ]);
    }

    /**
     * @Route("/exercise-2", name="exercise_2")
     */
    public function exerciseTwoAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}

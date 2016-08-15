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
        //@TODO change Index page with link to each exercises
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
        return $this->render('default/exercise-1.html.twig', [
            'toto_query_String' => $totoQueryString ? $totoQueryString : 'No query String Found',
        ]);
    }

    /**
     * @Route("/exercise-2", name="exercise_2")
     */
    public function exerciseTwoAction()
    {
        $exercise1Service = $this->get('exercise1.service');
        $totoQueryString = $exercise1Service->getTotoQueryString();
        return $this->render('default/exercise-2.html.twig', [
            'toto_query_String' => $totoQueryString ? $totoQueryString : 'No query String Found',
        ]);
    }

    /**
     * @Route("/exercise-3", name="exercise_3")
     */
    public function exerciseThreeAction()
    {
        $exercise1Service = $this->get('exercise1.service');
        $totoQueryString = $exercise1Service->getTotoQueryString();
        return $this->render('default/exercise-3.html.twig', [
            'toto_query_String' => $totoQueryString ? $totoQueryString : 'No query String Found',
        ]);
    }

    /**
     * @Route("/exercise-4", name="exercise_4")
     */
    public function exerciseFourAction()
    {
        $totoQueryString = '';
        return $this->render('default/exercise-4.html.twig', [
            'toto_query_String' => $totoQueryString ? $totoQueryString : 'No query String Found',
        ]);
    }

    /**
     * @Route("/exercise-5", name="exercise_5")
     */
    public function exerciseFiveAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/exercise-1.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}

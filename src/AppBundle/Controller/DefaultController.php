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
        $exercise2Service = $this->get('exercise2.fakelog');
        $exercise2Service->createFakeErrorLog();
        return $this->render('default/exercise-2.html.twig', [
        ]);
    }

    /**
     * @Route("/exercise-3", name="exercise_3")
     */
    public function exerciseThreeAction()
    {
        $exercise3Service = $this->get('exercise3.fakelog');
        $exercise3Service->createFakeLogs();
        return $this->render('default/exercise-3.html.twig', [
        ]);
    }

    /**
     * @Route("/exercise-4", name="exercise_4")
     */
    public function exerciseFourAction()
    {
        $exercise4Service = $this->get('exercise4.fakelog');
        $exercise4Service->createFakeErrorLog();
        return $this->render('default/exercise-4.html.twig', [
        ]);
    }

    /**
     * @Route("/exercise-5", name="exercise_5")
     */
    public function exerciseFiveAction()
    {
        $exercise5Service = $this->get('exercise5.fakelog');
        $exercise5Service->createFakeErrorLog();
        return $this->render('default/exercise-5.html.twig', [
        ]);
    }
}

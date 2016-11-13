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
        $lessons = $this->getDoctrine()
            ->getRepository('AppBundle:Lesson')
            ->findAll();

        if (!$lessons) {
            throw $this->createNotFoundException(
                'No lessons found for id '
            );
        }
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', ['lessons' => $lessons,
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
    /**
     * @Route("/lessons", name="lessons")
     */
    public function lessonsAction(Request $request)
    {

    }



}

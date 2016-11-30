<?php

namespace Panda\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('GeekHubBlogBundle:Default:index.html.twig');
    }

    /**
     * @param $name
     * @return Response
     */
    public function oneParameterAction($name)
    {
        return $this->render('GeekHubBlogBundle:Default:oneParameter.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * @param $firstName
     * @param $lastName
     * @return Response
     */
    public function twoParametersAction($firstName, $lastName)
    {
        return $this->render('GeekHubBlogBundle:Default:twoParameters.html.twig', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
    }
}

<?php

namespace Panda\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PandaExampleBundle:Default:index.html.twig');
    }
}

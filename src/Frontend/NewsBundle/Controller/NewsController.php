<?php

namespace Frontend\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/home")
     */
    public function indexAction()
    {
        return $this->render('FrontendNewsBundle:Home:index.html.twig');
    }
}

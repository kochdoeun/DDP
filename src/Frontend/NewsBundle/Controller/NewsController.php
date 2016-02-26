<?php

namespace Frontend\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsController extends Controller
{
    /**
     * @Route("/news")
     */
    public function indexAction()
    {
        return $this->render('FrontendNewsBundle:Default:index.html.twig');
    }
}

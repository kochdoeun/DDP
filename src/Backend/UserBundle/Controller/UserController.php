<?php

namespace Backend\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/user")
     */
    public function indexAction()
    {
        return $this->render('UserBundle:Default:index.html.twig');
    }
}

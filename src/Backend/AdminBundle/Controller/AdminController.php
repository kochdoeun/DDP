<?php

namespace Backend\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    /**
     * @Route("/sample", name="homepage_sample")
     * @Template("AdminBundle:sample:homepage.html.twig")
     */
    public function indexAction()
    {
        return [];
    }

    /**
     * @Route("/sample/tables",  name="app_sample_tables")
     * @Template("AdminBundle:sample:tables.html.twig")
     */
    public function tablesAction()
    {
        return [
            'browserData' => $this->getFakeBrowserTableData()
        ];
    }

    /**
     * @Route("/sample/forms",  name="app_sample_forms")
     * @Template("AdminBundle:sample:forms.html.twig")
     */
    public function formsAction()
    {
        return [];
    }

    /**
     * @Route("/sample/panels",  name="app_sample_panels")
     * @Template("AdminBundle:sample:panels.html.twig")
     */
    public function panelsAction()
    {
        return [];
    }

    /**
     * @Route("/sample/buttons",  name="app_sample_buttons")
     * @Template("AdminBundle:sample:buttons.html.twig")
     */
    public function buttonsAction()
    {
        return [];
    }

    /**
     * @Route("/sample/notifications",  name="app_sample_notifications")
     * @Template("AdminBundle:sample:notifications.html.twig")
     */
    public function notificationsAction()
    {
        return [];
    }

    /**
     * @Route("/sample/typography",  name="app_sample_typography")
     * @Template("AdminBundle:sample:typography.html.twig")
     */
    public function typographyAction()
    {
        return [];
    }

    /**
     * @Route("/sample/icons",  name="app_sample_icons")
     * @Template("AdminBundle:sample:icons.html.twig")
     */
    public function iconsAction()
    {
        return [];
    }

    /**
     * @Route("/sample/grid",  name="app_sample_grid")
     * @Template("AdminBundle:sample:grid.html.twig")
     */
    public function gridAction()
    {
        return [];
    }


    private function getFakeBrowserTableData()
    {
        $data = [];

        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'engine' => 'engine_'.$i,
                'browser' => 'browser_'.$i,
                'platform' => 'platform_'.$i,
                'engineVersion' => 'v'.$i,
                'grade' => $i
            ];
        }

        return $data;
    }
}

<?php

namespace NoiseLabs\Bundle\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @author Vítor Brandão <noisebleed@noiselabs.org>
 */
class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template("NoiseLabsWebsiteBundle:Home:index.html.smarty")
     */
    public function indexAction()
    {
        return array();
    }
}

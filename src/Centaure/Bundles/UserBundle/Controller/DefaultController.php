<?php

namespace Centaure\Bundles\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CentaureBundlesUserBundle:Default:index.html.twig');
    }
}

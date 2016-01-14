<?php

namespace uni\bundle\misjuegosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('uniMisJuegosBundle:Default:index.html.twig');
    }
}

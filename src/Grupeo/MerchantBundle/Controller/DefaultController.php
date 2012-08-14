<?php

namespace Grupeo\MerchantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('MerchantBundle:Default:index.html.twig');
    }
}

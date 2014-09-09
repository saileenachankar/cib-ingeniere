<?php

namespace cibWebsite\cibIngenierieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class homePageController extends Controller
{
    public function indexAction()
    {
        return $this->render('cibWebsitecibIngenierieBundle:homePage:index.html.twig');
    }
}

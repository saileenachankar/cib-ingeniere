<?php
namespace cibWebsite\cibIngenierieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class aboutPageController extends Controller
{
    public function aboutAction()
    {
        return $this->render('cibWebsitecibIngenierieBundle:aboutPage:about.html.twig');
    }
}
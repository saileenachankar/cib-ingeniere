<?php
namespace cibWebsite\cibIngenierieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class offersPageController extends Controller
{
    public function logicielsAction()
    {
        return $this->render('cibWebsitecibIngenierieBundle:offersPage:logiciels.html.twig');
    }

    public function materielsAction()
    {
        return $this->render('cibWebsitecibIngenierieBundle:offersPage:materiels.html.twig');
    }
}

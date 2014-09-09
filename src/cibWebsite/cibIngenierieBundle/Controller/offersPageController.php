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
        return $this->render('cibWebsitecibIngenierieBundle:offersPage:materielsnew.html.twig');
    }

    public function servicesAction()
    {
        return $this->render('cibWebsitecibIngenierieBundle:offersPage:services.html.twig');
    }

    public function financementAction()
    {
        return $this->render('cibWebsitecibIngenierieBundle:offersPage:financement.html.twig');
    }
}

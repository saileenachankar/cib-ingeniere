<?php

namespace cibWebsite\cibIngenierieBundle\Controller;

use cibWebsite\cibIngenierieBundle\Entity\ContactForm;
use cibWebsite\cibIngenierieBundle\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;


class contactPageController extends Controller
{
    public function contactAction(Request $request)
    {
        $contact = new ContactForm();
        $form = $this->createForm(new ContactFormType(), $contact);
        $form ->handleRequest($request);
        if ($form->isValid()) {
            return new Response('test');
        }

        return $this->render('cibWebsitecibIngenierieBundle:contactPage:contact.html.twig', array('form' => $form->createView()));
    }
}

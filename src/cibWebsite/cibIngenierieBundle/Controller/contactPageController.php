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
            $message = \Swift_Message::newInstance()
                ->setSubject('test subject')
                ->setFrom('zoyaroya21@gmail.com')
                ->setTo($this->container->getParameter('cibWebsite_cibIngenierie.emails.contact_email'))
                ->setBody($this->renderView('cibWebsitecibIngenierieBundle:contactPage:contactEmail.txt.twig', array('contact' => $contact)));
            $this->get('mailer')->send($message);

            $this->get('session')->getFlashBag()->add('noticeSuccess', 'Your contact enquiry was successfully sent. Thank you!');

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
            return $this->redirect($this->generateUrl('cibWebsitecibIngenierieBundle_contactpage'));
        }

        return $this->render('cibWebsitecibIngenierieBundle:contactPage:contact.html.twig', array('form' => $form->createView()));
    }
}

<?php
namespace cibWebsite\cibIngenierieBundle\Controller;

use cibWebsite\cibIngenierieBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;


class signInPageController extends Controller
{
    public function loginAction(Request $request)
    {
        $user = new User();

        $session = $request->getSession();

        /*if($request-> getMethod()=='POST'){
            $username= $request->get('userName');
            $password= $request->get('password');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('cibWebsitecibIngenierieBundle:users');
            $user = $repository->findOneBy(array('userName'=> $username, 'password'=> $password));

            if($user)
            {
                return $this->render('cibWebsitecibIngenierieBundle:homePage:index.html.twig', array('name'=>$user->getFirstname()));
            }
            else {

                return $this->render('cibWebsitecibIngenierieBundle:homePage:index.html.twig');
            }
        }*/

        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

        return $this->render('cibWebsitecibIngenierieBundle:signInPage:signIn.html.twig', array('last_Username'=>$lastUsername, 'error'=>$error,));
    }

    public function login_checkAction()
    {
        // The security layer will intercept this request
    }



}
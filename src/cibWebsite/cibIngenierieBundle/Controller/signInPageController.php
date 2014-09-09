<?php
namespace cibWebsite\cibIngenierieBundle\Controller;

use cibWebsite\cibIngenierieBundle\Entity\users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class signInPageController extends Controller
{
    public function signInAction(Request $request)
    {
        $user = new users();
        if($request-> getMethod()=='POST'){
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
        }

        return $this->render('cibWebsitecibIngenierieBundle:signInPage:signIn.html.twig');
    }

}
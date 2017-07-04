<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user_index")
     */
    public function indexAction()
    {
        return $this->render('user/index.html.twig', array(
            // ...
        ));
    }
    
    /**
     * @Route("/user/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) 
    {
        $users = new User();

        $form = $this->createForm('AppBundle\Form\UserType', $users);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            //var_dump($activity);exit;
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($users);
            $em->flush();

            return $this->redirectToRoute('user_index');
        }
        
        return $this->render('user/new.html.twig', 
            [
                "users" => $users, 
                "form" => $form->createView()
            ]
        );
    }

}

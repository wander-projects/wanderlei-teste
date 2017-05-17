<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Activity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("activity")
 */
class ActivityController extends Controller
{
    /**
     * @Route("/", name="activity_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $activities = $em->getRepository('AppBundle:Activity')->findAll();

        return $this->render('activity/index.html.twig', array(
            'activities' => $activities,
        ));
    }

    /**
     * @Route("/new", name="activity_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $activity = new Activity();

        $form = $this->createForm('AppBundle\Form\ActivityType', $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //var_dump($activity);exit;
            if ($activity->getSituation() == true) {
                $activity->setSituation(true);
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();

            return $this->redirectToRoute('activity_index');
        }

        return $this->render('activity/new.html.twig', array(
            'activity' => $activity,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/{id}", name="activity_show")
     * @Method("GET")
     */
    public function showAction(Activity $activity)
    {
        $deleteForm = $this->createDeleteForm($activity);

        return $this->render('activity/show.html.twig', array(
            'activity' => $activity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/edit", name="activity_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Activity $activity)
    {
        $deleteForm = $this->createDeleteForm($activity);
        $editForm = $this->createForm('AppBundle\Form\ActivityType', $activity);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activity_index');
        }

        return $this->render('activity/edit.html.twig', array(
            'activity' => $activity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
}

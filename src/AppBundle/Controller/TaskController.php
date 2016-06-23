<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/task")
 */
class TaskController extends Controller
{   
    /**
     * @Route("/create")
     * @Template("Task/create.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function createAction(Request $request)
    {
        $task = new Task();
        
        $form = $this
            ->createFormBuilder($task)
            //->setAction($this->generateUrl('default_create'))
            ->add('name')
            ->add('description')
            ->add('deadline')
            ->add('priority')
            ->add('submit', 'submit')
            ->getForm();
        
        $form->handleRequest($request);   //pobranie pól i wypełnienie task tym, co przyszło w formularzu
        
        if ($form->isValid()) {
            $em = $this
                ->getDoctrine()
                ->getManager();
            
            $user = $this->getUser();
            $user->addTask($task);
            
            $em->persist($task);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('homepage');  //homepage to nazwa routa, na który mnie przekierowuje
        }
        
        return ['form' => $form->createView()];
        
    }
    
    /**
     * @Route("/show/{id}")
     * @Template("Task/show.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function showAction($id)   //wczytywanie istniejącej encji
    {
        $task = $this->getDoctrine()->getRepository('AppBundle:Task')->find($id);
        
        if (!$task) {          //sprawdzam, czy zadanie istnieje
            throw $this->createNotFoundException('Task not found');
        }
        
        return ['task' => $task];
    }
    
    /**
     * @Route("/showAll")
     * @Template("Task/showAll.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function showAllAction()
    {
        $tasks = $this->getDoctrine()->getRepository('AppBundle:Task')->findBy(['user' => $this->getUser()]);
                
        return ['tasks' => $tasks];
    }
    
    
    
}
    



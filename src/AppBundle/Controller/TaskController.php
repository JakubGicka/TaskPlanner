<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @Route("/task")
 */
class TaskController extends Controller
{   
    /**
     * @Route("/new")
     * @Template()
     * @Security("has_role('ROLE_USER')")
     */
    public function newAction()
    {
        $task = new Task();
        
        $form = $this
                ->createFormBuilder($task)
                //->setAction($this->generateUrl('Task_create'))  //jeśli nie ma action, to wysyła się na tem sam adres
                ->add('category', 'choice', array('label'=>'Category',
                'choices'=>array('Home'=>'Home', 
                    'Job'=>'Job', 
                    'Family'=>'Family',
                    'Friends'=>'Friends',
                    'Garden'=>'Garden',
                    'Hobby'=>'Hobby'
                    ),))
                ->add('submit', 'submit')
                ->getForm();
        
        return ['form' => $form->createView()];
        
    }
    
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
            //->setAction($this->generateUrl('Task_create'))
            ->add('category', 'choice', array('label'=>'Category',
                'choices'=>array('Home'=>'Home', 
                    'Job'=>'Job', 
                    'Family'=>'Family',
                    'Friends'=>'Friends',
                    'Garden'=>'Garden',
                    'Hobby'=>'Hobby'
                    ),))
            ->add('name')
            ->add('description')
            ->add('deadline')
            ->add('priority', 'choice', array('label'=>'Priority',
                'choices'=>array('Pilne'=>'Pilne', 'Średnio ważne'=>'Średnio ważne', 'Mało istotne'=>'Mało istotne'),))
            ->add('status', 'choice', array('label'=>'Status',
                'choices'=>array('Do zrobienia'=>'Do zrobienia', 'W trakcie'=>'W trakcie', 'Zrobione'=>'Zrobione'),))
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
    
    /**
     * @Route("/edit/{id}")
     * @ParamConverter("task", class="AppBundle:Task")
     * @Template("Task/edit.html.twig")
     * @Security("task.isAuthor(user)")
     */
    public function editAction(Task $task, Request $request)   
    {
        $form = $this
            ->createFormBuilder($task)
            //->setAction($this->generateUrl('Task_edit'))
            ->add('name')
            ->add('description')
            ->add('deadline')
            ->add('priority', 'choice', array('label'=>'Priority',
                'choices'=>array('Pilne'=>'Pilne', 'Średnio ważne'=>'Średnio ważne', 'Mało istotne'=>'Mało istotne'),))
            ->add('status', 'choice', array('label'=>'Status',
                'choices'=>array('Do zrobienia'=>'Do zrobienia', 'W trakcie'=>'W trakcie', 'Zrobione'=>'Zrobione'),))
            //->add('category')
            ->add('submit', 'submit')
            ->getForm();
        
        $form->handleRequest($request);   
        
        if ($form->isValid()) {
            $em = $this
                ->getDoctrine()
                ->getManager();
            
            $user = $this->getUser();
            $user->addTask($task);
            
            $em->persist($task);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('app_task_show', ['id' => $task->getId()]); 
        }
        
        return ['form' => $form->createView()];
        
    }
    
    /**
     * @Route("/comment/{id}")
     * @ParamConverter("task", class="AppBundle:Task")
     * @Template("Task/comment.html.twig")
     * @Security("task.isAuthor(user)")
     */
    public function commentAction(Task $task, Request $request)
    {
        $form = $this
            ->createFormBuilder($task)
            //->setAction($this->generateUrl('Task_comment'))
            ->add('comment')
            ->add('submit', 'submit')
            ->getForm();
        
        $form->handleRequest($request);   
        
        if ($form->isValid()) {
            $em = $this
                ->getDoctrine()
                ->getManager();
            
            $user = $this->getUser();
            $user->addTask($task);
            
            $em->persist($task);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('app_task_show', ['id' => $task->getId()]); 
        }
        
        return ['form' => $form->createView()];
        
    }
    
}
    



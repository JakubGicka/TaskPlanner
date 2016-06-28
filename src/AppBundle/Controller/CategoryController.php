<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/category")
 */
class CategoryController extends Controller
{
    /**
     * @Route("/create")
     * @Template("Category/create.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function createAction(Request $request)
    {
        $category = new Category();
        
        $form = $this
            ->createFormBuilder($category)
            //->setAction($this->generateUrl('Category_create'))
            ->add('home', 'radio', array('label' => 'Home', 'required'  => false,))
            ->add('job', 'radio', array('label' => 'Job', 'required'  => false,))
            ->add('family', 'radio', array('label' => 'Family', 'required'  => false,))
            ->add('friends', 'radio', array('label' => 'Friends', 'required'  => false,))
            ->add('garden', 'radio', array('label' => 'Garden', 'required'  => false,))
            ->add('hobby', 'radio', array('label' => 'Hobby', 'required'  => false,))
            ->add('submit', 'submit')
            ->getForm();
        
        if ($form->isValid()) {
            $em = $this
                ->getDoctrine()
                ->getManager();
            
            $user = $this->getUser();
            $user->addCategory($category);
            
            $em->persist($category);
            $em->persist($user);
            $em->flush();
            
            return $this->redirectToRoute('app_task_create');  //homepage to nazwa routa, na który mnie przekierowuje
        }
        
        return ['form' => $form->createView()];
        
    }
}

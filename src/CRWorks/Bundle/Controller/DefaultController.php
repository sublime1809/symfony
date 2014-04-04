<?php

namespace CRWorks\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CRWorks\Bundle\Entity\CRUser;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CRWorksBundle:Default:index.html.twig', array('name' => $name, 'display' => true));
    }
    
    public function loginAction($username) {
        $user = $this->getDoctrine()->getRepository('CRWorksBundle:CRUser')->findOneBy(array('username' => $username));
        if(!$user) {
            $user = new CRUser();
            $user->setUsername($username);

            $docManager = $this->getDoctrine()->getManager();
            $docManager->persist($user);
            $docManager->flush();
        }
        return $this->render('CRWorksBundle:Default:index.html.twig', array('name' => $username, 'display' => true));
    }
    
    /**
     * @Template()
     */
    public function customizeAction() {
        return array();
    }
}

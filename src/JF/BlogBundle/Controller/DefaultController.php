<?php

namespace JF\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JFBlogBundle:Default:index.html.twig');
    }
}

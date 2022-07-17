<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * @author Vitali Romanenko <vit.romanenko@gmail.com>
 */

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default_index")
     * @author Vitali Romanenko
     * description - main method
     */

    public function index()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/about", name="default_about")
     * @author Vitali Romanenko
     * description - it is ABOUT link
     */
    public function about()
    {
        return $this->render('default/about.html.twig');
    }

}
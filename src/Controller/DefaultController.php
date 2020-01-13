<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\GreetingGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController
{
    
    /**
     * @Route("/index/{name}")
     */
    public function index($name)
    {
        $number = random_int(0, 100);

        // return new Response(
        //     '<html><body>Lucky number: '.$number.''. $name .'</body></html>'
        // );
        // $logger->info("application symfony".$name); // dependency logger 
        return $this->render('default/index.html.twig',['name'=> $name]);
        // return $this->render('default/index.html.twig',['name'=>$generator->getArray()]);
        // return $this->json(['name'=> 'zakaria','symfony'=>'simo']);
    }
    /**
     * @Route("/put")
     */
    public function put()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number .'</body></html>'
        );
        // $logger->info("application symfony".$name); // dependency logger 
        // return $this->render('default/index.html.twig',['name'=> $name]);
        // return $this->render('default/index.html.twig',['name'=>$generator->getArray()]);
        // return $this->json(['name'=> 'zakaria','symfony'=>'simo']);
    }
    
}
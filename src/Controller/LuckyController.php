<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** * @Route("/blog", requirements={"locale": "en|es|fr"}, name="blog_") */ 

class LuckyController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number($max)
    {
        $number = random_int(0, $max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    /** * @Route("/{en}", name="index") */ 
    public function en()
    {

        return new Response(
            '<html><body>Lucky number: ziko</body></html>'
        );
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{
    #[Route('', name: 'index')]
    public function index(): Response
    {

        $news_list = [];

        for ($i=0; $i < 4; $i++) { 
            array_push($news_list, [
                "type"=>"news", 
                "title"=>"News{$i}", 
                "link"=>"https://juliensousa.fr/", 
                "imgurl"=>"https://pbs.twimg.com/profile_images/821723876208021504/UsXO_Hus_400x400.jpg", 
                "imgalt"=>"phto temp"
            ]);
        }

        return $this->render('public/index.html.twig', [
            'news_list' => $news_list,
        ]);
    }
}

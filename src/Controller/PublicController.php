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
        $agenda_list = [];

        for ($i=0; $i < 4; $i++) { 
            array_push($news_list, [
                "title"=>"News{$i}", 
                "link"=>"https://juliensousa.fr/", 
                "imgurl"=>"https://pbs.twimg.com/profile_images/821723876208021504/UsXO_Hus_400x400.jpg", 
                "imgalt"=>"photo temp"
            ]);
        }

        for ($i=0; $i < 4; $i++) { 
            array_push($agenda_list, [
                "title"=>"Date{$i}", 
                "dateAttr" => "2021-04-05",
                "dayText" => "05",
                "monthText" => "avril",
                "link"=>"https://juliensousa.fr/", 
                "imgurl"=>"https://pbs.twimg.com/profile_images/821723876208021504/UsXO_Hus_400x400.jpg", 
                "imgalt"=>"photo temp"
            ]);
        }

        return $this->render('public/index.html.twig', [
            'news_list' => $news_list,
            'agenda_list' => $agenda_list,
        ]);
    }
}

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

        for ($i=0; $i < 2; $i++) { 
            array_push($news_list, [
                "title"=>"Lorem IpsNews numero{$i}", 
                "link"=>"https://juliensousa.fr/", 
                "imgurl"=>"https://static.cnews.fr/sites/default/files/gigi_williams_366676_copier-taille1200_6202ada544ad4.jpg", 
                "imgalt"=>"photo temp"
            ]);
        }

        for ($i=0; $i < 5; $i++) { 
            array_push($agenda_list, [
                "title"=>"Lorem IpsDate numero{$i}", 
                "dateAttr" => "2021-04-05",
                "dayText" => "05",
                "monthText" => "avril",
                "link"=>"https://juliensousa.fr/", 
                "imgurl"=>"https://quovadis1954.com/app/uploads/2022/06/ambiance-agenda-sur-mesure-quo-vadis.jpg", 
                "imgalt"=>"photo temp"
            ]);
        }

        return $this->render('public/index.html.twig', [
            'news_list' => $news_list,
            'agenda_list' => $agenda_list,
        ]);
    }
}

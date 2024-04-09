<?php
namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use DateTimeImmutable;
use Exception;

#[AsTwigComponent('Inset:Agenda')]
class InsetAgenda
{
    
    
    // Contruction HTML
    public string $type ="agenda";
    public string $title;
    public string $link;
    public string $imgurl;
    public string $imgalt;

    public string $dayText;
    public string $monthText;
    public string $dateAttr;

   
}
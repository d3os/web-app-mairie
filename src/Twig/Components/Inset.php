<?php
namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Inset
{
    public string $type;
    public string $title;
    public string $link;
    public string $imgurl;
    public string $imgalt;

 
}
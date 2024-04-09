<?php
namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('Inset:News')]
class InsetNews
{
    public string $type ="news";

    public string $title;
    public string $link;
    public string $imgurl;
    public string $imgalt;
}
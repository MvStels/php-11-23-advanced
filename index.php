<?php
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/App/ValueObject.php';


function rndRGBColorCode(): string
{
    return 'rgb(' . rand(0, 255) . ',' . rand(0, 255) . ',' . rand(0, 255) . ')';
}

$rndColor = rndRGBColorCode();
$valPrint = '<body><h1 align = "center">Random color background : ' . $rndColor . '</h1></body>';
$colorPage = sprintf('<style type="text/css"> body {background-color: %s} </style>', $rndColor);
echo $valPrint . $colorPage;


$color = new ValueObject(250, 250, 250);


$mixedColor = $color->mix();
$center = ($mixedColor->getRed() + $mixedColor->getGreen() + $mixedColor->getBlue()) / 3;
$center1 = '<body><h1 align = "center"> Average value:' . $center . '</h1></body>';

echo $center1;


$equals = $color->equals($color);

dd($mixedColor);











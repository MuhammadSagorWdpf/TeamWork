<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

enum Section: string
{
    case Banner = 'banner';
    case Services = 'services';
    case HomeServices = 'services';
    case Psychologists = 'psychologists';
    case Rebates = 'rebates';
    case Articles = 'articles';
    case Abouts = 'abouts';
    case Faqs = 'faqs';
    
}

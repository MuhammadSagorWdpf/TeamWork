<?php

namespace App\Enums;

enum Page: string
{
    case Homepage = 'home';
    case AboutPage = 'about';
    case ServicesPage = 'services';
    case AppointmentPage = 'appointment';
    case PsychologistPage = 'psychologist';
}


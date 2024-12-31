<?php

namespace App\Controller;

class Controller 
{
    public function route(): void 
    {
        if (isset($_GET['controller']))
        {
            switch ($_GET['controller']) {
                case 'page':
                    // charger le controller page
                    echo 'page';
                    break;
                case 'book':
                    // charger le controller book
                    echo 'book';
                    break;
                default:
                    // erreur
                    break;
            }
        } else {
            // charger la page d'acceuil
        }
    }
}
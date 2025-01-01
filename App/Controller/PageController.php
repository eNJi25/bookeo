<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    // charger l'action about
                    $this->about();
                    break;
                case 'home':
                    // charger l'action home
                    echo 'home';
                    break;
                default:
                    // erreur
                    break;
            }
        } else {
            // charger la page d'acceuil
        }
    }

    protected function about()
    {
        $this->render('pages/about', [
            'test' => "abc",
            'test2' => "abc2"
        ]);
    }
}

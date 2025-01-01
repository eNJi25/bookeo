<?php

namespace App\Controller;

use App\Repository\BookRepository;

class BookController extends Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        // charger l'action about
                        $this->show();
                        break;
                    case 'list':
                        // charger l'action list
                        break;
                    case 'edit':
                        // charger l'action edit
                        break;
                    case 'new':
                        // charger l'action new
                        break;
                    case 'delete':
                        // charger l'action delete
                        break;
                    default:
                        throw new \Exception("Cette action n'existe pas :" . $_GET['action']);
                        break;
                }
            } else {
                throw new \Exception("Aucune action détectée!");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }

    protected function show()
    {
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];

                $bookRepository = new BookRepository();
                $book = $bookRepository->findOneById($id);

                $this->render('book/show', [
                    'book' => $book
                ]);
            } else {
                throw new \Exception("L'id est manquant");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }
    }
}

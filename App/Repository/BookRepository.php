<?php

namespace App\Repository;

use App\Entity\Book;

class BookRepository
{
    public function findOneById(int $id)
    {
        // Ici normalement Appel BDD, la on créer en dur un obket puis on le retourne pour le test
        $book = [
            'id' => 1,
            'title' => 'Titre test',
            'description' => 'Ceci est un test'
        ];

        $bookEntity = new Book();
        $bookEntity->setId($book['id']);
        $bookEntity->setTitle($book['title']);
        $bookEntity->setDescription($book['description']);

        return $bookEntity;
    }
}

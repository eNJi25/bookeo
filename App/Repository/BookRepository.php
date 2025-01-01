<?php

namespace App\Repository;

use App\Entity\Book;
use App\Db\Mysql;

class BookRepository
{
    public function findOneById(int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
        $query = $pdo->prepare('SELECT * FROM book WHERE id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        $book = $query->fetch();

        /* Ici  on créer en dur un obket puis on le retourne pour le test
        $book = [
            'id' => 1,
            'title' => 'Titre test',
            'description' => 'Ceci est un test'
        ];
        */

        $bookEntity = new Book();
        $bookEntity->setId($book['id']);
        $bookEntity->setTitle($book['title']);
        $bookEntity->setDescription($book['description']);


        return $bookEntity;
    }
}

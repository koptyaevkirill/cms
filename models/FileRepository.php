<?php

class FileRepository extends Repository {

    public function findAll() {
        $query = $this->em->query('SELECT * FROM testFiles');
        return $query->fetchAll();
    }
    public function findByOne($id) {
        $query = $this->em->prepare('SELECT * FROM  testFiles WHERE  user_id = :id');
        $query->execute(array(
            ':id' => $id
        ));
        return $query->fetchAll();
    }
    public function save($data) {
        $query = $this->em->prepare('INSERT INTO testFiles (ulr, created_at, user_id) VALUES(:name, :createdAt, :userID)');
        $query->execute(array(
            ':name' => $data['name'],
            ':createdAt' => $data['createdAt'],
            ':userID' => $data['userID']
        ));
        return $this->em->lastInsertId();
    }
}


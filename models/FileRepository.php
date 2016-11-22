<?php

class FileRepository extends Repository {

    public function findAll() {
        $query = $this->em->query('SELECT * FROM testFiles');
        return $query->fetchAll();
    }
    public function findByOne($email) {
        $query = $this->em->prepare('SELECT * FROM  testFiles WHERE  login = :email');
        $query->execute(array(
            ':email' => $email
        ));
        return $query->fetch();
    }
    public function save($data) {
        $query = $this->em->prepare('INSERT INTO test (login,password) VALUES(:email,:password)');
        $query->execute(array(
            ':email' => $data['email'],
            ':password' => $data['password']
        ));
        return $query->fetch();
    }
}


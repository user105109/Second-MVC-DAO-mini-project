<?php
namespace App\Models;
use App\Models\Connection;
use PDO;
class Car {
    private $id;
    private $model;
    private $prix;

    public function getId()
    {
        return $this->id;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model): void
    {
        $this->model = $model;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    public function listCars() {
        $pdo = Connection::connect();

        $sql = 'SELECT * FROM voiture';
        return $pdo->query($sql)->fetchAll((PDO::FETCH_ASSOC));

    }

    public function create() {
        $pdo = Connection::connect();

        $sql = 'INSERT INTO voiture VALUES (null, ?, ?)';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->model, $this->prix]);

    }

    public function find($id) {
        $pdo = Connection::connect();

        $sql = "SELECT * FROM voiture WHERE id = $id";
        return $pdo->query($sql)->fetch((PDO::FETCH_ASSOC));
    }

    public function update($id) {
        $pdo = Connection::connect();

        $sql = "UPDATE voiture
                SET model = ?,
                    prix = ?
                WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$this->model, $this->prix]);
    }

    public function delete($id) {
        $pdo = Connection::connect();

        $sql = "DELETE FROM voiture WHERE id = $id";
        $stmt = $pdo->query($sql);
        $stmt->execute([]);
    }
}
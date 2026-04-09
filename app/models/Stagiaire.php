<?php
require_once 'connect.php';

class Stagiaire extends connect
{
    private $nom;
    private $prenom;
    private $age;
    private $login;
    private $password;



    public function getPassword(): string|int
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }
    public function getLogin(): string|int
    {
        return $this->login;
    }
    public function setLogin($login): void
    {
        $this->login = $login;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    public function setAge($age): void
    {
        $this->age = $age;
    }
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    public function create()
    {
        $pdo = static::connection();

        $stmt = $pdo->prepare("INSERT INTO stagiaire VALUES (null, ?, ?, ?, ?, ?)");
        $stmt->execute([
           $this->nom,
           $this->prenom,
           $this->age,
           $this->login,
           $this->password
        ]);
    }
    public function update($id)
    {
        $pdo = static::connection();
        $sql = "UPDATE stagiaire SET nom = ?, prenom = ?, age = ?, login = ?, password = ? WHERE id = ?";

        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
           $this->nom,
           $this->prenom,
           $this->age,
           $this->login,
           $this->password,
           $id
        ]);
    }
    public function delete($id)
    {
        $pdo = static::connection();

        $stmt = $pdo->prepare("DELETE FROM stagiaire WHERE id = ?");
        $stmt->execute([$id]);
    }
    public static function all()
    {
        $pdo = static::connection();
        $sql = "SELECT * FROM stagiaire";
        $stmt = $pdo->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Stagiaire');

        return $stmt;
    }

    public static function find($id) {
        try {
            $res = Stagiaire::where('id', $id, $op = '=');
        } catch (Exception $exp) {
            $res = "Cette personne, n'existe pas";
        }

        return $res;
    }
    public static function where($col, $val, $op)
    {
        $pdo = static::connection();
        $sql = "SELECT * FROM stagiaire WHERE $col $op ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$val]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Stagiaire');
        return $stmt->fetch();
    }
}
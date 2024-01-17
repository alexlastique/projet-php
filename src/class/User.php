<?php

class User {
    public $id;
    public $role;
    public $email;
    public $password;
    public $id_c;
    
    public static function register($email, $password) {
        $user = new User();
        $user->email = $email;
        $user->role = 0;
        $user->setPassword($password);
        $user->id_c = null;
        return $user;
    }
    
    public static function getByEmail($email) {
        global $db;
        $query = $db->prepare('SELECT * FROM utilisateur WHERE email = :email');
        $query->execute([':email' => $email]);
        $donneeUser = $query->fetchAll(); // si pas de result , c'est false;
        $user = new User();
        $user->id = $donneeUser[0]["id"];
        $user->role = $donneeUser[0]["role"];
        $user->email = $donneeUser[0]["email"];
        $user->password = $donneeUser[0]["mdp"];
        $user->id_c = $donneeUser[0]["id_c"];
        return $user;
    }
    
    public function setPassword($password) {
        $this->password = hash('sha256', $password);
        return $this->password;
    }
    
    public function verifyPassword($password) {
        return (hash('sha256', $password) == $this->password); // true ou false
    }
    
    public function save() {
        global $db;
        $query = $db->prepare('INSERT INTO utilisateur (role, email, mdp, id_c) VALUES(:role, :email, :mdp, :id_c)');
        $query->execute([
            ':role' => $this->role,
            ':email' => $this->email,
            ':mdp' => $this->password,
            ':id_c' => $this->id_c,
        ]);
        return $db->lastInsertId();
    }
}

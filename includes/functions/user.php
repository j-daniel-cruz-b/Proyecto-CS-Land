<?php

include_once 'db_connection.php';

class User extends DB{

    private $nombre;
    private $usuario;

    public function userExists($user, $pass){
        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM user WHERE `nameU` = :user AND `passU` = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM user WHERE nameU = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['firstnameU'].' '.$currentUser['lastnameU'];
            $this->usuario = $currentUser['nameU'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}

?>
<?php

class Reservation {
    private $id;
    private $name;
    private $surname;
    private $tel;
    private $email;
    private $date;
    private $message;

    public function __construct($id, $name, $surname, $tel, $email, $date, $message) {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->tel = $tel;
        $this->email = $email;
        $this->date = $date;
        $this->message = $message;
    }

    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getTel() {
        return $this->tel;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDate() {
        return $this->date;
    }

    public function getMessage() {
        return $this->message;
    }
}
?>

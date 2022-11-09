<?php
    require_once 'user.php';

    class Student extends User {
        public $rate;

        public function __construct($n, $s, $a, $r) {
            $this->setInfo($n, $s, $a);
            $this->rate = $r;
        }
        public function show() {
            echo 'Фамилия: '.$this->surname.'<br>';
            echo 'Имя: '.$this->name.'<br>';
            echo 'Возраст: '.$this->age.'<br>';
            echo 'Рейтинг: '.$this->rate.'<br>'.'<br>';
        }  
        public function getRate() {
            return $this->rate;
        } 
    }
?> 


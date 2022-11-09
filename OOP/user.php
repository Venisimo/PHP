<?php
    class User {
        protected $name;
        protected $surname;
        protected $age;

        public function __construct($n, $s, $a) {
            $this->setInfo($n, $s, $a);
    }

    public function show() {
        echo 'Фамилия: '. $this->surname. '<br>';
        echo 'Имя: '. $this->name. '<br>';
        echo 'Возраст: '. $this->age. '<br>';
    }

    protected function setInfo($n, $s, $a) {
        $this->name = $n;
        $this->surname = $s;
        $this->age = $a;
    }

    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getAge() {
        return $this->age;
    }         
}
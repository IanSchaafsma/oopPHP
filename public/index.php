<?php

class Car{

    // properties
    private $name;
    private $color='blue';

    // Methods
    function set_name(string $name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

}
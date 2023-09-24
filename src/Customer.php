<?php

namespace Irfan\Belajar;

class Customer {

    /**
     * Class constructor.
     */
    public function __construct(private string $name)
    {
        $this->name = $name;
    }

    public function Hay(string $name): string
    {
        return "Hay $name, Namaku $this->name, jangan panggila aku anak kecil ya..";
    }
}
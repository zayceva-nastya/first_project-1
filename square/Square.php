<?php
class Square
{
    private $a;
    public function __construct($a)
    {
        $this->a = $a;
    }
    public function perimetr()
    {
        return $this->a * 4;
    }
    public function area()
    {
        return $this->a ** 2;
    }
}

<?php

namespace HaymeTG;

class AceMel64
{

    public function __construct($string, $salt)
    {
        $this->string = $string;
        $this->salt = $salt;
    }

    public function encrpyt()
    {
        return md5($this->string.$this->salt);
    }
}

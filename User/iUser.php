<?php

namespace User;

interface iUser{
    public function getName() : string;
    public function getSurname(): string;
    public function getOld();
}

?>
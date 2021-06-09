<?php

namespace User;

interface iUser{
    public function getUser() : array;
    public function getUsername(int $usernameid) : string;
    public function getPassword(int $passwordid) : string;
    public function getName() : string;
    public function getSurname(): string;
    public function getOld();
}

?>
<?php

namespace User;

class User{

    private $userPath;
    private $userFile;
    private $user;

    public function __construct(){
        $this->userPath = 'json'.DIRECTORY_SEPARATOR;
        $this->userFile = $this->userPath . 'user' . '.json' ;
        $this->user = json_decode(file_get_contents($this->userFile));
    }

    public function getUser()
    {
        return $this->user;
    }
    public function getUsername($usernameid)
    {
        $userName =$this->user[$usernameid-1]->username;
        return $userName;
    }
    public function getPassword($passwordid)
    {
        $userPass =$this->user[$passwordid-1]->password;
        return $userPass;
    }

    public function getName() : string
    {
        return '';
    }
    public function getSurname(): string
    {
        return '';
    }
    public function getOld()
    {

    }


}

?>
<?php

namespace User;

include ('iUser.php');

class User implements iUser{

    private $userPath;
    private $userFile;
    private $user;

    public function __construct(){
        $this->userPath = 'json'.DIRECTORY_SEPARATOR;
        $this->userFile = $this->userPath . 'user' . '.json' ;
        $this->user = json_decode(file_get_contents($this->userFile));
    }

    public function getUser() : array
    {
        return $this->user;
    }
    public function getUsername($usernameid) : string
    {
        $userName =$this->user[$usernameid-1]->username;
        return $userName;
    }
    public function getPassword($passwordid) : string 
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
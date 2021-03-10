<?php
class Dbconfig{



    private $dbPath = 'json'.DIRECTORY_SEPARATOR;
    private $dirCheck;
    public function __construct() 
    {
        $this->dirCheck = is_dir($this->dbPath);
    }  

    public function getDbConfig(){
            try { 
                if(!$this->dirCheck){ 
                    Throw new \Exception('Dizinde Dosya Yok!!', 404); 
                }
                else if($this->dirCheck){
                    Throw new \Exception('Dizinde Dosya Var!!', 405); 
                }
               
            } catch (\Exception $e){ 
                if ($e->getCode() === 404){
    
                    return 'Lütfen Dosya oluşturun';    
                } 
                else{
                    return 'Dosya mevcut';
                }
            }
    }
}
?>
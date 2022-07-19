<?php
require_once "DB.php";

class Estilo{


    private int $idEstilo;

    public function __construct(private string $nomeEstilo){

    }
    public function getIdEstilo():int{
        return $this->idEstilo;
    }
    public function getNomeEstilo():string{
        return $this->nomeEstilo;
    }
    public function setIdEstilo(int $idEstilo){
        $this->idEstilo = $idEstilo;
    }
    public function setNomeEstilo(string $nomeEstilo){
        $this->nomeEstilo = $nomeEstilo;
    }
    
    public function addEstilo(){
        $sql = "INSERT INTO estilo (identificacao) VALUES ('$this->nomeEstilo')";
        $db = new DB();
        $resultado = $db->manipular($sql);
        if($resultado==1){
            return true;
        } else {
            return false;
        }
    }
}


?>

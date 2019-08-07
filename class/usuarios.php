<?php

class usuarios{

    private $idusuario;
    private $usulogin;
    private $senha;
    private $dtcadastro;

    public function getidusuario(){
    return    $this->$idusuario;
    }

    public function setidusuario($value){
        $this->$idusuario = $value;
    }
}

    public function getusulogin(){
        return    $this->$usulogin;
        }

        public function setiusulogin($value){
            $this->$usulogin = $value;
        }
    }

    public function getsenha(){
        return    $this->$senha;
        }

        public function setsenha($value){
            $this->$senha = $value;
        }
    }

    public function getdtcadastro(){
        return    $this->$dtcadastro;
        }

        public function setdtcadastro($value){
            $this->$dtcadastro = $value;
        }
    }

    function laodbyid($id){
        $sql = new sql();

        $results = sql->select("SELECT * FROM usuarios WHERE idusuario = :ID", array( ":ID"=>$id
        ));

        if(count($results)>0){
            
            $row = $results[0];

            $this-setidusuario($row['idusuario']);
            $this-setusulogin($row['usulogin']);
            $this-setsenha($row['senha']);
            $this-dtcadastro($row['dtcadastro']);
        }

    }

    public function __tostring(){
        return json_encode(array(
        "idusuario"=>$this->getidusuario(),
        "usulogin"=>$this->getusulogin(),
        "senha"=>$this->getsenha(),
        "dtcadastro"=>$this->getcadstro()->format("d/m/Y H:i:s")
        ));
    }

?>
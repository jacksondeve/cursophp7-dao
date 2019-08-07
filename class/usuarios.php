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

            $this->setdata($results[0]);
        }

    }

    public function getlist(){
        $sql = new sql();

        return $sql->select("SELECT * FROM usuarios ORDER BY usulogin;");

    }

    public static function seach($login){

        $sql = new sql();

        return $sql->select("SELECT * FROM usuarios WHERE usulogin LIKE :SEARCH ORDER BY usulogin",
        ':SEARCH'=>"%".$login."%" ));
    }

    public function login($login, $password){
        $sql = new sql();

        
        $results = sql->select("SELECT * FROM usuarios WHERE usulogin = :LOGIN AND senha = :PASSWORD", array( 
            ":LOGIN"=>$login;
            "PASSWORD"=>$password;
        ));

        if(count($results)>0){
            
            $row = $results[0];

           $this->setdata($results[0]);

        }else{
            throw new exception("login ou / senha invalida");
        }

    }

    public function setdata($data){
        $this-setidusuario($row['idusuario']);
        $this-setusulogin($row['usulogin']);
        $this-setsenha($row['senha']);
        $this-setdtcadastro($row['dtcadastro']);
    }

    public function insert(){
        $sql = new sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD", array(
                'LOGIN'=>$this->getusulogin(),
                'PASSWORD'=>$this->getsenha()
        ));

        if(count($results)>0){
            $this->setdata($results[0])
        }
    }

    // public function __construct($login = "",$password = ""){

    // $aluno->setusulogin($aluno);
    // $aluno->setsenha($senha);

    // }

    
    public function __tostring(){
        return json_encode(array(
        "idusuario"=>$this->getidusuario(),
        "usulogin"=>$this->getusulogin(),
        "senha"=>$this->getsenha(),
        "dtcadastro"=>$this->getcadstro()->format("d/m/Y H:i:s")
        ));
    }

}
?>
<?php

//header("content-type: text/html;charset=utf-8");
$host = "mysql995.umbler.com";
$user = "rvdual";
$password = "rfvg199400";
$database = "dualpixel";
$port = "41890";
$socket = "";
$conexaoBaseDados = mysqli_connect($host, $user, $password, $database, $port, $socket);

//Por segurança de evitar problemas de caracteres especiais
mysqli_query($conexaoBaseDados,"SET NAMES 'utf8'");
mysqli_query($conexaoBaseDados,'SET character_set_connection=utf8');
mysqli_query($conexaoBaseDados,'SET character_set_client=utf8');
mysqli_query($conexaoBaseDados,'SET character_set_results=utf8');

class Conexao extends PDO {
    
    private $host="";
    private $user="";
    private $password="";
    private $database="";
    private $port="";
    private $socket;

    private $opcoesConexao = [

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        PDO::ATTR_PERSISTENT => true,

        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

    ];   
    
    function __construct() {
        
    }

        public function setHost($host) {

        $this->host = $host;

    }



    public function setUser($user) {

        $this->user = $user;

    }



    public function setPassword($password) {

        $this->password = $password;

    }



    public function setDatabase($database) {

        $this->database = $database;

    }



    public function setPort($port) {

        $this->port = $port;

    }    

    function getHost() {
        return $this->host;
    }

    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function getDatabase() {
        return $this->database;
    }

    function getPort() {
        return $this->port;
    }

    



    public function conectar() {

        try {

            $conn=new PDO("mysql:host=$this->host:$this->port;dbname=$this->database;charset=utf8", $this->user, $this->password, $this->opcoesConexao);

        } catch (PDOException $e) {

            exit('Erro ao tentar conexão: ' . $e->getMessage());

        }

        return $conn;

    }
    
    
    //Criei um método para consultar e retornar em array
    

    public function consultar($sql){

        $conn = $this->conectar();        

        $stmt=$conn->query($sql);

        $array=$stmt->fetchAll();

        return $array;

    }

    
    //Criei um método para executar sql de alter,drop,insert

    public function executarSql($sql){

        $conn = $this->conectar();        

        $stmt=$conn->exec($sql);

    }
    
    //Não estou utilizando query parametrizada, para ser sincero tenho que dar uma lida novamente.

}














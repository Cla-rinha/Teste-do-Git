<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;

    public function __construct(){
        $dns    = "mysql:dbname=usuariopwii;host=localhost";
        $dbUser ="root";
        $dbPass = "";

        try {
            $this->pdo = new PDO ($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
       
    }
    function __cadastrar($nome, $email, $senha){
        //passo 1 criar a querry(consulta)
        $sql = "INSERT INTO ususarios SET nome = :n, email= :e  senha= :s";

        //passo 2 preparar a querry
        $stmt = $this->pdo->prepare($sql);

        //passo 3 usar o bindValue
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        //passo 4 executar a querry
        $stmt->execute();
    }
} 

function chkUser($email){
    //passo 1
    $sql = "SELECT * FROM usuarios WHERE email = :e";

    //passo 2
    $stmt = $this->pdo->prepare($sql);

    //passo 3
    $stmt->bindValue(":e, $email");

    //passo 4 
    $stmt->execute();

    //saber se encontrou o registrop

    return $stmt->row=Count();

}

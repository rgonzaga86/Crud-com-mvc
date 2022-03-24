<?php
namespace app\models;
use app\core\Model;

class Cliente extends Model{

    public function lista(){
        //instrução SQL
        $sql = "SELECT * FROM cliente";

        $qry = $this->db->query($sql);

        //precisamos passar um retorno
        return $qry->fetchAll(\PDO::FETCH_OBJ);

        /*O que faz o comando fetchAll?
        transforma uma matriz contendo todas as linhas restantes no conjunto de resultados.
        A matriz representa cada linha como uma matriz de valores de coluna ou um objeto com propriedades
        correspondentes a cada nome de coluna.
         Uma matriz vazia é retornada se houver zero resultados na busca.
         */
          
    }

    public function inserir($cliente){
        $sql = " INSERT INTO cliente set
        nome =:nome,
        cpf =:cpf,
        dtnasc=:dtnasc,
        email=:email,
        celular=:celular
         
        ";

        $qry=$this->db->prepare($sql);
        $qry->bindValue(":nome", $cliente->nome);
        $qry->bindValue(":cpf", $cliente->cpf);
        $qry->bindValue(":dtnasc", $cliente->dtnasc);
        $qry->bindValue(":email", $cliente->email);
        $qry->bindValue(":celular", $cliente->celular);
        
         $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function getCliente($id){
        $sql = "SELECT * FROM cliente where idcliente = $id";
        $qry = $this->db->query($sql);
        return $qry->fetch(\PDO::FETCH_OBJ);
    }

    public function editar($cliente){
        $sql = " UPDATE cliente set
        nome =:nome,
        cpf =:cpf,
        dtnasc =:dtnasc,
        email =:email,
        celular =:celular       
        
        
        where idcliente = :id
      ";

        $qry=$this->db->prepare($sql);

        $qry->bindValue(":nome", $cliente->nome);
        $qry->bindValue(":cpf", $cliente->cpf);
        $qry->bindValue(":dtnasc", $cliente->dtnasc);
        $qry->bindValue(":email", $cliente->email);
        $qry->bindValue(":celular", $cliente->celular);
        
        
        
        $qry->bindValue(":id", $cliente->idcliente);
        $qry->execute();

        return $this->db->lastInsertId();
       
    }

    public function excluir($id){
        $sql = "DELETE FROM cliente where idcliente = $id";
        $qry = $this->db->query($sql);
    }


    

}
<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cliente;

class ClienteController extends Controller{
    
   public function index(){

      //instância do Model criada
        $objCliente = new Cliente();
        $dados["lista"] = $objCliente->lista();
        $dados["view"] = "Cliente/index";
         //echo "<pre>";
         //print_r($dados);
         //exit;
         $this->load("template",$dados);
       
   } 

   public function edit($id){
      $objCliente = new Cliente();
      $dados["cliente"] = $objCliente->getCliente($id);
      $dados["view"] = "Cliente/Create";
      //echo "<pre>";
      //print_r($dados);
      //exit;

      $this->load("template",$dados);

   }

   //Criar método create
   public function create(){
      $dados["view"] = "Cliente/Create";
      $this->load("template",$dados);
       
   }

   public function salvar(){
    
      $objCliente = new Cliente();
      $cliente = new \stdClass();
      $cliente->nome         = $_POST["nome"];
      $cliente->cpf         = $_POST["cpf"];
      $cliente->dtnasc       = $_POST["dtnasc"];
      $cliente->email        = $_POST["email"];
      $cliente->celular      = $_POST["celular"];
      
      $cliente->idcliente     =($_POST["idcliente"]) ? $_POST["idcliente"] : NULL;
      


      if($cliente->idcliente) {

            //cchamar método do objcliente
            $objCliente->editar($cliente);
           } else {
         $objCliente->inserir($cliente);
      }
     header("location:".URL_BASE."cliente");
         

   }
  
   public function excluir($id){
      $objCliente = new Cliente();
      $objCliente->excluir($id);
      header("location:".URL_BASE."cliente");


   }

}

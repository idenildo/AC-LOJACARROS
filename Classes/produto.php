<?php
    class produto{
        protected $id;
        protected $descricao;
        protected $preco;
        protected $quantidade;
        protected $marca;

        public function setDescricao($d){
            $this->descricao = $d;
        }
        public function getDescricao(){
            return $this->descricao;
        }

        public function setPreco($p){
            $this->preco = $p;
        }
        public function getPreco(){
            return $this->preco;
        }

        public function setQuantidade(){
            $this->quantidade = $q;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }

        public function setMarca($m){
            $this->marca = $m;
        }
        public function getMarca(){
            return $this->marca;
        }

        public function adicionar(){
            $sql = "INSERT INTO produto
            (descricao, preco, quantidade, marca)
            VALUES (?,?,?,?)";

            try{
            $con = DB::conexao();
            $stmt = $con->prepare($sql);

            $stmt->bindParam(1,$this->getDescricao());
            $stmt->bindParam(2,$this->getPreco());
            $stmt->bindParam(3,$this->getQuantidade());
            $stmt->bindParam(4,$this->getMarca());
            $stmt->execute();

            }catch(PDOException $e){
                echo "Erro no adicionar Produto: "
                .$e->getMessage();
            }
        }

        public static function listar(){ }

        public function atualizar(){ }

        public function excluir(){ }
    }

    

?>
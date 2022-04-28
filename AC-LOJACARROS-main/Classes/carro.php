<?php
    class carro{
        protected $id;
        protected $descricao;
        protected $chassi;
        protected $quantidade;
        protected $placa;
        protected $nome;

        public function setDescricao($d){
            $this->descricao = $d;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        
        public function setChassi($c){
            $this->chassi = $c;
        }
        public function getChassi(){
            return $this->chassi;
        }

        public function setQuantidade($q){
            $this->quantidade = $q;
        }
        public function getQuandtidade(){
            return $this->quantidade;
        }

        public function setPreco($p){
            $this->preco = $p;
        }
        public function getPreco(){
            return $this->preco;
        }

        public function setNome($n){
            $this->nome = $n;
        }
        public function getNome(){
            return $this->nome;
        }

        public function adicionar(){
            $sql = "INSERT INTO carro
            (descricao,chassi,quantidade,preco)
            VALUES (?,?,?,?,?)"

            try{
                $con = DB::conexao();
                $stmt = $con->prepare($sql);

                $stmt->bindParam(1,$this->getDdescricao());
                $stmt->bindParam(2,$this->getChassi());
                $stmt->bindParam(3,$this->getQuantidade());
                $stmt->bindParam(4,$this->getPreco());
                $stmt->bindParam(5,$this->getNome());
                $stmt->execute();

            }catch(PDOException $e){
                echo "Erro no adicionar Carro: "
                .$e->getMessage();
            }
        }

        public static function listar(){ }

        public function atualizar(){ }

        public function excluir(){ }


    }
?>
<?php
    class cliente{
        protected $id;
        protected $nome;
        protected $cpf;
        protected $endereco;
        protected $sexo;

        public function setNome($n){
            $this->nome = $n;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setCpf($c){
            $this->cpf = $c;
        }
        public function getNome(){
            return $this->cpf;
        }

        public function setEndereco($e){
            $this->endereco = $e;
        }
        public function getEndereco(){
            return $this->endereco;
        }

        public function setSexo($s){
            $this->sexo = $s;
        }
        public function getSexo(){
            return $this->sexo;
        }

        public function adicionar(){
            $sql = "INSERT INTO cliente
            (nome,cpf,endereco,sexo)
            VALUES (?,?,?,?)";
            
            try{
                $con = DB::conexao();
                $stmt = $con->prepare($sql);

                $stmt->bindParam(1,$this->getNome());
                $stmt->bindParam(2,$this->getCpf());
                $stmt->bindParam(3,$this->getEndereco());
                $stmt->bindParam(4,$this->getSexo());
                $stmt->execute();

            }catch(PDOException $e){
                echo "Erro no adicionar Cliente: "
                .$e->getMessage();
            }
        }

        public static function listar(){ }

        public function atualizar(){ }

        public function excluir(){ }
    }
?>
<?php
    class funcionario{
        protected $id;
        protected $nome;
        protected $cpf;
        protected $salario;
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
        public function getCpf(){
            return $this->cpf;
        }

        public function setSexo($sx){
            $this->sexo = $sx;
        }
        public function getSexo(){
            return $this->sexo;
        }

        public function setSalario($s){
            $this->salario = $s;
        }
        public function getSalario(){
            return $this->salario;
        }

        public function adicionar(){
            $sql = "INSERT INTO funcionario
            (nome,cpf,sexo,salario)
            VALUES (?,?,?,?"

            try{
                $con = DB::conexao();
                $stmt = $con->prepare($sql);

                $stmt->bindParam(1,$this->getNome());
                $stmt->bindParam(2,$this->getCpf());
                $stmt->bindParam(3,$this->getSexo());
                $stmt->bindParam(4,$this->getSalario());
                $stmt->execute();

            }catch(PDOEexceptio $e){
                echo "Erro no adicionar Funcionario: "
                .$e->getMessage();
            }
        }

        public static function listar(){ }

        public function atualizar(){ }

        public function excluir(){ }
    }
?>
<?php
    class estoque{
        protected $adicicionar;
        protected $remover;

        public function setAdicionar($ad){
            $this->adicionar = $ad;
        }
        public function getAdicionar(){
            return $this->adicionar;
        }

        public function setRemover($rv){
            $this->remover = $rv;
        }
        public function getRemover(){
            return $this->remover;
        }

        public function adicionar(){
            
        }

        public static function listar(){ }

        public function atualizar(){ }

        public function excluir(){ }


    }
?>
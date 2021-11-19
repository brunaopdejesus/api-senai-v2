<?php

    class ModelPessoa{

        // atributo de escopo dessa classe
        private $_conn;

        public function __construct($conn) {

            $this->_conn = $conn;

        }

        public function findAll () {

            // Monta a instrução SQL
            $sql = "SELECT * FROM tbl_pessoa";

            // Prepara um processo de execução de instrução SQL
            $stm = $this->_conn->prepare($sql);

            // Executa a instrução SQL
            $stm->execute();

            // Devolve os valores da SELECT para serem utilizados
            return $stm->fetchAll();

        }

    }

?>
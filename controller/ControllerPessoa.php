<?php

    class ControllerPessoa {

        private $_method;
        private $_modelPessoa;

        public function __construct($model) {

            $this->_modelPessoa = $model;
            $this->_method = $_SERVER['REQUEST_METHOD'];
            
        }

        function router() {

            switch ($this->_method) {

                case 'GET':
                    return $this->_modelPessoa->findAll();
                    break;

                 
                case 'POST':
                


                    break;
                    
                    
                case 'PUT':
            


                    break;


                case 'DELETE':
        


                    break;
                


                default:
                    


                    break;
            }

        }

    }

?>
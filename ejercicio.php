<?php
    class persona
        {
            public $nombre = false;
            public $apellido;
            public $edad;

            //metodos
            public function estadoestudiante()
            { if ($this -> nombre ) 
                echo "El alumno está estudiando <br>";
            else
                echo "El alumno no está estudiando <br>";
            
            }

            public function momento()
            { if ($this -> nombre)
                echo "El alumno en este momento está estudiando <br>";
            else
                echo "El alumno no está estudiando en este momento <br>";
                $this -> nombre = true;
                
            
            
            }     
        }
    
            class Primaria extends persona
            {public function estadoprimaria()
            {$this -> estadoestudiante();
            $this->momento();
            $this->momento();
                    
            }
            }
            class Secundaria extends Primaria {}

            $primaria = new Secundaria();
            $primaria -> estadoestudiante();
        

?>
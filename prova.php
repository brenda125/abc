<?php

class pessoa

{
    public $pessoa1 = "Alta -";
    public $pessoa2 = "Baixa -";
    public $pessoa3 = "Magra -";
    public $pessoa4 = "Gorda -";
    public $pessoa5 = "Bonita -";
 
    public $caracteristica1 = "genética boa";
    public $caracteristica2 = "genética ruim";
    public $caracteristica3 = "não comeu direito";
    public $caracteristica4 = "muito gulosa";
    public $caracteristica5 = "muito parecida com sua mãe";

    public function mostrar ()
        {
            echo "A pessoa 1 : {$this -> pessoa1} Cresceu Muito por ter {$this -> caracteristica1} <br>";
    
            echo "A pessoa 2 : {$this -> pessoa2} Não Cresceu tanto por ter {$this -> caracteristica2} <br>";

            echo "A pessoa 3 : {$this -> pessoa3} Faltou comida e {$this -> caracteristica3} <br>";
 
            echo "A pessoa 4 : {$this -> pessoa4} Gosta de comer {$this -> caracteristica4} <br>";

            echo "A pessoa 5 : {$this -> pessoa5} Genética boa, {$this -> caracteristica5} <br>";

        }    

}

$pessoa1 = new pessoa ();
$pessoa1 -> mostrar ();




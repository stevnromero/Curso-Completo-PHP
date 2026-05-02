<?php
/*
namespace App\Interfaces{
    interface Notificable{
        public function enviar($mensaje);
    }
}


namespace App\Servicios{
    use App\Interfaces\Notificable;

    class EmailNotificacion implements Notificable{
        public $email;
    
        public function __construct($email){
            $this->email = $email;
        }
        
        public function enviar($mensaje){
            echo "Enviando email a $this->email: $mensaje" . PHP_EOL;
        }
    }
    
    class SmsNotificacion implements Notificable{
        public $telefono;
        
        public function __construct($telefono){
            $this->telefono = $telefono;
        }
        
        public function enviar($mensaje){
            echo "Enviando SMS a $this->telefono: $mensaje";
        }    
    }
}

*/
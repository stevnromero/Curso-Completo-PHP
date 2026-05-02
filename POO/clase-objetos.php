<?php

// INTRODUCCION DE CLASES Y OBJETOS EN PHP

/*
class persona{
    public $nombre;
    public $edad;
    public $ocupacion;

    public function setDates($nombre){
        $this->nombre = ucwords($nombre);
        echo __CLASS__ . "<br>"; // retorna el nombre de la clase a la que pertenece el objeto
    }

    public function getDates(){
        return strtoupper($this->nombre . ' esta estudiando programacion');
    }
}

$person1 = new persona();
$person1 -> setDates('diana lopez');
echo $person1 -> getDates() . "<br>";
echo var_dump($person1 instanceof persona) . "<br>"; // retorna true si el objeto es una instancia de la clase especificada, de lo contrario retorna false

$person2 = new persona();
$person2 -> nombre = 'maria lopez';
$person2 -> ocupacion = 'estudiante';
echo "<p>" . $person2 -> nombre . ' es ' . $person2 -> ocupacion . ' de ingenieria en sistemas </p>';




// Ejercicio práctico Ejercicio práctico (POO en PHP sin public, private, protected)
//Crea un sistema simple de gestión de productos.

class producto{
    public $nombre;
    public $precio;
    public $stock;


    function crearProducto($nombre, $precio, $stock){
        $this -> nombre = $nombre;
        $this -> precio = floatVal($precio);
        $this -> stock = $stock;
        return "El precio del/la " . $this -> nombre . " tiene un costo de " . $this -> precio . "<br>";
    }

    function restarStock($cantidad){

        if ($cantidad <= $this -> stock) {
            $this->stock = $this->stock - $cantidad;
            return ucfirst("Si hay suficiente stock → se vende . El stock restante es: " . $this -> stock . "<br>");
        } else {
            return ucfirst("Si no → no se vende. El stock aun está en " . $this -> stock . "<br>");
        }
    }


    function aumentarStock($cantidad){
        if ($cantidad > 0){
            $this->stock = $this->stock + $cantidad;   
            return "La suma del stock es: " . $this -> stock ;
        } else {
            return "No está permitido ";
        }
    }

    function mostrarInfoFinal(){
        return "<br>El producto " . $this -> nombre . " tiene un precio de " . $this -> precio . " y un stock de " . $this -> stock . "<br><br>";
    }

}

$product1 = new producto();
echo $product1 -> crearProducto("televisor plasma LG", "15.65", 55);
echo $product1 -> restarStock(30);
echo $product1 -> aumentarStock(-5);
echo $product1 -> mostrarInfoFinal();


$product2 = new producto();
echo $product2 -> crearProducto("laptop", "130254.64", 35);
echo $product2 -> restarStock(12);
echo $product2 -> aumentarStock(35);
echo $product2 -> mostrarInfoFinal();





// constructores

class CuentaBancaria{
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo){
        $this -> titular = $titular;
        $this -> saldo = $saldo;
        echo __CLASS__ . "<br>";
        echo __DIR__ . "<br>";
    }

    public function depositar($cantidad){
        $this -> saldo = $this -> saldo + $cantidad;
    }

    public function mostrarSaldo(){
        return "El titular es: " . $this -> titular . " - " . "saldo actual: $" . number_format($this->saldo, 0, ',', '.') . "<br>";
    }
}

$bancaria = new CuentaBancaria("santiago lopez", 1300000);
$bancaria -> depositar(500000);
echo $bancaria -> mostrarSaldo();
echo var_dump($bancaria instanceof CuentaBancaria);






// destructores

class SesionUsuario{
    public $usuario;
    public $estado;

    public function __construct($usuario){
        $this -> usuario = ucfirst($usuario);
        $this -> estado = "activa";
        echo 'Sesión iniciada para ' . $this -> usuario . "<br>";
    }

    public function mostrarEstado(){
        echo 'Usuario: ' . $this -> usuario . ' - Estado: ' . $this -> estado . "<br>";
    }

    public function __destruct(){
        $this->estado = "cerrada";
        echo 'Sesión cerrada para: ' . $this->usuario . ' - Estado: ' . $this->estado;
    }
}

$user = new SesionUsuario("camila");
$user -> mostrarEstado();
unset($user);



<?php

class Archivo{
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
        echo "Archivo $this->nombre creado" . PHP_EOL;
    }

    public function getNombre(){
        return $this->nombre;
    }

    
    public function __destruct(){
        echo "Archivo $this->nombre eliminado" . PHP_EOL;
    }
}

$arch = new Archivo("places.txt");
echo $arch -> getNombre() . PHP_EOL;
unset($arch);







<?php

class Conexion {
    private $host, $usuario, $estado;

    public function __construct($host, $usuario){
        $this->host = $host;
        $this->usuario = $usuario;
        $this->estado = true;
        echo "Conectado a {$this->host} como {$this->usuario}" . PHP_EOL;
    }

    public function getEstado(){
        return $this->estado ? "Conexion abierta" . PHP_EOL : "Conexion cerrada" . PHP_EOL;
    }

    public function cerrarConexion(){
        if($this->estado){
            $this->estado = false;
            echo "Conexion cerrada" . PHP_EOL;
        }
    }

    public function __destruct(){
        if($this->estado){
            echo "Cerrando conexión automáticamente..." . PHP_EOL;
            $this->estado = false;
        }
    }
}

$conn = new Conexion("host", "steven");
echo $conn->getEstado();
// no cerrar manualmente para probar destructor
unset($conn);




// modificadores de acceso

class CuentaSegura{
    public $titular;
    private $saldo;

    public function __construct($titular, $saldo){
        $this -> titular = $titular;
        $this -> saldo = $saldo;
    }

    public function depositar($cantidad){
        $this -> saldo = $this -> saldo + $cantidad;
    }

        public function retirar($cantidad){
            
        if($cantidad <= $this -> saldo){
            $this -> saldo = $this -> saldo - $cantidad;
            echo "Se puede retirar si hay dinero suficiente! \r";
        } else {
            echo "No se puede retirar. Debes tener el monto suficiente de tu saldo! \r";
        }     
    }

    public function getSaldo(){
        return  $this -> saldo . "\n";
    }

    public function mostrarInfo(){
        return 'Titular: ' . $this -> titular . ' - Saldo: ' . $this -> saldo;
    }
}

$Count = new CuentaSegura("sebastian", 1300000);
$Count -> depositar(300000);
$Count -> retirar(24700000);
echo $Count -> getSaldo();
echo $Count -> mostrarInfo();



class CajaFuerte{
    private $codigo;
    public $abierta;

    public function __construct($codigo){
        $this->codigo = $codigo;
        $this->abierta = false;
    }

    public function abrir($codigoIngresado){    
        if($this->codigo === $codigoIngresado){
            $this->abierta = true;
            echo "Caja abierta<br>";
        } else {
            echo "Código incorrecto<br>";
        }
    }

    public function cerrar(){
        if($this->abierta == true){
            $this->abierta = false;
            echo "Caja cerrada<br>";
        } else {
            echo "La caja ya está cerrada<br>";
        }
    }

    public function estado(){
        echo $this->abierta ? "Estado: abierta" : "Estado: cerrada";
    }
}

// Uso
$cajita = new CajaFuerte("JN4363");
$cajita->abrir("JN4363");
$cajita->cerrar();
$cajita->estado();

class Empleado{
    public $nombre;
    private $salario;
    protected $puesto;

    public function __construct($nombre, $salario, $puesto){
        $this -> nombre = $nombre;
        $this -> salario = $salario;
        $this -> puesto = $puesto;
    }

    public function aumentarSalario($cantidad){
        if($cantidad > 0){
            $this -> salario = $this -> salario + $cantidad;
        } else {
            echo "No pueden ser negativos! \r";
        }
    }   

    public function getSalario(){
        return "$" . number_format($this -> salario, 0, ',', '.') . PHP_EOL;
    }

    public function mostrarEmpleado(){
        echo 'Nombre: ' . $this -> nombre . ' - ' . 
             'Puesto: ' . $this -> puesto . ' - ' . 
             'Salario: ' . $this -> salario;
    }
}

$emp = new Empleado("jhon mario", 1800000, "auxiliar de bodega");
$emp -> aumentarSalario(500000);
echo $emp -> getSalario();
$emp -> mostrarEmpleado();










<?php

class CarritoCompra{
    private $productos;
    private $total;

    public function __construct(){
        $this->productos = [];
        $this->total = 0;
    }

    public function agregarProducto($nombre, $precio){
        if($precio > 0){
            // Guardar producto correctamente
            $this->productos[] = [
                "nombre" => $nombre,
                "precio" => $precio
            ];

            // Sumar al total
            $this->total += $precio;

        } else {
            echo "Precio inválido<br>";
        }
    }

    public function eliminarProducto($nombre){
        foreach($this->productos as $index => $producto){
            if($producto["nombre"] === $nombre){

                // Restar del total
                $this->total -= $producto["precio"];

                // Eliminar del array
                unset($this->productos[$index]);

                echo "Producto eliminado<br>";
                return;
            }
        }

        echo "Producto no encontrado<br>";
    }

    public function mostrarCarrito(){
        echo "Productos: ";

        foreach($this->productos as $producto){
            echo $producto["nombre"] . " ";
        }

        echo "<br>Total: " . $this->total;
    }
}

$obj = new CarritoCompra();
$obj -> agregarProducto("laptop", 3000000);
$obj -> eliminarProducto("laptop");
$obj -> mostrarCarrito();



// herencia

<?php
class Persona{
    public $nombre = "samuel";
    protected $correo;


    public function setCorreo($correo){
        $this->correo = $correo;
    }

    protected function getEmail(){
        return 'Mi correo corporativo es: ' . $this->correo;
    }
}

class Empleado extends Persona{
    public $ocupacion;

    public function setOcupacion($ocupacion){
        $this->ocupacion = $ocupacion;
    }

    public function work(){
        echo ucfirst($this->nombre) . ' trabaja como ' . $this->ocupacion . "<br>";
        echo $this->getEmail();
    }
}

// Uso
$per = new Empleado();
$per->setCorreo("johanss2015@hotmail.com");
$per->setOcupacion("ingeniero de sistemas");

$per->work();




<?php 

class Vehiculo{
    public $marca = "Chevrolet";
    protected $velocidad;

    public function setVelocidad($velocidad){
        if($velocidad >= 0){
            $this->velocidad = $velocidad;
        } else {
            echo "Velocidad inválida<br>";
        }
}

    protected function mostrarVelocidad(){
        return 'Velocidad actual: ' . $this -> velocidad . ' km/h';
    }
}

class Auto extends Vehiculo{
    public $modelo = "Chevy";

    public function info(){  
        echo $this -> mostrarVelocidad() . PHP_EOL;
        echo $this -> marca . " " . $this -> modelo . " - " . $this -> mostrarVelocidad();
    }
}

$car = new Auto();
$car -> setVelocidad(80);
$car -> info();





class CajeroDinero{
    private $dinero = 0;

    public function agregar($cantidad){
        if($cantidad > 0){
            $this -> dinero = $this -> sumar($cantidad);
        } else {
            return "Prohibido valores negativos";
        }
    }

    private function sumar($cantidad){
        return $this -> dinero + $cantidad;
    }

    public function quitar($cantidad){
        if($cantidad <= $this -> dinero){
            $this -> dinero = $this -> restar($cantidad);
        } else {
            return "No hay suficiente dinero";
        }
    }

    private function restar($cantidad){
        return $this -> dinero - $cantidad;
    }

    public function verDinero(){
        return $this -> dinero;
    }
}

$operador = new CajeroDinero();
$operador -> agregar(70);
$operador -> quitar(50000);
echo $operador -> verDinero();



class Cuenta{
    protected $saldo; 

    public function __construct($saldo){
        $this->saldo = $saldo;
    }

    public function depositar($cantidad){
        if($cantidad > 0){
            $this->saldo += $cantidad;
        } else {
            echo "No se permiten valores negativos<br>";
        }
    }

    public function retirar($cantidad){
        if($cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
        } else {
            echo "Saldo insuficiente<br>";
        }
    }

    public function verSaldo(){
        return number_format($this->saldo, 0, ',', '.') . "<br>";
    }
}

class CuentaPremium extends Cuenta{

    public function retirar($cantidad){

        // validar cantidad
        if($cantidad <= 0){
            echo "Cantidad inválida<br>";
            return;
        }

        // caso normal → usa lógica del padre
        if($cantidad <= $this->saldo){
            parent::retirar($cantidad);
        }
        // caso premium → permite sobregiro
        else if(($this->saldo - $cantidad) >= -500){
            $this->saldo -= $cantidad;
        } 
        // límite excedido
        else {
            echo "Límite de sobregiro alcanzado<br>";
        }
    }
}

// Uso
$opera = new CuentaPremium(40000);
$opera->depositar(700000);
$opera->retirar(10000);   // usa parent
$opera->retirar(740000);  // entra en sobregiro
echo $opera->verSaldo();





class Animal{
    public $nombre;

    public function hacerSonido(){
        return "El " . $this -> nombre . " hace un ruido";
    }
}

class Perro extends Animal{
    public function hacerSonido(){
        return parent::hacerSonido() . " y el perro ladra";
    }
}

$frase = new Perro();
$frase -> nombre = "bulldog";
echo $frase -> hacerSonido();






class Programming{
    private $languaje1 = "python";

    private function set(){
        $this -> languaje1 = $this -> get();
    }

    protected function get(){
        return "estoy estudiando " . $this -> languaje1;
    }

    public function armar(){
        return ucwords("Hola, soy steven y " . $this -> get());
    }
}



$prime = new programming();
echo $prime -> armar();





// constantes de una clase

class lenguaje{
    const FRASE = "Hoy estoy estudiando PHP";
}
echo var_dump(lenguaje::FRASE);




class devices{
    const COMPRA = "Hoy me he comprado una laptop gamer";

    public function obtain(){
        return self::COMPRA;
    }
}
$a = new devices();
echo $a -> obtain();





class CuentaBancaria {
    private $saldo;
    private $titular;

    public const MONEDA = "USD";
    private const LIMITE_RETIRO = 500;

    function __construct($titular) {
        $this->titular = ucwords($titular);
        $this->saldo = 0;
    }

    function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
        } else {
            echo "No se permiten valores negativos" . PHP_EOL;
        }
    }

    function retirar($monto) {
        if ($monto > $this->saldo) {
            echo "Saldo insuficiente" . PHP_EOL;
            return;
        }

        if ($monto > self::LIMITE_RETIRO) {
            echo "Supera el límite de retiro de " . self::LIMITE_RETIRO . PHP_EOL;
            return;
        }

        $this->saldo -= $monto;
    }

    public function getSaldo() {
        return number_format($this->saldo, 0, ',', '.');
    }

    public function getTitular() {
        return $this->titular;
    }

    function verResumen() {
        echo "Titular: " . $this->getTitular() . PHP_EOL;
        echo "Saldo: " . $this->getSaldo() . " " . self::MONEDA . PHP_EOL;
    }
}

$conta = new CuentaBancaria("jorge celon");
$conta -> depositar(3000);
$conta -> retirar(510);
$conta -> verResumen();








class Producto {
    private $nombre;
    private $precio;

    public const IVA = 0.19;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->setPrecio($precio);
    }

    public function setPrecio($precio) {
        if ($precio > 0) {
            $this->precio = $precio;
        } else {
            echo "Solo se permiten valores mayores a 0" . PHP_EOL;
        }
    }

    public function getPrecioFinal() {
        $precioFinal = $this->precio * (1 + self::IVA);
        return number_format($precioFinal, 0, ',', '.') . PHP_EOL;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

$prod = new Producto("laptop", 3);
$prod -> setPrecio(3000000);
echo $prod -> getPrecioFinal();
echo $prod -> getNombre();




// interfaces

<?php

interface MetodoPago{
    public function pagar($monto);
}


class Tarjeta implements MetodoPago{
    private $titular;
    private $saldo;

    function __construct($titular, $saldo){
        $this -> titular = $titular;
        $this -> saldo = $saldo;
    }

    function pagar($monto){
        if($monto > 0 && $monto <= $this-> saldo){
            $this -> saldo = $this -> saldo - $monto;
            return "Pago realizado con tarjeta. ";
        } else {
            return "Fondos insuficientes\n";
        }
    }

    function getSaldo(){
        return "Saldo restante: \$" . number_format($this -> saldo, 0, ',', '.') . PHP_EOL . PHP_EOL;
    }
}

class Efectivo implements MetodoPago{
    private $dineroDisponible;

    function __construct($dineroDisponible){
        $this -> dineroDisponible = $dineroDisponible;
    }

    function pagar($monto){
        if($monto > 0 && $monto <= $this->dineroDisponible){
            $this -> dineroDisponible = $this -> dineroDisponible - $monto;
            return "Pago realizado con efectivo. ";
        } else {
            return "Fondos insuficientes";
        }
    }

    function getDineroDisponible(){
        return "Saldo restante: \$" . number_format($this -> dineroDisponible, 0, ',', '.');
    }
}

$card = new Tarjeta("alberto vargas", 1300000);
echo $card -> pagar(250000);
echo $card -> getSaldo();

$cash = new Efectivo(2500000);
echo $cash -> pagar(500000);
echo $cash -> getDineroDisponible();






<?php

interface Envio{
    public function calcularCosto($peso);
}

class EnvioNacional implements Envio{
    private $costoBase, $costoPorKg;

    function __construct($costoBase, $costoPorKg){
        $this -> costoBase = $costoBase;
        $this -> costoPorKg = $costoPorKg;
    }

    function calcularCosto($peso){
        if($peso > 0){
            $costo = ($this -> costoBase + ($peso * $this -> costoPorKg));
            return "Costo envío nacional: \$" . number_format($costo, 0, ',', '.') . PHP_EOL;
        } else {
            return "Peso inválido\n";
        }
    }
}

class EnvioInternacional implements Envio{
    private $costoBase, $costoPorKg;
    private const IMPUESTO = 0.25;

    function __construct($costoBase, $costoPorKg){
        $this -> costoBase = $costoBase;
        $this -> costoPorKg = $costoPorKg;
    }

    function calcularCosto($peso){
        if($peso > 0){
            $costo = ($this -> costoBase + ($peso * $this -> costoPorKg)) * (1 + self::IMPUESTO);
            return "Costo envío internacional: \$" . number_format($costo, 0, ',', '.');
        } else {
            return "Peso inválido";
        }
    }
}

$envio1 = new EnvioNacional(3500, 125);
echo $envio1 -> calcularCosto(50);

$envio2 = new EnvioInternacional(2500, 105);
echo $envio2 -> calcularCosto(30);





interface Descuento{
    public function aplicarDescuento($precio);
}

class DescuentoFijo implements Descuento{
    private const DESCUENTO = 0.10;

    function aplicarDescuento($precio){
        if($precio <= 0){
            return "Precio Invalido";
        } else {
            $precioFinal = $precio * (1 - self::DESCUENTO);
            return "Precio final: \$" . number_format($precioFinal, 0, ',', '.');
        }
    }
}

$final = new DescuentoFijo();
echo $final -> aplicarDescuento(15000);







abstract class Vehiculos {
    private $marca, $modelo, $velocidad;

    abstract public function tipoCombustible();

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = 0;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getModelo(){
        return $this->marca . " " . $this->modelo . PHP_EOL;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    // Nuevo método del reto
    protected function setVelocidad($valor){
        if($valor >= 0){
            $this->velocidad = $valor;
        }
    }

    public function acelerar($incremento){
        if($incremento > 0){
            $nuevaVelocidad = $this->velocidad + $incremento;
            $this->setVelocidad($nuevaVelocidad);
            return "Velocidad: " . $this->velocidad . PHP_EOL;
        } else {
            return "Incremento inválido" . PHP_EOL;
        }
    }
}


class Auto extends Vehiculos {
    public function tipoCombustible(){
        return "Combustible: Gasolina" . PHP_EOL . PHP_EOL;
    } 
}

class Bicicleta extends Vehiculos {
    public function tipoCombustible(){
        return "Combustible: Humano" . PHP_EOL;
    } 
}


// Uso

$auto = new Auto("Chevrolet", "Onix");
echo $auto->getModelo();
echo $auto->acelerar(50);
echo $auto->tipoCombustible();

$bici = new Bicicleta("Tornado", "Rally");
echo $bici->getModelo();
echo $bici->acelerar(20);
echo $bici->tipoCombustible();






abstract class Empleado {
    private $nombre;
    private $salarioBase;

    public function __construct($nombre, $salarioBase){
        $this->nombre = $nombre;
        $this->salarioBase = $salarioBase;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    abstract public function calcularSalario();
}


// ------------------------

class EmpleadoTiempoCompleto extends Empleado {

    public function calcularSalario(){
        return $this->getSalarioBase();
    }
}


// ------------------------

class EmpleadoPorHoras extends Empleado {
    private $horasTrabajadas;

    public function __construct($nombre, $salarioBase, $horasTrabajadas){
        parent::__construct($nombre, $salarioBase);
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularSalario(){
        return $this->getSalarioBase() * $this->horasTrabajadas;
    }
}


// ------------------------
// Uso

$emp1 = new EmpleadoTiempoCompleto("Carlos Lopez", 1500);
$emp2 = new EmpleadoPorHoras("Ana Perez", 20, 80);

echo "Empleado: " . $emp1->getNombre() . PHP_EOL;
echo "Salario: " . $emp1->calcularSalario() . PHP_EOL . PHP_EOL;

echo "Empleado: " . $emp2->getNombre() . PHP_EOL;
echo "Salario: " . $emp2->calcularSalario() . PHP_EOL;





// ejercicio extra sobre parent

class Persona{
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
        echo "Persona creada: $this->nombre \n";
    }
}

class Empleado extends Persona{
    private $puesto;

    public function __construct($nombre, $puesto){
        parent::__construct($nombre);
            $this->puesto = $puesto;
            echo "Empleado: $this->puesto";
    }
}
$per = new Empleado("Marlon Rodas", "Gerente de software");






abstract class Pago{
    private $monto;

    public function __construct($monto){
        $this->monto = $monto;
        echo "Procesando pago de: \$" . number_format($this->monto, 0, ',', '.') . PHP_EOL;
    }

    abstract public function procesarPago();
}
    

class PagoTarjeta extends Pago{

    public function __construct($monto){
        parent::__construct($monto);
    }

    public function procesarPago(){
        return "Pagado con tarjeta" . PHP_EOL . PHP_EOL;
    }
}

class PagoEfectivo extends Pago{

    public function __construct($monto){
        parent::__construct($monto);
    }

    public function procesarPago(){
        return "Pagado en efectivo";
    }
}

$money1 = new PagoTarjeta(1000);
echo $money1 -> procesarPago();

$money2 = new PagoEfectivo(5000);
echo $money2 -> procesarPago();






// trait


class Persona{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido){
        $this->nombre = ucfirst($nombre);
        $this->apellido = $apellido;
    }

    public function saludo(){
        return "Hola, soy $this->nombre $this->apellido.";
    }
}


trait A{
    public function universidad($ocupacion){
        return parent::saludo() . " Soy estudiante de $ocupacion.";
    }
}


class Alumno extends Persona{
    use A;
}

$est = new Alumno("steven", "romero");
echo $est -> universidad("ingenieria de sistemas");








class Usuario{
    public $nombre, $email;

    public function __construct($nombre, $email){
        $this->nombre = $nombre;
        $this->email = $email;
    }

    public function mostrarInfo(){
        return "Hola $this->nombre";
    }

    public function __Destruct(){
        echo "Objeto Usuario destruido";
    }
}

class Administrador extends Usuario{
    public $nivel;

    public function __construct($nombre, $email, $nivel){
        parent::__construct($nombre, $email);
            $this->nivel = $nivel;
    }

    public function mostrarInfo(){
        return parent::mostrarInfo() . "Nivel: $this->nivel" .PHP_EOL;
    }

    use Logger;
}


trait Logger{
    public function log($mensaje){
        echo "LOG: $mensaje" . PHP_EOL;
    }
}

$per = new Administrador("samuel", "samu343@gmail.com", "superAdmin");
echo $per -> mostrarInfo();
$per -> log("Acción realizada");




trait Permisos{
    protected function acceso(){
        echo "Acceso concedido" . PHP_EOL;
    }
}

class Admin{
    use Permisos{acceso as public;}
}

class Invitado{
    use Permisos{acceso as public;}
}

$adm = new Admin;
$adm -> acceso();
echo ($adm instanceof Admin)? "Es admin\n\n" : "No es admin\n\n";

$inv = new Invitado;
$inv -> acceso();
echo ($inv instanceof Invitado)? "Es invitado\n\n" : "No es invitado\n\n";

// ejercicio mixto 


abstract class MetodoPago{
    public $monto;

    public function __construct($monto){
        $this->monto = $monto;
    }

    abstract public function procesarPago();

    public function __destruct(){
        echo "Método de pago finalizado";
    }
}

interface Autenticable{
    public function autenticar();
}

trait Registro{    
    public function registrar($mensaje){
        echo "REGISTRO: $mensaje" . PHP_EOL;
    }
}

class PagoTarjeta extends MetodoPago implements Autenticable{
    private $numeroTarjeta;
    use Registro;

    public function __construct($monto , $numeroTarjeta){
        parent::__construct($monto);
        $this->numeroTarjeta = $numeroTarjeta;
    }
    
    public function autenticar(){
        echo "Autenticando tarjeta..." . PHP_EOL;
    }

    public function procesarPago(){
        echo "Pago con tarjeta de $this->monto procesado" . PHP_EOL ;
    }
}


class PagoPaypal extends MetodoPago implements Autenticable{
    private $email;
    use Registro;

    public function __construct($monto, $email){
        parent::__construct($monto);
        $this->email = $email;
    }
    
    public function autenticar(){
        echo PHP_EOL . PHP_EOL. "Autenticando Paypal..." . PHP_EOL;
    }

    public function procesarPago(){
        echo "Pago con PayPal de $this->monto procesado" . PHP_EOL ;
    }
}



$proceso = new PagoTarjeta(1500000, "344-364-124");
$proceso -> autenticar();
$proceso -> procesarPago();
$proceso -> registrar("Pago exitoso");
unset($proceso);

$proceso2 = new PagoPaypal(1500000, "paypagar34@gmail.com");
$proceso2 -> autenticar();
$proceso2 -> procesarPago();
$proceso2 -> registrar("Pago exitoso");
unset($proceso2);



// espacio de nombres

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




namespace App\Reportes{
    abstract class Reporte{
        abstract public function generar();
    }
    
}

namespace App\Tipos{
    use App\Reportes\Reporte;
    
    class ReportePDF extends Reporte{
        public function generar(){
            echo "Generando reporte en PDF" . PHP_EOL;
        }
    }

    class ReporteExcel extends Reporte{
        public function generar(){
            echo "Generando reporte en Excel";
        }
    }
}


class Sistema{
    final function iniciar(){
        echo "Sistema iniciado";
    }
}

class Seguridad extends Sistema{
    function iniciar(){
        echo "Seguridad informática";
    }
}




// propiedades y métodos estáticos

trait Normalizador {
    public function convertMinus() {
        $this->nombre = trim(strtolower($this->nombre));
        $this->email = trim(strtolower($this->email));
    }

    public function capitalize() {
        $this->nombre = ucfirst($this->nombre);
    }
}

class Usuario {
    use Normalizador;
    public $nombre; 
    public $email;
    private static $contador = 0;

    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;

        // Normalización automática al crear el objeto
        $this->convertMinus();
        $this->capitalize();

        // Contador correcto
        self::$contador++;
    }
    
    public static function totalUsuarios() {
        return "Usuarios ingresados: " . self::$contador;
    }

    public function info() {
        return "Nombre: " . $this->nombre . "\n" .
               "Correo: " . $this->email . PHP_EOL . PHP_EOL;
    }
}

// Uso
$user = new Usuario(" MANUELA ", "  MANUELA@MAIL.COM  ");
echo $user->info();

$user2 = new Usuario(" PABLO ", "   PABLO@HOTMAIL.COM  ");
echo $user2->info();

echo Usuario::totalUsuarios();




<?php

interface Autenticable{
    public function validarAcceso();
}

class Acceso implements Autenticable{
    public $usuario, $clave;
    private static $intentos = 0;

    public function __construct(string $usuario, string $clave){
        $this->usuario = trim(strtolower($usuario));
        $this->clave = trim($clave);
        self::$intentos++; // contador correcto dentro del constructor
    }

    public function validarAcceso(){
        if($this->usuario === "admin" && $this->clave === "1234"){
            return "Acceso válido" . PHP_EOL;
        } else {
            return "Acceso denegado" . PHP_EOL;
        }
    }

    public static function totalIntentos(){
        return "Número de intentos: " . self::$intentos; 
    }
}

$signIn = new Acceso("  carl  ", "  1234  ");
echo $signIn -> validarAcceso();

$signIn2 = new Acceso("  admin  ", "  1234  ");
echo $signIn2 -> validarAcceso();

echo Acceso::totalIntentos();










<?php

class Cache {
    private static $datos = [];

    public static function set($clave, $valor) {
        self::$datos[$clave] = $valor;
    }

    public static function get($clave) {
        return self::$datos[$clave] ?? "No encontrado";
    }

    public static function delete($clave) {
        if (isset(self::$datos[$clave])) {
            unset(self::$datos[$clave]);
        }
    }

    public static function clear() {
        self::$datos = [];
    }
}


// Uso
Cache::set("usuario", "admin");
Cache::set("token", "ABC123");

echo Cache::get("usuario") . PHP_EOL;
echo Cache::get("token") . PHP_EOL;

Cache::delete("token");

echo Cache::get("token") . PHP_EOL;

Cache::clear();

echo Cache::get("usuario") . PHP_EOL;




// fluent interface

class Producto{
    public $nombre, $precio, $categoria;

    function __construct($nombre){
        $this->nombre = ucfirst($nombre);
    }

    function setPrecio($precio){
        $this->precio = $precio;
        return $this;
    }

    function setCategoria($categoria){
        $this->categoria = $categoria;
        return $this;
    }

    function mostrar(){
        $numeroFormateado = number_format($this->precio, 0, ',', '.');
        return "Producto: {$this->nombre} | Precio: \${$numeroFormateado} | Categoría: {$this->categoria}";
    }
}

$prod = (new Producto("laptop"))
    ->setPrecio(300000)
    ->setCategoria("Tegnología")
    ->mostrar();
echo $prod;




// atributos con nombres

<?php

function crearPedido(string $producto, int $cantidad, float $precio, float $descuento = 0){
    $total = number_format(($precio * $cantidad) - $descuento, 0, ',', '.');
    return "Producto: $producto | Cantidad: $cantidad | Total: \$$total";
}

echo crearPedido(
    precio: 350000,
    producto: "Balon adidas UCL",
    descuento: 50000,
    cantidad: 3
);



<?php

function generarFactura($cliente, $productos, $impuesto = 0.19, $descuento = 0, $moneda = "COP"){
    $subtotal = 0;

    foreach($productos as $producto){
        $subtotal += $producto["precio"] * $producto["cantidad"];
    }

    $valorImpuesto = $subtotal * $impuesto;
    $totalFinal = $subtotal + $valorImpuesto - $descuento;

    return "Cliente: $cliente\n" .
           "Items: " . count($productos) . "\n" .
           "Subtotal: " . number_format($subtotal, 0, ',', '.') . "\n" .
           "Impuesto: " . number_format($valorImpuesto, 0, ',', '.') . "\n" .
           "Descuento: " . number_format($descuento, 0, ',', '.') . "\n" .
           "Total: " . number_format($totalFinal, 0, ',', '.') . "\n" .
           "Moneda: $moneda";
}


echo generarFactura(
    cliente: "mario suarez", 
    productos: array(["nombre" => "billetera", "cantidad" => 3, "precio" => 50000], 
                     ["nombre" => "chaqueta", "cantidad" => 2, "precio" => 150000]),
    descuento: 70000
);



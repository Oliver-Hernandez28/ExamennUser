<?php
class Usuario {
    private $nombre;
    private $email;
    private $password;

    public function __construct($nombre, $email, $password) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }

    public function registrarUsuario(&$usuarios) {
        $usuarios[] = $this;
    }

    public static function mostrarUsuarios($usuarios) {
        echo "Usuarios Registrados:\n";
        foreach ($usuarios as $usuario) {
            echo "Nombre: {$usuario->nombre}, Email: {$usuario->email}, Contraseña: {$usuario->password}\n";
        }
    }
}

// Crear algunos usuarios
$usuario1 = new Usuario("Usuario1", "usuario1@example.com", "password1");
$usuario2 = new Usuario("Usuario2", "usuario2@example.com", "password2");

// Arreglo para almacenar usuarios
$usuarios = array();

// Registrar usuarios
$usuario1->registrarUsuario($usuarios);
$usuario2->registrarUsuario($usuarios);

// Mostrar usuarios registrados
Usuario::mostrarUsuarios($usuarios);
?>

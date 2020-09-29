<?php
require '../model/LoginModel.php';
require 'StarterController.php';
$ics = new StarterController();

class LoginController extends LoginModel {

    public function LoginView()
    {
        require '../view/login/login.php';
    }

    public function RegistroView()
    {
        require '../view/login/register.php';
    }

    public function RedireccionarIndex()
    {
        header("Location: http://localhost/e-commerce/index.php");
    }

    public function RedireccionarLogin()
    {
        header("Location: http://localhost/e-commerce/controller/LoginController.php?action=login");
    }

    public function RedireccionarProductos()
    {
        header("Location: http://localhost/e-commerce/controller/ProductoController.php?action=insertar");
    }

    public function GuardarUsuarioModel($nombre, $email, $password)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->clave = $password;
        $this->InsertarUsuario();
        $this->RedireccionarLogin();
    }

    public function ValidarUsuario($email, $password)
    {
        $this->email = $email;
        $this->clave = $password;
        $infoUsuario = $this->BuscarUsuarioPorEmail();
        foreach($infoUsuario as $usuario){}
        if($password == $usuario->clave){
            $_SESSION['email'] = $usuario->email;
            $_SESSION['nombre'] = $usuario->nombre;
            $this->RedireccionarProductos();
        } else {
            echo "La contraseña es incorrecta";
        }
    }

    public function CerrarSesion()
    {
        session_destroy();
        $this->RedireccionarIndex();
    }

}

if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciaController = new LoginController();
    $instanciaController->LoginView();
}

if(isset($_GET['action']) && $_GET['action']=='registrar'){
    $instanciaController = new LoginController();
    $instanciaController->RegistroView();
}

if(isset($_POST['action']) && $_POST['action']=='insertar'){
    $instanciaController = new LoginController();
    $instanciaController->GuardarUsuarioModel($_POST['nombre'],$_POST['email'],$_POST['password']);
}

if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciaController = new LoginController();
    $instanciaController->ValidarUsuario($_POST['email'],$_POST['password']);
}

if(isset($_GET['action']) && $_GET['action']=='logout'){
    $instanciaController = new LoginController();
    $instanciaController->CerrarSesion();
}
?>
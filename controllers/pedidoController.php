<?php
require_once 'models/pedido.php';

class pedidoController{
    public function hacer(){
        
        require_once 'views/pedido/hacer.php';
    }

    public function add(){
        if(isset($_SESSION['identity'])){
            $usuario_id=$_SESSION['identity']->id;
            $provincia=isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad=isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion=isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $stats=Utils::statsCarrito();
            $coste=$stats['total'];


            if($provincia && $localidad && $direccion){

                
                $pedido = new Pedido();
                $pedido->setUsuario_id($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setLocalidad($localidad);
                $pedido->setDireccion($direccion);
                $pedido->setCoste($coste);

                $save=$pedido->save();

                #Guardar en linea de pedido.
                $save_linea = $pedido->save_linea();

                if($save && $save_linea){
                    $_SESSION['pedido']='complete';
                }else{
                    $_SESSION['pedido']='failed';
                }
            }else{
                $_SESSION['pedido']='failed';
            }

            header("Location:".base_url."pedido/confirmado");

        }else{
            header("Location:".base_url);
        }
    }

    public function confirmado(){
        if(isset($_SESSION['identity'])){#restringir el acceso
            $usuario_id=$_SESSION['identity']->id;

            $pedido = new Pedido();
            $pedido->setUsuario_id($usuario_id);


            $pedido = $pedido->getOneByUser();

            $pedido_producto= new Pedido();
            $productos = $pedido_producto->getProductosByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';

    }

    public function mis_pedidos(){
        Utils::isLogged();#restringir el acceso

        $usuario_id=$_SESSION['identity']->id;
        $pedido = new Pedido();
        $pedido->setUsuario_id($usuario_id);

        $pedidos=$pedido->getAllByUser();


        require_once 'views/pedido/mis_pedidos.php';
        
    }

    public function detalle(){
        if(Utils::isLogged()){

            if (isset($_GET['id'])){
                $id=$_GET['id'];

                $pedido = new Pedido();
                $pedido->setId($id);
                $pedido = $pedido->getOne();

                $pedido_productos= new Pedido();
                $productos = $pedido_productos->getProductosByPedido($id);


                require_once 'views/pedido/detalle.php';
            }else{
                header("Location:".base_url."pedido/mis_pedidos");
            }
        }else{
            header("Location:".base_url);
        }
    }

    

    public function gestion(){
        if(Utils::isAdmin()){
            $gestion=True;

            $pedido = new Pedido();
            $pedidos=$pedido->getAll();

            require_once 'views/pedido/mis_pedidos.php';
        }else{
            header("Location:".base_url);
        }
    }

    public function estado(){
        if(Utils::isAdmin()){
            if (isset($_POST['pedido_id']) && isset($_POST['estado'])){
                $id=$_POST['pedido_id'];
                $estado=$_POST['estado'];

                $pedido = new Pedido();
                $pedido->setId($id);
                $pedido->setEstado($estado);

                $pedido=$pedido->edit();
                header("Location:".base_url."pedido/detalle&id=".$id);

            }else{
                header("Location:".base_url);
            }

        }else{
            header("Location:".base_url);
        }
    }


}
<aside id="lateral">
    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['identity'])):?>
        
            <h3>Entrar a la web</h3>
            <form action="<?=base_url?>usuario/login" method="POST">
                <label for="email">Correo</label>
                <input type="text" name="email" />

                <label for="password">Contraseña</label>
                <input type="password" name="password" />

                <input type="submit" value="Ingresar" />
            </form>
        <?php else:?>
            <h3>Hola, <?=$_SESSION['identity']->nombre?>!</h3>
        <?php endif;?>

        <ul>
            <?php if (isset($_SESSION['admin'])):?>
                <li><a href="#">Gestionar categorias</a></li>
                <li><a href="#">Gestionar productos</a></li>
                <li><a href="#">Gestionar pedidos</a></li>
            <?php endif;?>
            
            <?php if (isset($_SESSION['identity'])):?>
                <li><a href="#">Mis Pedidos</a></li>
                <li><a href="<?=base_url?>usuario/logout">Salir</a></li>
            <?php endif;?>
            
            </li>
    </div>
</aside>


<!--Contenido central-->
<div id="central">
<?php if (isset($_SESSION['identity'])):?>
    <h1>Hacer pedido</h1>
    <p>
        <a href="<?=base_url?>carrito/index">Ver carrito</a>
    </p><br/>

    <h3>Datos para el envío</h3>
    <form action="<?=base_url?>pedido/add" method="POST">

    <label for="provincia">Provincia</label>
    <input type="text" name="provincia" required>

    <label for="localidad">Localidad</label>
    <input type="text" name="localidad" required>

    <label for="direccion">Dierección</label>
    <input type="text" name="direccion" required>

    <input type="submit" value="Confirmar pedido">

    </form>

<?php else:?>
    <h1>Debes iniciar sessión para continuar.</h1>
    <p>Porfavor indentificate para realizar el pedido.</p>
<?php endif;?>
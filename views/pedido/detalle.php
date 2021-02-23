<h1>Detalles del pedido</h1>

<?php if (isset($_SESSION['pedido'])):?>
    <?php if (isset($_SESSION['admin'])):?>
        <h3>Modificar estado del pedido</h3>
        <form action="<?=base_url?>pedido/estado" method="POST">
            <input type="hidden" value="<?=$pedido->id?>" name="pedido_id">
            <select name="estado">
                <option value="confirm" <?=$pedido->estado=='confirm' ? 'selected' : '' ?>>Pendiente</option>
                <option value="preparation" <?=$pedido->estado=='preparation' ? 'selected' : '' ?>>En preparación</option>
                <option value="ready" <?=$pedido->estado=='ready' ? 'selected' : '' ?>>Preparado para enviar</option>
                <option value="sended" <?=$pedido->estado=='sended' ? 'selected' : '' ?>>Enviado</option>
            </select>

            <input type="submit" value="cambiar">
        </form><br/>
    <?php endif;?>
    <h3>Datos del envío:</h3>
    Localidad: <?=$pedido->localidad?> - <?=$pedido->provincia?><br/>
    Dirección: <?=$pedido->direccion?><br/>
    <br/>
    <h3>Datos del pedido:</h3>
    Número: <?=$pedido->id?><br/>
    Estado: <?=Utils::showStatus($pedido->estado)?><br/>
    Total a pagar: $ <?=$pedido->coste?><br/>
    <br/>Productos:
    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>
        <?php while ($producto=$productos->fetch_object()):?>
            <tr>
                <td> 
                    <?php if(isset($producto->imagen)): ?>
                        <img class="img_carrito" src="<?=base_url?>uploads/images/<?=$producto->imagen?>"/>
                    <?php else:?>
                        <img class="img_carrito" src="<?=base_url?>assets/img/logo.png"/>
                    <?php endif;?>
                </td>
                <td>        
                    <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
                </td>
                <td><?=$producto->precio?></td>

                <td><?=$producto->unidades?></td>
            </tr>
        <?php endwhile;?>
    </table>

<?php endif;?>
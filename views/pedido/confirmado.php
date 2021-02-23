<?php if (isset($_SESSION['pedido']) &&  $_SESSION['pedido'] == 'complete'):?>
    <h1>¡Pedido confirmado!</h1>
    <p>Tu pedido se ha guardado con éxito, ahora nos pondremos en contacto contigo para coordinar la compra.</p><br/>

    <?php if (isset($_SESSION['pedido'])):?>
        <h3>Datos del pedido:</h3>
        Número del pedido:<?=$pedido->id?><br/>
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
<?php elseif (!isset($_SESSION['pedido']) &&  $_SESSION['pedido'] == 'failed'):?>
    <h1>¡Ocurrio un error!</h1>
    <p>Tu pedido ha sido rechazado, si quieres puede intentarlo más tarde.</p>
<?php endif;?>

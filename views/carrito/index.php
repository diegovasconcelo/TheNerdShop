<h1>Mi carrito 🛒</h1>
<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito'])>=1):?>

    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>
        <?php 
            foreach($carrito as $indice => $elemento):
            $producto = $elemento['producto'];
        ?>
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

            <td>
                <a href="<?=base_url?>carrito/up&index=<?=$indice?>"> ➕ </a>
                <?=$elemento['unidades']?>
                <a href="<?=base_url?>carrito/down&index=<?=$indice?>"> ➖ </a>
            </td>
            <td><a href="<?=base_url?>carrito/delete&index=<?=$indice?>" class="button button-carrito button-orange" >Quitar</a></td>
        </tr>
        <?php endforeach;?>
    </table>

    <div class="delete-carrito">
        <a href="<?=base_url?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
    </div>
    <div class="footer-carrito">
        <?php $stats=Utils::statsCarrito();?>
        <h3>Total: $ <?=$stats['total']?></h3>
        <a href="<?=base_url?>pedido/hacer" class="button button-pedido button-green">Realizar pedido</a>
    </div>
<?php else:?>
    <p>¡Hey nerd, aún no tienes productos en el carrito, vamos por unas compras <a href="<?=base_url?>">🛒</a>!</p>
<?php endif;?>
<h1>Mi carrito</h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
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

        <td><?=$elemento['unidades']?></td>
    </tr>
    <?php endforeach;?>
</table>

<div class="footer-carrito">
    <?php $stats=Utils::statsCarrito();?>
    <h3>Total: $ <?=$stats['total']?></h3>
    <a href="" class="button button-pedido">Continuar compra</a>
</div>
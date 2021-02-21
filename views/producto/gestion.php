<h1>Gestión de productos</h1>

<a href="<?=base_url?>producto/crear" class="button btn-small">Crear producto</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto']=='complete'):?>
    <strong class="alert_green"> Producto creado correctamente.</strong>
<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto']=='failed'):?>
    <strong class="alert_red"> Ocurrió un error al crear el producto.</strong>
<?php endif;?>
<?php Utils::deleteSession('producto');?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete']=='complete'):?>
    <strong class="alert_green"> Producto eliminado correctamente.</strong>
<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete']=='failed'):?>
    <strong class="alert_red"> Ocurrió un error al eliminar el producto.</strong>
<?php endif;?>
<?php Utils::deleteSession('delete');?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>
    <?php while ($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?=$pro->id?></td>
            <td><?=$pro->nombre?></td>
            <td><?=$pro->precio?></td>
            <td><?=$pro->stock?></td>
            <td><a href="<?=base_url?>producto/editar&id=<?=$pro->id?>" class="button button-gestion button-green">Editar</a></td>
            <td><a href="<?=base_url?>producto/eliminar&id=<?=$pro->id?>" class="button button-gestion button-red">Eliminar</a></td>
        </tr>
    <?php endwhile;?>
</table>
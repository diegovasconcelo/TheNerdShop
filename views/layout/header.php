<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf8" />
    <title>The Nerd Shop</title>
    <link rel="stylesheet" href='<?=base_url?>assets/css/styles.css'>
</head>

<body>
    <div id="container">
        <header id='header'>
            <div id="logo">
                <img src="<?=base_url?>assets/img/logo.png" alt="locoTNS" />
                <a href="index.php">The Nerd Shop</a>
            </div>
        </header>
        <?php $categorias= Utils::showCategorias();?>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Incio</li>
                <?php while($cat=$categorias->fetch_object()):?>
                    <li><a href="#"><?=$cat->nombre;?></a></li>
                <?php endwhile;?>
                <li><a href="">About us</a></li>
            </ul>
        </nav>

        <div id="content">
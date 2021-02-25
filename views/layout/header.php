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
                <img src="<?=base_url?>assets/img/tnsLogo.png" alt="locoTNS" />
                <a href="<?=base_url?>">The Nerd Shop</a>
            </div>
        </header>
        <?php $categorias= Utils::showCategorias();?>
        <nav id="menu">
            <ul>
                <li><a href="<?=base_url?>">Incio</li>
                <?php while($cat=$categorias->fetch_object()):?>
                    <li><a href="<?=base_url?>categoria/ver&id=<?=$cat->id;?>"><?=$cat->nombre;?></a></li>
                <?php endwhile;?>
                <li><a href="<?=base_url?>">About us</a></li>
            </ul>
        </nav>

        <div id="content">
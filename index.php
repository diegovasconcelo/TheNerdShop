<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf8"/>
        <title>The Nerd Shop</title>
        <link rel="stylesheet" href='assets/css/styles.css'>
    </head>
    <body>
        <div id="container">
            <header id='header'>
                <div id="logo">
                    <img src="assets/img/logo.png" alt="locoTNS"/>
                    <a href="index.php">The Nerd Shop</a>
                </div>
            </header>

            <nav id="menu">
                <ul>
                    <li><a href="index.php">Incio</li>
                    <li><a href="">Categoria1</a></li>
                    <li><a href="">Categoria2</a></li>
                    <li><a href="">Categoria3</a></li>
                    <li><a href="">About us</a></li>
                </ul>
            </nav>

            <div id="content">
                <aside id="lateral">
                    <h3>Entrar a la web</h3>
                    <div id="login" class="block_aside">
                        <form action="" method="POST">
                            <label for="email">Correo</label>
                            <input type="text" name="email"/>

                            <label for="password">Contraseña</label>
                            <input type="password" name="password"/>

                            <input type="submit" value="Ingresar"/>
                        </form>
                        
                        <ul>
                            <li><a href="">Mis Pedidos</a></li>
                            <li><a href="">Gestionar pedidos</a></li>
                            <li><a href="">Gestionar categoria</a></li>
                        </li>
                    </div>
                </aside>

                <!--Contenido central-->
                <div id="central">
                    <h1>Los destacados</h1>
                    <div class="product">
                        <img src="assets/img/logo.png"/>
                        <h2>Camiseta azul star wars</h2>
                        <p>$ 380</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/logo.png"/>
                        <h2>Camiseta azul star wars</h2>
                        <p>$ 380</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/logo.png"/>
                        <h2>Camiseta azul star wars</h2>
                        <p>$ 380</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/logo.png"/>
                        <h2>Camiseta azul star wars</h2>
                        <p>$ 380</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                </div>
            </div>

            <footer id="footer">
                <p>Desarrollado por DVU - <?=date('Y')?></p>
            </footer>
        </div>
    </body>
</html>